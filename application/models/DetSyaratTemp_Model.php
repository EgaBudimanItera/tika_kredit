<?php


class DetSyaratTemp_Model extends CI_Model {

	function simpan_detsyarattemp($data){
        $this->db->insert('detsyarat_temp', $data);
        return true;
    }

    function hapus_detsyarattemp($param_kode, $kode){
        $this->db->delete('detsyarat_temp', array($param_kode => $kode)); 
        return true;
    }

    function list_detsyarattemp($idnasabah){
         $this->db->select('*');
         $this->db->from('detsyarat_temp');
         $this->db->where(array('idnasabah'=>$idnasabah));
         return $query=$this->db->get()->result();
    }

}