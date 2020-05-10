<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mpendaftaran extends CI_Model {

  function jadwal ()
 {
 	 	$this->db->select('*,aktifasi.id_jadwal as tampil');
		$this->db->from('jadwal');
		$this->db->join('aktifasi', 'aktifasi.id_jadwal = jadwal.id_jadwal');
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