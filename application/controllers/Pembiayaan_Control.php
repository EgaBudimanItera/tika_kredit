<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pembiayaan_Control extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model(array('Nasabah_Model','Pembiayaan_Model','DetJaminan_Model','DetJaminanTemp_Model','DetKreditLain_Model','DetKreditLainTemp_Model','DetSyarat_Model','DetSyaratTemp_Model','Pembayaran_Model'));
	}
    //pages back
    public function index(){
        $data = array(
            'page' => 'admin/pembiayaan/datapengajuan',
            'link' => 'pengajuan',
            'script'=>'',
            'isipembiayaan'=>$this->Pembiayaan_Model->list_prosespembiayaanadmin(),
        );
        $this->load->view('partials/back/wrapper', $data);
    }

    public function listditerimaadmin(){
        $data = array(
            'page' => 'admin/pembiayaan/pembiayaanditerima',
            'link' => 'diterima',
            'script'=>'',
            'isipembiayaan'=>$this->Pembiayaan_Model->list_terimapembiayaanadmin(),
        );
        $this->load->view('partials/back/wrapper', $data);
    }

    public function listditolakadmin(){
      $data = array(
          'page' => 'admin/pembiayaan/pembiayaanditolak',
          'link' => 'ditolak',
          'script'=>'',
          'isipembiayaan'=>$this->Pembiayaan_Model->list_tolakpembiayaanadmin(),
      );
      $this->load->view('partials/back/wrapper', $data);
    }

    public function detailpengajuanadmin($idpembiayaan){
      
      $data = array(
          'page' => 'admin/pembiayaan/detailpengajuanadmin',
          'link' => 'pengajuan',
          'script'=>'',
          'isipembiayaan'=>$this->Pembiayaan_Model->ambil_pengajuanpembiayaan($idpembiayaan),
      );
      $this->load->view('partials/back/wrapper', $data);
    }

    public function formsurvey($idpembiayaan){
      $data = array(
          'page' => 'admin/pembiayaan/formsurvey',
          'link' => 'pengajuan',
          'script'=>'',
          'isipembiayaan'=>$this->Pembiayaan_Model->ambil_pengajuanpembiayaan($idpembiayaan),
      );
      $this->load->view('partials/back/wrapper', $data);
    }

    //pages backnasabah
    public function pengajuan(){
        $idnasabah=$this->session->userdata('idnasabah');
        // $idnasabah='N201800001';//ambil dari login nantinya
        $data = array(
            'page' => 'nasabah/pembiayaan/datapengajuan',
            'link' => 'pengajuan',
            'script'=>'',
            'isipembiayaan'=>$this->Pembiayaan_Model->list_prosespembiayaan($idnasabah),
        );
        $this->load->view('partials/backnasabah/wrapper', $data);    
    }

    public function listditerima(){
      // $idnasabah='N201800001';//ambil dari login nantinya
      $idnasabah=$this->session->userdata('idnasabah');
      $data = array(
            'page' => 'nasabah/histori/pembiayaanditerima',
            'link' => 'diterima',
            'script'=>'',
            'isipembiayaan'=>$this->Pembiayaan_Model->list_terimapembiayaan($idnasabah),
        );
        $this->load->view('partials/backnasabah/wrapper', $data);   
    }

    public function listditolak(){
      // $idnasabah='N201800001';//ambil dari login nantinya
      $idnasabah=$this->session->userdata('idnasabah');
      $data = array(
            'page' => 'nasabah/histori/pembiayaanditolak',
            'link' => 'ditolak',
            'script'=>'',
            'isipembiayaan'=>$this->Pembiayaan_Model->list_tolakpembiayaan($idnasabah),
        );
        $this->load->view('partials/backnasabah/wrapper', $data);   
    }

    public function formtambahpengajuan(){
        $data = array(
            'page' => 'nasabah/pembiayaan/formtambahpengajuan',
            'link' => 'pengajuan',
            'script'=>'script/pembiayaan_script',
        );
        $this->load->view('partials/backnasabah/wrapper', $data);    
    }

    //downlload
    function download($filename = NULL) {
      // load download helder
      $this->load->helper('download');
      // read file contents
      $data = file_get_contents(base_url('/assets/file_upload/'.$filename));
      force_download($filename, $data);
    }

    //crud backnasabah
    public function tambahpengajuan(){
      // $idnasabah='N201800001';//ambil dari login nantinya
      $idnasabah=$this->session->userdata('idnasabah');
      //file
      $config ['upload_path'] = './assets/file_upload/';
      $config ['allowed_types'] = 'zip|rar';
      $config ['max_size'] = '10000';
      $config ['file_name'] = 'S_'.$idnasabah.date('mY');
      $this->load->library('upload', $config);  //File Uploading library
      // $this->upload->do_upload('gambar');  // input name which have to upload 
      // $file=$this->upload->data();   //variable which store the path
      // print_r($file);
      // exit();

      if ( ! $this->upload->do_upload('gambar')){
        $error = array('error' => $this->upload->display_errors());
        $this->session->set_flashdata(
          'msg', 
          '<div class="alert alert-warning"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Gagal Simpan!</strong> Data Gagal disimpan!'.$error['error'].'</div>'
        );
        redirect(base_url().'pembiayaan_control/formtambahpengajuan'); //location 
      }
      else{
        $file=$this->upload->data();
        $data=array(
          'idpembiayaan'=>$this->Pembiayaan_Model->kode_pembiayaan(),
          'tglpengajuan'=>date('Y-m-d'),
          'idnasabah'=>$idnasabah,
          'jumlah'=>$this->input->post('jumlah',true),
          'waktu'=>$this->input->post('waktu',true),
          'jenis'=>$this->input->post('jenis',true),
          'kegunaan'=>$this->input->post('kegunaan',true),
          'angsuran'=>$this->input->post('angsuran',true),
          'file'=>$file['file_name'],
        );
        $simpanpengajuan=$this->Pembiayaan_Model->simpan_pembiayaan($data);
        if($simpanpengajuan){
          $this->session->set_flashdata(
          'msg', 
          '<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Success!</strong> Data berhasil disimpan! Silahkan tunggu verifikasi dari kantor !</div>'
          );
          redirect(base_url().'pembiayaan_control/pengajuan'); //location
        }
        else{
          $this->session->set_flashdata(
          'msg', 
          '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Peringatan!</strong> Data gagal disimpan !</div>'
          );
          redirect(base_url().'pembiayaan_control/formtambahpengajuan');
        }
      };  
    }

    public function hapuspengajuan($idpembiayaan){
      $hapuspengajuan=$this->Pembiayaan_Model->hapus_pembiayaan('idpembiayaan',$idpembiayaan);
      if($hapuspengajuan){
        $this->session->set_flashdata(
          'msg', 
          '<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Success!</strong> Data berhasil Dihapus</div>'
          );
          redirect(base_url().'pembiayaan_control/pengajuan'); //location
      }
      else{
        $this->session->set_flashdata(
          'msg', 
          '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Peringatan!</strong> Data gagal dihapus !</div>'
          );
          redirect(base_url().'pembiayaan_control/pengajuan');
      }
    }

    public function editsurvey(){
      $idpembiayaan=$this->input->post('idpembiayaan',true);
      $data=array(
        'tglsurvey'=>date_format(date_create($this->input->post('tglsurvey',true)),"Y-m-d"),
        'surveyby'=>$this->input->post('surveyby',true),
      );
      $edit=$this->Pembiayaan_Model->ubah_pembiayaan('idpembiayaan',$idpembiayaan,$data);
      if($edit){
        $this->session->set_flashdata(
          'msg', 
          '<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Success!</strong> Jadwal Survey Berhasil Ditambahkan</div>'
          );
          redirect(base_url().'pembiayaan_control'); //location
      }
      else{
        $this->session->set_flashdata(
          'msg', 
          '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Peringatan!</strong> Jadwal Survey Gagal Ditambahkan !</div>'
          );
          redirect(base_url().'pembiayaan_control');
      }
    }

    public function aksipengajuan(){
      $aksi=$this->input->post('aksi',true);
      $bayarpertama=date_format(date_create($this->input->post('bayarpertama',true)),"Y-m-d");
      $bayarnext=$this->Pembiayaan_Model->hitung_nextbayar($bayarpertama);
      $bayarnext=date_format($bayarnext,'Y-m-d');
      $jumlah=$this->input->post('jumlah',true);
      $jenis=$this->input->post('jenis',true);
      $waktu=$this->input->post('waktu',true);
      $idpembiayaan=$this->input->post('idpembiayaan',true);
      if($jenis=='Umum'){
        $bunga=1.5/100;
        
      }
      else{
        $bunga=1.25/100;
         
      }
      if($aksi=='Setujui Pembiayaan'){
        $keputusan='Terima';
        $alasantolak='';
      }
      else{
        $keputusan='Tolak';
        $alasantolak=$this->input->post('alasantolak',true);
      }
      $jumlahbunga=$bunga*$waktu*$jumlah;
      $total=$jumlah+$jumlahbunga;
      $data=array(
        'keputusan'=>$keputusan,
        'bayarpertama'=>$bayarpertama,
        'bayarnext'=>$bayarnext,
        'totalpembayaran'=>$total,
        'sisapembayaran'=>$total,
        'alasantolak'=>$alasantolak,
        'tglreaksi'=>date('Y-m-d'),
      );
      // print_r($jumlah.' '.$jumlahbunga.' '.$total);
      // exit();
      $edit=$this->Pembiayaan_Model->ubah_pembiayaan('idpembiayaan',$idpembiayaan,$data);
      if($edit){
        $this->session->set_flashdata(
          'msg', 
          '<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Success!</strong> Aksi Pada Pengajuan Telah berhasil Ditentukan</div>'
          );
          redirect(base_url().'pembiayaan_control'); //location
      }
      else{
        $this->session->set_flashdata(
          'msg', 
          '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Peringatan!</strong> Aksi Pada Pengajuan Telah gagal Ditentukan !</div>'
          );
          redirect(base_url().'pembiayaan_control');
      }
    }
}