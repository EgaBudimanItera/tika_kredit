<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan_Control extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Pembiayaan_Model');
	}
    //pages back
    public function index(){
      $data=array(
        'page'=>'admin/laporan/formditerima',
        'link' => 'laporanditerima',
        'script'=>'',
      );
      $this->load->view('partials/back/wrapper',$data);
    }
    //pages back
    public function ditolak(){
      $data=array(
        'page'=>'admin/laporan/formditolak',
        'link' => 'laporanditolak',
        'script'=>'',
      );
      $this->load->view('partials/back/wrapper',$data);
    }

    public function cetakditerima(){
      $daritanggal=date_format(date_create($this->input->post('daritanggal',true)),"Y-m-d");
      $hinggatanggal=date_format(date_create($this->input->post('hinggatanggal',true)),"Y-m-d");
      $data=array(
        'daritanggal'=>$daritanggal,
        'hinggatanggal'=>$hinggatanggal,
        'isilaporan'=>$this->Pembiayaan_Model->list_terimapembiayaanadmin2($daritanggal,$hinggatanggal),
      );
      $this->load->view('admin/laporan/diterima',$data);
    }

    public function cetakditolak(){
      $daritanggal=date_format(date_create($this->input->post('daritanggal',true)),"Y-m-d");
      $hinggatanggal=date_format(date_create($this->input->post('hinggatanggal',true)),"Y-m-d");
      $data=array(
        'daritanggal'=>$daritanggal,
        'hinggatanggal'=>$hinggatanggal,
        'isilaporan'=>$this->Pembiayaan_Model->list_tolakpembiayaanadmin2($daritanggal,$hinggatanggal),
      );
      $this->load->view('admin/laporan/ditolak',$data);
    }
}