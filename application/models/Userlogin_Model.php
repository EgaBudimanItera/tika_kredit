<?php


class Userlogin_Model extends CI_Model {

	function simpan_userlogin($data){
        $this->db->insert('userlogin', $data);
        return true;
    }

    function hapus_userlogin($param_kode, $kode){
        $this->db->delete('userlogin', array($param_kode => $kode)); 
        return true;
    }

    function ubah_userlogin($param_kode, $kode, $data){       
        $this->db->where($param_kode, $kode);
        $this->db->update('userlogin', $data); 
        return true;
    }

    function cek_login($where){      
        return $this->db->get_where('userlogin',$where);
    }

    function list_userlogin(){
     
     $this->db->select('*');
     $this->db->from('userlogin');
     // $this->db->where(array('userHakakses!='=>'Pimpinan'));
     return $query=$this->db->get()->result();
    }
}