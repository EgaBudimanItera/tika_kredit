<?php


class DetKreditLainTemp_Model extends CI_Model {

	function simpan_detkreditlaintemp($data){
        $this->db->insert('detkreditlain_temp', $data);
        return true;
    }

    function hapus_detkreditlaintemp($param_kode, $kode){
        $this->db->delete('detkreditlain_temp', array($param_kode => $kode)); 
        return true;
    }

    function list_detkreditlaintemp($idnasabah){
         $this->db->select('*');
         $this->db->from('detkreditlain_temp');
         $this->db->where(array('idnasabah'=>$idnasabah));
         return $query=$this->db->get()->result();
    }

}