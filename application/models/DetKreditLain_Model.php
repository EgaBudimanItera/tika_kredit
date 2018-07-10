<?php


class DetKreditLain_Model extends CI_Model {

	function simpan_detkreditlain($data){
        $this->db->insert('detkreditlain', $data);
        return true;
    }

    function hapus_detkreditlain($param_kode, $kode){
        $this->db->delete('detkreditlain', array($param_kode => $kode)); 
        return true;
    }

    function list_detkreditlain($idpembiayaan){
         $this->db->select('*');
         $this->db->from('detkreditlain');
         $this->db->where(array('idpembiayaan'=>$idpembiayaan));
         return $query=$this->db->get()->result();
    }

}