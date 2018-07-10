<?php


class DetJaminan_Model extends CI_Model {

	function simpan_detjaminan($data){
        $this->db->insert('detjaminan', $data);
        return true;
    }

    function hapus_detjaminan($param_kode, $kode){
        $this->db->delete('detjaminan', array($param_kode => $kode)); 
        return true;
    }

    function list_detjaminan($idpembiayaan){
         $this->db->select('*');
         $this->db->from('detjaminan');
         $this->db->where(array('idpembiayaan'=>$idpembiayaan));
         return $query=$this->db->get()->result();
    }

}