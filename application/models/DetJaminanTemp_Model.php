<?php


class DetJaminanTemp_Model extends CI_Model {

	function simpan_detjaminantemp($data){
        $this->db->insert('detjaminan_temp', $data);
        return true;
    }

    function hapus_detjaminantemp($param_kode, $kode){
        $this->db->delete('detjaminan_temp', array($param_kode => $kode)); 
        return true;
    }

    function list_detjaminantemp($idnasabah){
         $this->db->select('*');
         $this->db->from('detjaminan_temp');
         $this->db->where(array('idnasabah'=>$idnasabah));
         return $query=$this->db->get()->result();
    }

}