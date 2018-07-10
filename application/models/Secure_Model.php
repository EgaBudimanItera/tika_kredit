<?php


class Secure_Model extends CI_Model {

	function logout(){
        $this->session->sess_destroy();
    } 
}