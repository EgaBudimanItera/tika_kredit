<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class JaminanTemp_Control extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('DetJaminanTemp_Model');
	}
    //pages back
    public function index(){
      //$idnasabah=$this->session->userdata('idnasabah');
      $idnasabah='N201800001';
      $data = array(
            'listjaminan' =>$this->DetJaminanTemp_Model->list_detjaminantemp($idnasabah),
            'script'=>'script/pembiayaan_script',
      );
      $this->load->view('ajax/jaminantemp',$data);
    }
}