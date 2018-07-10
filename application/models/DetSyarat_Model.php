<?php


class DetSyarat_Model extends CI_Model {

	function simpan_detsyarat($data){
        $this->db->insert('detsyarat', $data);
        return true;
    }

    function hapus_detsyarat($param_kode, $kode){
        $this->db->delete('detsyarat', array($param_kode => $kode)); 
        return true;
    }

    function list_detsyarat($idpembiayaan){
         $this->db->select('*');
         $this->db->from('detsyarat');
         $this->db->where(array('idpembiayaan'=>$idpembiayaan));
         return $query=$this->db->get()->result();
    }

}