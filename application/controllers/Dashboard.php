<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct(){
		parent::__construct();
		
	}
    //pages back
    public function index(){
      $data = array(
        'page'=>'dashboard',
        'link'=>'dashboard',
      );
      $this->load->view('partials/back/wrapper',$data);
    }

    //pages backnasabah
    public function nasabah(){
      $data = array(
        'page'=>'dashboard',
        'link'=>'dashboard',
      );
      $this->load->view('partials/backnasabah/wrapper',$data);
    }
}