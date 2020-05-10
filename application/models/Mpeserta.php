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
  function read_peserta_join_status ($nisn)
 {
 	 	$this->db->select('*');
		$this->db->from('peserta');
		$this->db->join('status','peserta.id_status = status.id_status');
		$this->db->join('informasi','informasi.id_informasi = 1');
		$this->db->where('nisn',$nisn);
		$query = $this->db->get();
		return $query->result();
 }
  function read_peserta_join_jalur ($nisn)
 {
 	 	$this->db->select('*');
		$this->db->from('peserta');
		$this->db->join('status','peserta.id_status = status.id_status');
		$this->db->join('jalur','peserta.id_jalur = jalur.id_jalur');
		$this->db->where('nisn',$nisn);
		$query = $this->db->get();
		return $query->result();
 }
 function read_peserta_join ($nisn)
 {
 	 	$this->db->select('*');
		$this->db->from('peserta');
		$this->db->join('jalur','peserta.id_jalur = jalur.id_jalur');
		$this->db->join('orang_tua','peserta.id_ortu = orang_tua.id_ortu');
		$this->db->join('asal_sekolah','peserta.id_asal_sekolah = asal_sekolah.id_asal_sekolah');
		$this->db->join('alamat','peserta.id_alamat = alamat.id_alamat');
		$this->db->join('status','peserta.id_status = status.id_status');
		$this->db->where('nisn',$nisn);
		$query = $this->db->get();
		return $query->result();
 }
function add_data_diri($values){
		$this->db->where('nisn', $values['nisn']);
		$this->db->update('peserta', $values);
	}
function add_asal_sekolah($values){
	$this->db->where('nisn', $values['nisn']);
	$this->db->update('peserta', $values);
	}
}