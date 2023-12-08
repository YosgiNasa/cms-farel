<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {
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
        $data = array(
            'judul_halaman' =>'Kategori Konten',
            'kategori' =>$kategori
        );
		$this->template->load('template_admin','admin/kategori_index',$data);
	}
    public function simpan(){
        $this->db->from('kategori');
        $this->db->where('nama_kategori',$this->input->post('nama_kategori'));
        $cek = $this->db->get()->result_array();
        if($cek<>NULL){
            $this->session->set_flashdata('alert',' 
        <div class="alert alert-secondary alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                   Kategori Konten sudah digunakan.
                  </div>
        
        ');
        redirect('admin/kategori');
        }
        $data = array(
            'nama_kategori'  =>$this->input->post('nama_kategori')
        );
        $this->db->insert('kategori',$data);
        $this->session->set_flashdata('alert',' 
        <div class="alert alert-secondary alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                   Berhasil manambahkan kategori.
                  </div>
        
        ');
        redirect('admin/kategori');
    }
    public function delete_data($id){
        $where = array(
            'id_kategori' => $id
        );
        $this->db->delete('kategori',$where);
        $this->session->set_flashdata('alert',' 
        <div class="alert alert-secondary alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                   Berhasil menghapus user
                  </div>
        
        ');
        redirect('admin/kategori');
    }
    public function update(){
        $this->User_model->update_kategori();
        $this->session->set_flashdata('alert',' 
        <div class="alert alert-secondary alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                   Berhasil mengupdate kategori
                  </div>
        
        ');
        redirect('admin/kategori');
    }
}
