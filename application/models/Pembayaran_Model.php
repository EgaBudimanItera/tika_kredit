<?php


class Pembayaran_Model extends CI_Model {

	function simpan_pembayaran($data){
        $this->db->insert('pembayaran', $data);
        return true;
    }

    function hapus_pembayaran($param_kode, $kode){
        $this->db->delete('pembayaran', array($param_kode => $kode)); 
        return true;
    }
    
    function list_pembayaran($idpembiayaan){
         $this->db->select('*');
         $this->db->from('pembayaran');
         $this->db->join('pembiayaan','pembayaran.idpembiayaan=pembiayaan.idpembiayaan');
         $this->db->join('nasabah','pembiayaan.idnasabah=nasabah.idnasabah');
         $this->db->where(array('pembayaran.idpembiayaan'=>$idpembiayaan));
         return $query=$this->db->get()->result();
    }

    function bayar_ke($idpembiayaan){
      $this->db->select('*')->from('pembayaran')->where(array('idpembiayaan'=>$idpembiayaan)); 
      $q=$this->db->get();
      return $bayarke=$q->num_rows()+1;  
    }

     function kode_pembayaran(){
        //P20
        $this->db->select('Right(idbayar,5) as kode',false);
        
        $this->db->order_by('idbayar','desc');
        $this->db->limit(1);
        $query = $this->db->get('pembayaran');

        if($query->num_rows()<>0){
            $data = $query->row();
            $kode = intval($data->kode)+1;
        }else{
            $kode = 1;

        }
        $kodemax = str_pad($kode,5,"0",STR_PAD_LEFT);
        $kodejadi  = "B".date('Y').$kodemax;
        return $kodejadi;
    }
}