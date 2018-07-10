<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Userlogin_Control extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Userlogin_Model');
	}
    //pages back
    public function index(){
        $data = array(
            'page' => 'admin/userlogin/datauserlogin',
            'link' => 'userlogin',
            'script'=>'',
            'isiuser'=>$this->Userlogin_Model->list_userlogin(),
        );
        $this->load->view('partials/back/wrapper', $data);
    }
    public function formtambahuser(){
        $data = array(
            'page' => 'admin/userlogin/formtambah',
            'link' => 'userlogin',
            'script'=>'',
        );
        $this->load->view('partials/back/wrapper', $data);
    }

    public function tambahuser(){
        $data=array(
            'userNama'=>$this->input->post('userName',true),
            'userPassword'=>md5('123456'),
            'userHakakses'=>$this->input->post('userHakakses',true),
        );
        
        $simpan=$this->Userlogin_Model->simpan_userlogin($data);
        if($simpan){
         $this->session->set_flashdata(
          'msg', 
          '<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Success!</strong> Data berhasil ditambahkan</div>'
         );
         redirect(base_url().'userlogin_control/'); //location
        }
        else{
         $this->session->set_flashdata(
          'msg', 
          '<div class="alert alert-warning"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Warning!</strong> Data gagal ditambahkan!</div>'
         );
         redirect(base_url().'userlogin_control/formtambah'); //location
        }
    }
}