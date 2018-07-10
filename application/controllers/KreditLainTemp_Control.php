<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class KreditLainTemp_Control extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('DetKreditLainTemp_Model');
	}
    //pages back
    public function index(){
      $idnasabah=$this->session->userdata('idnasabah');
      // $idnasabah='N201800001';
      $data = array(
            'listkreditlain' =>$this->DetKreditLainTemp_Model->list_detkreditlaintemp($idnasabah),
            'script'=>'script/pembiayaan_script',
      );
      $this->load->view('ajax/kreditlaintemp',$data);
    }
}