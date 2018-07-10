<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class SyaratTemp_Control extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('DetSyaratTemp_Model');
	}
    //pages back
    public function index(){
      //$idnasabah=$this->session->userdata('idnasabah');
      $idnasabah='N201800001';
      $data = array(
            'listsyarat' =>$this->DetSyaratTemp_Model->list_detsyarattemp($idnasabah),
            'script'=>'script/pembiayaan_script',
      );
      $this->load->view('ajax/syarattemp',$data);
    }
}