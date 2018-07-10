<?php


class Nasabah_Model extends CI_Model {

	function simpan_nasabah($data){
        $this->db->insert('nasabah', $data);
        return true;
    }

    function ubah_nasabah($param_kode, $kode, $data){       
        $this->db->where($param_kode, $kode);
        $this->db->update('nasabah', $data); 
        return true;
    }

    function hapus_nasabah($param_kode, $kode){
        $this->db->delete('nasabah', array($param_kode => $kode)); 
        return true;
    }

    function cek_login($where){      
        return $this->db->get_where('nasabah',$where);
    }

    
    
    function list_calonnasabah(){
         $this->db->select('*');
         $this->db->from('nasabah');
         $this->db->where(array('status'=>'tidak'));
         return $query=$this->db->get()->result();
    }

    function list_nasabah(){
         $this->db->select('*');
         $this->db->from('nasabah');
         $this->db->where(array('status'=>'sah'));
         return $query=$this->db->get()->result();
    }

    function ambil_nasabah($param_kode, $kode){
        $this->db->select('*');
        $this->db->from('nasabah');
        $this->db->where($param_kode,$kode);
        return $query=$this->db->get();
    }

    function kode_nasabah(){
    	//N201700001
    	$this->db->select('Right(idnasabah,5) as kode',false);
    	
    	$this->db->order_by('idnasabah','desc');
    	$this->db->limit(1);
    	$query = $this->db->get('nasabah');

    	if($query->num_rows()<>0){
            $data = $query->row();
            $kode = intval($data->kode)+1;
        }else{
            $kode = 1;

        }
        $kodemax = str_pad($kode,5,"0",STR_PAD_LEFT);
        $kodejadi  = "N".date('Y').$kodemax;
        return $kodejadi;
   	}
}