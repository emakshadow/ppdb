<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mpeserta extends CI_Model {

  function read_peserta ($nisn)
 {
 	 	$this->db->select('*');
		$this->db->from('peserta');
		$this->db->where('nisn',$nisn);
		$query = $this->db->get();
		return $query->result();
 }
}