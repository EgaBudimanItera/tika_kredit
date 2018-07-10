<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pembayaran_Control extends CI_Controller {

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

    public function listpembayaranadmin($idpembiayaan){
      $data = array(
        'page' => 'admin/pembayaran/datapembayaran',
        'link' => 'diterima',
        'script'=>'',
        'isipembayaran'=>$this->Pembayaran_Model->list_pembayaran($idpembiayaan),
        'sisapembayaran'=>$this->Pembiayaan_Model->ambil_pengajuanpembiayaan($idpembiayaan),
      );
      $this->load->view('partials/back/wrapper', $data);
    }

    public function formtambahpembayaran($idpembiayaan){
      $data = array(
        'page' => 'admin/pembayaran/formpembayaran',
        'link' => 'diterima',
        'script'=>'',
        'isipembiayaan'=>$this->Pembiayaan_Model->ambil_pengajuanpembiayaan($idpembiayaan),
        'bayarke'=>$this->Pembayaran_Model->bayar_ke($idpembiayaan),
      );
      $this->load->view('partials/back/wrapper', $data);
    }

    public function addpembayaran(){
      $waktu=$this->input->post('waktu',true);
      $bayarke=$this->input->post('bayarke',true);
      $idpembiayaan=$this->input->post('idpembiayaan',true);
      $data=array(
        'idbayar'=>$this->Pembayaran_Model->kode_pembayaran(),
        'idpembiayaan'=>$idpembiayaan,
        'tglbayar'=>date('Y-m-d'),
        'bayarke'=>$bayarke,
        'jumlah'=>$this->input->post('angsuran',true),
      );

      if($bayarke==$waktu){
        $dataupdate=array('statuslunas'=>'Lunas');
        $update=$this->Pembiayaan_Model->ubah_pembiayaan('idpembiayaan',$idpembiayaan,$dataupdate);
      }

      $simpan=$this->Pembayaran_Model->simpan_pembayaran($data);
      
      if($simpan){
        $this->session->set_flashdata(
          'msg', 
          '<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Success!</strong> Data berhasil disimpan! </div>'
          );
          redirect(base_url().'pembayaran_control/listpembayaranadmin/'.$this->input->post('idpembiayaan',true)); //location
      }
      else{
        $this->session->set_flashdata(
          'msg', 
          '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Peringatan!</strong> Data gagal disimpan !</div>'
          );
          redirect(base_url().'pembayaran_control/listpembayaranadmin/'.$this->input->post('idpembiayaan',true));  
      }
    }

    //pages backnasabah
    public function listpembayaran($idpembiayaan){
      $data = array(
        'page' => 'nasabah/histori/datapembayaran',
        'link' => 'diterima',
        'script'=>'',
        'isipembayaran'=>$this->Pembayaran_Model->list_pembayaran($idpembiayaan),
        'sisapembayaran'=>$this->Pembiayaan_Model->ambil_pengajuanpembiayaan($idpembiayaan),
      );
      $this->load->view('partials/backnasabah/wrapper', $data);  
    }
}