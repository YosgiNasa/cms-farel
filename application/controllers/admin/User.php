<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('User_model');
        if($this->session->userdata('level') != 'Admin'){
            redirect('admin/home');
        }
    }
	public function index(){
        $this->db->from('user');
        $this->db->order_by('nama','ASC');
        $user = $this->db->get()->result_array();
        $data = array(
            'judul_halaman' =>'Data Pengguna',
            'user' =>$user
        );
		$this->template->load('template_admin','admin/user_index',$data);
	}
    public function simpan(){
        $this->db->from('user');
        $this->db->where('username',$this->input->post('username'));
        $cek = $this->db->get()->result_array();
        if($cek<>NULL){
            $this->session->set_flashdata('alert',' 
        <div class="alert alert-secondary alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                   Username sudah ada
                  </div>
        
        ');
        redirect('admin/user');
        }
        $this->User_model->simpan();
        $this->session->set_flashdata('alert',' 
        <div class="alert alert-secondary alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                   Berhasil manambahkan user
                  </div>
        
        ');
        redirect('admin/user');
    }
    public function delete_data($id){
        $where = array(
            'id_user' => $id
        );
        $this->db->delete('user',$where);
        $this->session->set_flashdata('alert',' 
        <div class="alert alert-secondary alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                   Berhasil menghapus user
                  </div>
        
        ');
        redirect('admin/user');
    }
    public function update(){
        $this->User_model->update();
        $this->session->set_flashdata('alert',' 
        <div class="alert alert-secondary alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                   Berhasil mengupdate user
                  </div>
        
        ');
        redirect('admin/user');
    }
}
