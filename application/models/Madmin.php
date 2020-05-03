<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Madmin extends CI_Model {
	function read_btq(){

		$this->db->select('*');
		$this->db->from('peserta');
		$query = $this->db->get();
		return $query->result();
	}
	function read_btq_array(){

		$this->db->select('*');
		$this->db->from('peserta');
		$query = $this->db->get();
		return $query->result_array();
	}
}