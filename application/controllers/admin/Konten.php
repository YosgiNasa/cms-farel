<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konten extends CI_Controller {
    public function __construct(){
        parent::__construct();
        if($this->session->userdata('level')==NULL){
            redirect('admin/home');
        }
        $this->load->model('User_model');
    }
	public function index(){
        $this->db->from('kategori');
        $this->db->order_by('nama_kategori','ASC');
        $kategori = $this->db->get()->result_array();

        $this->db->from('konten a');
        $this->db->join('kategori b', 'a.id_kategori = b.id_kategori','left');
        $this->db->order_by('tanggal','DESC');
        $konten = $this->db->get()->result_array();
        $data = array(
            'judul_halaman' =>'Halaman Konten',
            'kategori' =>$kategori,
            'konten'   =>$konten
        );
		$this->template->load('template_admin','admin/konten_index',$data);
    }

    public function simpan(){
        $namafoto = date('YmdHis').'.jpg';
        $config['upload_path']          = 'assets/upload/konten/';
        $config['max_size'] = 500 * 1024; //3 * 1024 * 1024; //3Mb; 0=unlimited
        $config['file_name'] = $namafoto;
        $config['allowed_types']  = '*';
        $this->load->library('upload', $config);
        if($_FILES['foto']['size'] >= 500 * 1024){
            $this->session->set_flashdata('alert', '
                <div class="alert alert-danger alert-dismissible" role="alert">
                Ukuran foto terlalu besar, upload ulang foto dengan ukuran yang kurang dari 500 KB.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                    ');
            redirect('admin/konten');  
        }  elseif( ! $this->upload->do_upload('foto')){
            $error = array('error' => $this->upload->display_errors());
        }else{
            $data = array('upload_data' => $this->upload->data());
           
       
        $this->db->from('konten');
        $this->db->where('judul',$this->input->post('judul'));
        $cek = $this->db->get()->result_array();

        if($cek<>NULL){
            $this->session->set_flashdata('alert',' 
            <div class="alert alert-secondary alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
            </button>
            judul Konten sudah digunakan.
            </div>
            
        ');
        redirect('admin/konten');
    }else{
        $data = array(
            'judul'  =>$this->input->post('judul'),
            'id_kategori'  =>$this->input->post('id_kategori'),
            'keterangan'  =>$this->input->post('keterangan'),
            'foto' => $namafoto,
            'tanggal'  => date('Y-m-d'),
            'username'  =>$this->session->userdata('username'),
            'slug'  =>str_replace(' ','-',$this->input->post('judul'))
        );
        
        $this->db->insert('konten',$data);
        $this->session->set_flashdata('alert',' 
        <div class="alert alert-secondary alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
        </button>
        Berhasil manambahkan konten.
        </div>
        ');
        redirect('admin/konten');
    }
    }
}
    public function update(){
        $namafoto = $this->input->post('foto');
        $config['upload_path']          = 'assets/upload/konten/';
        $config['max_size'] = 500 * 1024; //3 * 1024 * 1024; //3Mb; 0=unlimited
        $config['file_name'] = $namafoto;
        $config['allowed_types']  = '*';
        $this->load->library('upload', $config);
        if($_FILES['foto']['size'] >= 500 * 1024){
            $this->session->set_flashdata('alert', '
                <div class="alert alert-danger alert-dismissible" role="alert">
                Ukuran foto terlalu besar, upload ulang foto dengan ukuran yang kurang dari 500 KB.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                    ');
            redirect('admin/konten');  
        }  elseif( ! $this->upload->do_upload('foto')){
            $error = array('error' => $this->upload->display_errors());
        }else{
            $data = array('upload_data' => $this->upload->data());
        }
        $data = array(
            'judul'  =>$this->input->post('judul'),
            'keterangan'  =>$this->input->post('keterangan'),
            'id_kategori'  =>$this->input->post('id_kategori'),
            'slug'  =>str_replace(' ','-',$this->input->post('judul'))
        );
        
        $dimana = array(
            'foto' => $this->input->post('nama_foto')
        );
        $this->db->update('konten',$data, $dimana);
        $this->session->set_flashdata('alert',' 
        <div class="alert alert-secondary alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
        </button>
        Ganti manambahkan konten.
        </div>
        ');
        redirect('admin/konten');
    // }
}


    public function delete_data($id){
        $where = array(
            'id_konten' => $id
        );
        $this->db->delete('konten',$where);
        $this->session->set_flashdata('alert',' 
        <div class="alert alert-secondary alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                   Berhasil menghapus Konten
                  </div>
        
        ');
        redirect('admin/konten');
    }
}

   
