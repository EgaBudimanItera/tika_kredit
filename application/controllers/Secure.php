<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Secure extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model(array('Nasabah_Model','Secure_Model','Userlogin_Model'));
	}
    //pages back
    public function index(){
        // $data = array(
        //     'page' => 'admin/secure/datanasabah',
        //     'link' => 'nasabah',
        //     'script'=>'',
        //     'isinasabah'=>$this->Nasabah_Model->list_nasabah(),
        // );
        $this->load->view('admin/secure/formlogin');
    }
    //pages backnasabah
    public function formubahpasswordnasabah(){
        $data = array(
            'page' => 'nasabah/secure/ubahpassword',
            'link' => 'ubah',
            'script'=>'',
      		'idnasabah'=>$idnasabah=$this->session->userdata('idnasabah'),
      		'namauser'=>$idnasabah=$this->session->userdata('namauser'),
        );
        $this->load->view('partials/backnasabah/wrapper', $data);
    }

    public function formubahpasswordadmin(){
        $data = array(
            'page' => 'admin/secure/ubahpassword',
            'link' => 'ubah',
            'script'=>'',
        );
        $this->load->view('partials/back/wrapper', $data);
    }

	public function logoutnasabah(){
      $this->session->sess_destroy();
      redirect(base_url());
  }

  public function loginadmin(){
    $namauser=$this->input->post('userNama',true);
    $password=md5($this->input->post('userPassword',true));
    $where=array(
          'userNama'=>$namauser,
          'userPassword'=>$password,
    );
    $cek=$this->Userlogin_Model->cek_login($where)->num_rows(); 
    if($cek!=0){
      $data_session = array(
          'userNama' => $namauser,
          'userHakakses'=>$this->Userlogin_Model->cek_login($where)->row()->userHakakses,
          'userId'=>$this->Userlogin_Model->cek_login($where)->row()->userId,
          'status' => "login",
          
      );

      $this->session->set_userdata($data_session);
      echo '<script>alert("Selamat Datang "'.$namauser.')</script>';
      echo'<script>window.location.href="'.base_url().'dashboard";</script>';
    }
    else{
      echo '<script>alert("Maaf, Nama User / Password Anda Salah")</script>';
      echo'<script>window.location.href="'.base_url().'secure";</script>';
    }
  }

  public function logoutadmin(){
      $this->session->sess_destroy();
      redirect(base_url('secure'));
  }

  public function ubahpasswordnasabah(){
    $idnasabah=$this->input->post('idnasabah',true);
    $data=array(
    	'password'=>md5($this->input->post('password',true)),
    );
    $ubah=$this->Nasabah_Model->ubah_nasabah('idnasabah',$idnasabah,$data);
    if($ubah){
    $this->session->set_flashdata(
          'msg', 
          '<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Success!</strong> Data berhasil diubah !</div>'
      );
      echo '<script>alert("Berhasil Ubah Password !! Silahkan Login Kembali")</script>';
      $this->Secure_Model->logout();
      echo'<script>window.location.href="'.base_url().'";</script>';
        
   }else{
     $this->session->set_flashdata(
          'msg', 
          '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Peringatan!</strong> Data gagal diubah !</div>'
      );
     redirect(base_url().'secure/formubahpassword'); //location
   }
  }

  public function ubahpasswordadmin(){
    $userId=$this->input->post('userId',true);
    $data=array(
      'userPassword'=>md5($this->input->post('userPassword',true)),
    );
    $ubah=$this->Userlogin_Model->ubah_userlogin('userId',$userId,$data);
    if($ubah){
    $this->session->set_flashdata(
          'msg', 
          '<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Success!</strong> Data berhasil diubah !</div>'
      );
      echo '<script>alert("Berhasil Ubah Password !! Silahkan Login Kembali")</script>';
      $this->Secure_Model->logout();
      echo'<script>window.location.href="'.base_url().'secure";</script>';
        
   }else{
     $this->session->set_flashdata(
          'msg', 
          '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Peringatan!</strong> Data gagal diubah !</div>'
      );
     redirect(base_url().'secure/formubahpasswordadmin'); //location
   }
  }
}