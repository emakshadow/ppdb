<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mpendaftaran extends CI_Model {

  function jadwal ()
 {
 	 	$this->db->select('*');
		$this->db->from('jadwal');
		$this->db->where('status','1');
		$query = $this->db->get();
		return $query->result();
 }
  public function login_peserta($nisn,$no_hp)
 {
			$query = $this->db->get_where('peserta', array('nisn'=>$nisn , 'no_hp'=>$no_hp));
			return $query->row_array();
 }

 public function register($nisn)
 {
			$query = $this->db->get_where('peserta', array('nisn'=>$nisn ));
			return $query->row_array();
 }

 public function addregistrasi($hasil)
 {
 	 $this ->db->insert('peserta',$hasil);
 }

}