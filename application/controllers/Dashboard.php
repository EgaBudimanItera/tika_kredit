<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model(array('Nasabah_Model','Pembiayaan_Model'));
	}
    //pages back
    public function index(){
      $data = array(
        'page'=>'dashboard',
        'link'=>'dashboard',
        'jumlahnasabah'=>$this->Nasabah_Model->jumlah_nasabah()->num_rows(),
        'jumlahcalonnasabah'=>$this->Nasabah_Model->jumlah_calonnasabah()->num_rows(),
        'jumlpembiayaanditerima'=>$this->Pembiayaan_Model->jumlah_pembiayaanditerima()->num_rows(),
        'jumlpembiayaanditolak'=>$this->Pembiayaan_Model->jumlah_pembiayaanditolak()->num_rows(),
        'jumlahpembiayaan'=>$this->Pembiayaan_Model->jumlah_pembiayaan()->num_rows(),
      );
      $this->load->view('partials/back/wrapper',$data);
    }

    //pages backnasabah
    public function nasabah(){
      $data = array(
        'page'=>'dashboardnasabah',
        'link'=>'dashboard',
      );
      $this->load->view('partials/backnasabah/wrapper',$data);
    }
}