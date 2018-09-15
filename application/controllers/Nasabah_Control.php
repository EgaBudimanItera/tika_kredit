<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Nasabah_Control extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Nasabah_Model');
	}
    //pages back
    public function index(){
        $data = array(
            'page' => 'admin/nasabah/datanasabah',
            'link' => 'nasabah',
            'script'=>'',
            'isinasabah'=>$this->Nasabah_Model->list_nasabah(),
        );
        $this->load->view('partials/back/wrapper', $data);
    }

    //pages front
    public function pendaftaran(){
      $data = array(
            'page' => 'nasabah/nasabah/pendaftaran',
            'link' => 'pendaftaran',
            'script'=>'',
            
      );
      $this->load->view('partials/front/wrapper', $data);
    }

    public function loginnasabah(){
      $data = array(
            'page' => 'nasabah/nasabah/loginnasabah',
            'link' => 'loginnasabah',
            'script'=>'',
            
      );
      $this->load->view('partials/front/wrapper', $data);
    }

    public function syarat(){
      $data = array(
            'page' => 'nasabah/nasabah/syarat',
            'link' => 'syarat',
            'script'=>'',     
      );
      $this->load->view('partials/front/wrapper', $data);
    }

    public function sejarah(){
      $data = array(
            'page' => 'nasabah/nasabah/sejarah',
            'link' => 'sejarah',
            'script'=>'',     
      );
      $this->load->view('partials/front/wrapper', $data);
    }

    //pages back
    public function listcalonnasabah(){
      $data = array(
            'page' => 'admin/nasabah/datacalonnasabah',
            'link' => 'calonnasabah',
            'script'=>'',
            'isinasabah'=>$this->Nasabah_Model->list_calonnasabah(),
            
      );
      $this->load->view('partials/back/wrapper', $data);
    }

    public function detailcalonnasabah($idnasabah){
      $data = array(
            'page' => 'admin/nasabah/detailcalonnasabah',
            'link' => 'calonnasabah',
            'script'=>'',
            'isinasabah'=>$this->Nasabah_Model->ambil_nasabah('idnasabah',$idnasabah)->row(),
      );
      
      $this->load->view('partials/back/wrapper', $data);  
    }

    public function listnasabah(){
      $data = array(
            'page' => 'admin/nasabah/datanasabah',
            'link' => 'nasabah',
            'script'=>'',
            'isinasabah'=>$this->Nasabah_Model->list_nasabah(),
      );
      $this->load->view('partials/back/wrapper', $data);
    }

    public function detailnasabah($idnasabah){
      $data = array(
            'page' => 'admin/nasabah/detailnasabah',
            'link' => 'nasabah',
            'script'=>'',
            'isinasabah'=>$this->Nasabah_Model->ambil_nasabah('idnasabah',$idnasabah)->row(),
      );
      
      $this->load->view('partials/back/wrapper', $data);  
    }

    //pages backnasabah
    public function profilnasabah(){
      $idnasabah=$this->session->userdata('idnasabah');
      // $idnasabah='N201800001';//ambil dari login nantinya
      $data = array(
            'page' => 'nasabah/nasabah/profilnasabah',
            'link' => 'nasabah',
            'script'=>'',
            'isinasabah'=>$this->Nasabah_Model->ambil_nasabah('idnasabah',$idnasabah)->row(),
      );
      $this->load->view('partials/backnasabah/wrapper', $data);
    }

    public function formeditprofil($idnasabah){
      
      $data = array(
            'page' => 'nasabah/nasabah/formeditprofil',
            'link' => 'nasabah',
            'script'=>'',
            'isinasabah'=>$this->Nasabah_Model->ambil_nasabah('idnasabah',$idnasabah)->row(),
      );
      $this->load->view('partials/backnasabah/wrapper', $data);
    }

    //crud
    public function addnasabah(){
      //foto1
      $config ['upload_path'] = './assets/file_upload/';
      $config ['allowed_types'] = 'jpg|png|jpeg';
      $config ['max_size'] = '3000';
      $config ['file_name'] = 'NS_'.$this->input->post('nik',true).'1.jpg';
      $this->load->library('upload', $config);  //File Uploading library
      $this->upload->do_upload('foto1');  // input name which have to upload 
      $foto1=$this->upload->data();   //variable which store the path

      //foto2
      $config ['upload_path'] = './assets/file_upload/';
      $config ['allowed_types'] = 'jpg|png|jpeg';
      $config ['max_size'] = '3000';
      $config ['file_name'] = 'NS_'.$this->input->post('nik',true).'2.jpg';
      $this->load->library('upload', $config);  //File Uploading library
      $this->upload->do_upload('foto2');  // input name which have to upload 
      $foto2=$this->upload->data();   //variable which store the path
      $referred_from = $this->session->userdata('referred_from'); 
      

      if (empty($foto1)){
        // $error = array('error' => $this->upload->display_errors());
        // $this->session->set_flashdata(
        //       'msg', 
        //       '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Peringatan!</strong> Foto pertama gagal disimpan !'.$error['error'].'</div>'
        //   );
        // redirect($referred_from, 'refresh'); 
        $foto1simpan='standar.jpg';
      }
      else{
        $foto1simpan=$foto1['file_name'];  
      };
      if(empty($foto2)){
        // $error = array('error' => $this->upload->display_errors());
        // $this->session->set_flashdata(
        //       'msg', 
        //       '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Peringatan!</strong> Foto kedua gagal disimpan !'.$error['error'].'</div>'
        // );
        // redirect($referred_from, 'refresh');
        $foto2simpan='standar.jpg';
      }
      else{
        $foto2simpan=$foto2['file_name'];  
      } 
      $data=array(
        'idnasabah'=>$this->Nasabah_Model->kode_nasabah(),
        'nik'=>$this->input->post('nik',true),
        'nama'=>$this->input->post('nama',true),
        'tmplahir'=>$this->input->post('tmplahir',true),
        'tgllahir'=>$this->input->post('tgllahir',true),
        'pekerjaan'=>$this->input->post('pekerjaan',true),
        'alamatrumah'=>$this->input->post('alamatrumah',true),
        'alamatkantor'=>$this->input->post('alamatkantor',true),
        'telp'=>$this->input->post('telp',true),
        'nama2'=>$this->input->post('nama2',true),
        'tmplahir2'=>$this->input->post('tmplahir2',true),
        'tgllahir2'=>$this->input->post('tgllahir2',true),
        'pekerjaan2'=>$this->input->post('pekerjaan2',true),
        'alamatrumah2'=>$this->input->post('alamatrumah2',true),
        'tanggungan'=>$this->input->post('tanggungan',true),
        'hakmilikrumah'=>$this->input->post('hakmilikrumah',true),
        'nama3'=>$this->input->post('nama3',true),
        'alamat3'=>$this->input->post('alamat3',true),
        'telp3'=>$this->input->post('telp3',true),
        'hubungan13'=>$this->input->post('hubungan13',true),
        'foto1'=>$foto1simpan,
        'foto2'=>$foto2simpan,

        'namausaha'=>$this->input->post('namausaha',true),
        'bidangusaha'=>$this->input->post('bidangusaha',true),
        'berdiri'=>$this->input->post('berdiri',true),
        'legalitas'=>$this->input->post('legalitas',true),
        'izin'=>$this->input->post('izin',true),
        'jmlkaryawan'=>$this->input->post('jmlkaryawan',true),
        'alamatusaha'=>$this->input->post('alamatusaha',true),
        'telpusaha'=>$this->input->post('telpusaha',true),
        'tempatusaha'=>$this->input->post('tempatusaha',true), 

        'jeniskaryawan'=>$this->input->post('jeniskaryawan',true), 
        'namainstansi'=>$this->input->post('namainstansi',true),
        'telpinstansi'=>$this->input->post('telpinstansi',true),
        'namapimpinan'=>$this->input->post('namapimpinan',true),
        'jabatan'=>$this->input->post('jabatan',true),
        'golongan'=>$this->input->post('golongan',true),

        'namauser'=>$this->input->post('nik',true),
        'password'=>md5($this->input->post('tgllahir',true)),
      );  
      $daftar=$this->Nasabah_Model->simpan_nasabah($data);
      if($daftar){
        $this->session->set_flashdata(
          'msg', 
          '<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Success!</strong> Data berhasil disimpan! Silahkan tunggu verifikasi dari kantor !</div>'
        );
        redirect(base_url().'nasabah_control/pendaftaran'); //location
      } 
      else{
        $this->session->set_flashdata(
          'msg', 
          '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Peringatan!</strong> Data gagal disimpan !</div>'
        );
        redirect(base_url().'nasabah_control/pendaftaran');
      }
    }

    public function editnasabah(){

      //foto1
      $config ['upload_path'] = './assets/file_upload/';
      $config ['allowed_types'] = 'jpg|png|jpeg';
      $config ['max_size'] = '3000';
      $config ['file_name'] = 'NS_'.$this->input->post('nik',true).'1.jpg';
      $this->load->library('upload', $config);  //File Uploading library
      $this->upload->do_upload('foto1');  // input name which have to upload 
      $foto1=$this->upload->data();   //variable which store the path

      //foto2
      $config ['upload_path'] = './assets/file_upload/';
      $config ['allowed_types'] = 'jpg|png|jpeg';
      $config ['max_size'] = '3000';
      $config ['file_name'] = 'NS_'.$this->input->post('nik',true).'2.jpg';
      $this->load->library('upload', $config);  //File Uploading library
      $this->upload->do_upload('foto2');  // input name which have to upload 
      $foto2=$this->upload->data();   //variable which store the path
      
      

      if (empty($foto1)){
        $foto1simpan='standar.jpg';
      }
      else{
        $foto1simpan=$foto1['file_name'];  
      };
      if(empty($foto2)){
        $foto2simpan='standar.jpg';
      }
      else{
        $foto2simpan=$foto2['file_name'];  
      } 
      $idnasabah=$this->input->post('idnasabah',true);
      $data=array(
        'idnasabah'=>$this->input->post('idnasabah',true),
        'pekerjaan'=>$this->input->post('a',true),
        'alamatrumah'=>$this->input->post('alamatrumah',true),
        'alamatkantor'=>$this->input->post('alamatkantor',true),
        'telp'=>$this->input->post('telp',true),
        'nama2'=>$this->input->post('nama2',true),
        'tmplahir2'=>$this->input->post('tmplahir2',true),
        'tgllahir2'=>date_format(date_create($this->input->post('tgllahir2',true)),"Y-m-d"),
        'pekerjaan2'=>$this->input->post('pekerjaan2',true),
        'alamatrumah2'=>$this->input->post('alamatrumah2',true),
        'tanggungan'=>$this->input->post('tanggungan',true),
        'hakmilikrumah'=>$this->input->post('hakmilikrumah',true),
        'nama3'=>$this->input->post('nama3',true),
        'alamat3'=>$this->input->post('alamat3',true),
        'telp3'=>$this->input->post('telp3',true),
        'hubungan13'=>$this->input->post('hubungan13',true),
        'foto1'=>$foto1simpan,
        'foto2'=>$foto2simpan,

        'namausaha'=>$this->input->post('namausaha',true),
        'bidangusaha'=>$this->input->post('bidangusaha',true),
        'berdiri'=>date_format(date_create($this->input->post('berdiri',true)),"Y-m-d"),
        'legalitas'=>$this->input->post('legalitas',true),
        'izin'=>$this->input->post('izin',true),
        'jmlkaryawan'=>$this->input->post('jmlkaryawan',true),
        'alamatusaha'=>$this->input->post('alamatusaha',true),
        'telpusaha'=>$this->input->post('telpusaha',true),
        'tempatusaha'=>$this->input->post('tempatusaha',true), 

        'jeniskaryawan'=>$this->input->post('jeniskaryawan',true), 
        'namainstansi'=>$this->input->post('namainstansi',true),
        'telpinstansi'=>$this->input->post('telpinstansi',true),
        'namapimpinan'=>$this->input->post('namapimpinan',true),
        'jabatan'=>$this->input->post('jabatan',true),
        'golongan'=>$this->input->post('golongan',true),
      );  
     
      $ubah=$this->Nasabah_Model->ubah_nasabah('idnasabah',$idnasabah,$data);

      if($ubah){
        $this->session->set_flashdata(
          'msg', 
          '<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Success!</strong> Data berhasil diubah!</div>'
        );
        redirect(base_url().'nasabah_control/profilnasabah/'.$idnasabah); //location
      } 
      else{
        $this->session->set_flashdata(
          'msg', 
          '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Peringatan!</strong> Data gagal diubah !</div>'
        );
        redirect(base_url().'nasabah_control/profilnasabah/'.$idnasabah);
      }
    }

    public function terimanasabah(){
      $idnasabah=$this->input->post('idnasabah',true);
      $data=array(
        'status'=>'sah',
      );
      $terima=$this->Nasabah_Model->ubah_nasabah('idnasabah',$idnasabah,$data);
      if($terima){
        $this->session->set_flashdata(
          'msg', 
          '<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Success!</strong> Data berhasil disetujui!</div>'
        );
        redirect(base_url().'nasabah_control/'); //location
      }
      else{
        $this->session->set_flashdata(
          'msg', 
          '<div class="alert alert-warning"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Warning!</strong> Data gagal disetujui!</div>'
        );
        redirect(base_url().'nasabah_control/detailcalonnasabah'.$idnasabah); //location
      }
    }

    public function authnasabah(){
      $namauser=$this->input->post('namauser',true);
      $password=md5($this->input->post('password',true));
      $where=array(
            'namauser'=>$namauser,
            'password'=>$password,
            'status'=>'sah'
      );
      $cek=$this->Nasabah_Model->cek_login($where)->num_rows(); 
      if($cek!=0){
        $data_session = array(
            'namauser' => $namauser,
            'idnasabah'=>$this->Nasabah_Model->cek_login($where)->row()->idnasabah,
            'status' => "login",
            
        );

        $this->session->set_userdata($data_session);
        echo '<script>alert("Selamat Datang "'.$this->Nasabah_Model->cek_login($where)->row()->nama.')</script>';
        echo'<script>window.location.href="'.base_url().'nasabah_control/profilnasabah";</script>';
      }
      else{
        echo '<script>alert("Maaf, Nama User / Password Anda Salah / anda belum di terima sebagai nasabah")</script>';
        echo'<script>window.location.href="'.base_url().'nasabah_control/loginnasabah";</script>';
      }
    }
}