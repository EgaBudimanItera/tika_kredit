<?php


class Pembiayaan_Model extends CI_Model {

	function simpan_pembiayaan($data){
        $this->db->insert('pembiayaan', $data);
        return true;
    }

    function ubah_pembiayaan($param_kode,$kode,$data){
        $this->db->where($param_kode, $kode);
        $this->db->update('pembiayaan', $data); 
        return true;
    }

    function hapus_pembiayaan($param_kode, $kode){
        $this->db->delete('pembiayaan', array($param_kode => $kode)); 
        return true;
    }

    function hitung_nextbayar($date){
        $date = new DateTime($date);
        $day = $date->format('j');

        $date->modify("+1 month");
        $next_month_day = $date->format('j');

        if ($day != $next_month_day)
            $date->modify('last day of last month');

        return $date;
    }

    function hitung_sisabayar($sisapembayaran,$angsuran){
        $sisa=$sisapembayaran-$angsuran;
        return $sisa;
    }

    function list_prosespembiayaan($idnasabah){
      $this->db->select('*');
      $this->db->from('pembiayaan');
      $this->db->where(array('keputusan'=>'Proses','idnasabah'=>$idnasabah));
      return $query=$this->db->get()->result();
    }

    function list_prosespembiayaanadmin(){
     $this->db->select('*');
     $this->db->from('pembiayaan');
     $this->db->join('nasabah','pembiayaan.idnasabah=nasabah.idnasabah');
     $this->db->where(array('keputusan'=>'Proses'));
     return $query=$this->db->get()->result();
    }    

    function list_tolakpembiayaan($idnasabah){
     $this->db->select('*');
     $this->db->from('pembiayaan');
     $this->db->where(array('keputusan'=>'Tolak','idnasabah'=>$idnasabah));
     return $query=$this->db->get()->result();
    }

    function list_tolakpembiayaanadmin(){
     $this->db->select('*');
     $this->db->from('pembiayaan');
     $this->db->join('nasabah','pembiayaan.idnasabah=nasabah.idnasabah');
     $this->db->where(array('keputusan'=>'Tolak'));
     return $query=$this->db->get()->result();
    }

    function list_terimapembiayaan($idnasabah){
     $this->db->select('*');
     $this->db->from('pembiayaan');
     $this->db->where(array('keputusan'=>'Terima','idnasabah'=>$idnasabah));
     return $query=$this->db->get()->result();
    }

    function list_terimapembiayaanadmin(){
     $this->db->select('*');
     $this->db->from('pembiayaan');
     $this->db->join('nasabah','pembiayaan.idnasabah=nasabah.idnasabah');
     $this->db->where(array('keputusan'=>'Terima'));
     return $query=$this->db->get()->result();
    }

    function list_terimapembiayaanadmin2($dari,$hingga){
     $this->db->select('*');
     $this->db->from('pembiayaan');
     $this->db->join('nasabah','pembiayaan.idnasabah=nasabah.idnasabah');
     $this->db->where(array('keputusan'=>'Terima','tglreaksi>='=>$dari,'tglreaksi<='=>$hingga));
     return $query=$this->db->get()->result();
    }

     function list_tolakpembiayaanadmin2($dari,$hingga){
     $this->db->select('*');
     $this->db->from('pembiayaan');
     $this->db->join('nasabah','pembiayaan.idnasabah=nasabah.idnasabah');
     $this->db->where(array('keputusan'=>'Tolak','tglreaksi>='=>$dari,'tglreaksi<='=>$hingga));
     return $query=$this->db->get()->result();
    }

    function ambil_pengajuanpembiayaan($idpembiayaan){
     $this->db->select('*');
     $this->db->from('pembiayaan');
     $this->db->where(array('idpembiayaan'=>$idpembiayaan));
     return $query=$this->db->get()->row();
    }

    
    function kode_pembiayaan(){
    	//P20
    	$this->db->select('Right(idpembiayaan,5) as kode',false);
    	
    	$this->db->order_by('idpembiayaan','desc');
    	$this->db->limit(1);
    	$query = $this->db->get('pembiayaan');

    	if($query->num_rows()<>0){
            $data = $query->row();
            $kode = intval($data->kode)+1;
        }else{
            $kode = 1;

        }
        $kodemax = str_pad($kode,5,"0",STR_PAD_LEFT);
        $kodejadi  = "P".date('Y').$kodemax;
        return $kodejadi;
   	}
}