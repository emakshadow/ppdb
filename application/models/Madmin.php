<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Madmin extends CI_Model {


public function read_informasi(){
	$this->db->select('*');
		$this->db->from('informasi');
		$this->db->where('id_informasi','1');
		$query = $this->db->get();
		return $query->result();
}

	public function total_btq()
	 {    $this->db->where('id_jalur','0');
	    $query = $this->db->get('peserta');
	    if($query->num_rows()>0)
	    {
	      return $query->num_rows();
	    }
	    else
	    {
	      return 0;
	    }
	}
public function total_akademik()
{    $this->db->where('id_jalur','1');
    $query = $this->db->get('peserta');
    if($query->num_rows()>0)
    {
      return $query->num_rows();
    }
    else
    {
      return 0;
    }
}
public function total_prestasi()
{    $this->db->where('id_jalur','2');
    $query = $this->db->get('peserta');
    if($query->num_rows()>0)
    {
      return $query->num_rows();
    }
    else
    {
      return 0;
    }
}
public function total_ketm()
{    $this->db->where('id_jalur','3');
    $query = $this->db->get('peserta');
    if($query->num_rows()>0)
    {
      return $query->num_rows();
    }
    else
    {
      return 0;
    }
}
public function total_ppt()
{    $this->db->where('id_jalur','4');
    $query = $this->db->get('peserta');
    if($query->num_rows()>0)
    {
      return $query->num_rows();
    }
    else
    {
      return 0;
    }
}
	function read_administrator($id_user){

		$this->db->select('*');
		$this->db->from('login_admin');
		$this->db->where('login_admin.id_user',$id_user);
		$query = $this->db->get();
		return $query->result();
	}
	function read_btq(){

		$this->db->select('*');
		$this->db->from('peserta');
		$this->db->join('status','peserta.id_status=status.id_status');
		$this->db->where('peserta.id_status','0');
		$this->db->or_where('peserta.id_status','1');
		$this->db->or_where('peserta.id_status','10');
		$query = $this->db->get();
		return $query->result();
	}
	 function read_prestasi ()
 {
 	 	$this->db->select('*');
		$this->db->from('peserta');
		$this->db->join('jalur','peserta.id_jalur = jalur.id_jalur');
		$this->db->join('orang_tua','peserta.id_ortu = orang_tua.id_ortu');
		$this->db->join('asal_sekolah','peserta.id_asal_sekolah = asal_sekolah.id_asal_sekolah');
		$this->db->join('alamat','peserta.id_alamat = alamat.id_alamat');
		$this->db->join('status','peserta.id_status = status.id_status');
		$this->db->where('peserta.id_jalur','2');
		$query = $this->db->get();
		return $query->result();
 }
 function read_ketm ()
 {
 	 	$this->db->select('*');
		$this->db->from('peserta');
		$this->db->join('jalur','peserta.id_jalur = jalur.id_jalur');
		$this->db->join('orang_tua','peserta.id_ortu = orang_tua.id_ortu');
		$this->db->join('asal_sekolah','peserta.id_asal_sekolah = asal_sekolah.id_asal_sekolah');
		$this->db->join('alamat','peserta.id_alamat = alamat.id_alamat');
		$this->db->join('status','peserta.id_status = status.id_status');
		$this->db->where('peserta.id_jalur','3');
		$query = $this->db->get();
		return $query->result();
 }
  function read_akademik ()
 {
 	 	$this->db->select('*');
		$this->db->from('peserta');
		$this->db->join('jalur','peserta.id_jalur = jalur.id_jalur');
		$this->db->join('orang_tua','peserta.id_ortu = orang_tua.id_ortu');
		$this->db->join('asal_sekolah','peserta.id_asal_sekolah = asal_sekolah.id_asal_sekolah');
		$this->db->join('alamat','peserta.id_alamat = alamat.id_alamat');
		$this->db->join('status','peserta.id_status = status.id_status');
		$this->db->where('peserta.id_jalur','1');
		$this->db->or_where('peserta.id_status','9');
		$this->db->or_where('peserta.id_status','90');
		$this->db->or_where('peserta.id_status','20');
		$query = $this->db->get();
		return $query->result();
 }
   function detail_akademik ($nisn)
 {
 	 	$this->db->select('*');
		$this->db->from('peserta');
		$this->db->where('peserta.nisn',$nisn);
		$query = $this->db->get();
		return $query->result_array();
 }

  function read_ppt ()
 {
 	 	$this->db->select('*');
		$this->db->from('peserta');
		$this->db->join('jalur','peserta.id_jalur = jalur.id_jalur');
		$this->db->join('orang_tua','peserta.id_ortu = orang_tua.id_ortu');
		$this->db->join('asal_sekolah','peserta.id_asal_sekolah = asal_sekolah.id_asal_sekolah');
		$this->db->join('alamat','peserta.id_alamat = alamat.id_alamat');
		$this->db->join('status','peserta.id_status = status.id_status');
		$this->db->where('peserta.id_jalur','4');
		$query = $this->db->get();
		return $query->result();
 }
  function lulus_akademik ()
 {
 	 	$this->db->select('*');
		$this->db->from('peserta');
		$this->db->join('jalur','peserta.id_jalur = jalur.id_jalur');
		$this->db->join('orang_tua','peserta.id_ortu = orang_tua.id_ortu');
		$this->db->join('asal_sekolah','peserta.id_asal_sekolah = asal_sekolah.id_asal_sekolah');
		$this->db->join('alamat','peserta.id_alamat = alamat.id_alamat');
		$this->db->join('status','peserta.id_status = status.id_status');
		$this->db->where('peserta.id_status','9');
		$query = $this->db->get();
		return $query->result();
 }
 function lulus_prestasi ()
 {
 	 	$this->db->select('*');
		$this->db->from('peserta');
		$this->db->join('jalur','peserta.id_jalur = jalur.id_jalur');
		$this->db->join('orang_tua','peserta.id_ortu = orang_tua.id_ortu');
		$this->db->join('asal_sekolah','peserta.id_asal_sekolah = asal_sekolah.id_asal_sekolah');
		$this->db->join('alamat','peserta.id_alamat = alamat.id_alamat');
		$this->db->join('status','peserta.id_status = status.id_status');
		$this->db->where('peserta.id_status','2');
		$this->db->where('peserta.id_jalur','2');
		$query = $this->db->get();
		return $query->result();
 }
 function lulus_ketm ()
 {
 	 	$this->db->select('*');
		$this->db->from('peserta');
		$this->db->join('jalur','peserta.id_jalur = jalur.id_jalur');
		$this->db->join('orang_tua','peserta.id_ortu = orang_tua.id_ortu');
		$this->db->join('asal_sekolah','peserta.id_asal_sekolah = asal_sekolah.id_asal_sekolah');
		$this->db->join('alamat','peserta.id_alamat = alamat.id_alamat');
		$this->db->join('status','peserta.id_status = status.id_status');
		$this->db->where('peserta.id_status','2');
		$this->db->where('peserta.id_jalur','3');
		$query = $this->db->get();
		return $query->result();
 }
 function lulus_ppt ()
 {
 	 	$this->db->select('*');
		$this->db->from('peserta');
		$this->db->join('jalur','peserta.id_jalur = jalur.id_jalur');
		$this->db->join('orang_tua','peserta.id_ortu = orang_tua.id_ortu');
		$this->db->join('asal_sekolah','peserta.id_asal_sekolah = asal_sekolah.id_asal_sekolah');
		$this->db->join('alamat','peserta.id_alamat = alamat.id_alamat');
		$this->db->join('status','peserta.id_status = status.id_status');
		$this->db->where('peserta.id_status','8');
		$query = $this->db->get();
		return $query->result();
 }
	function read_jadwal(){

		$this->db->select('*');
		$this->db->from('jadwal');
		$query = $this->db->get();
		return $query->result();
	}
	function read_aktifasi(){

		$this->db->select('*');
		$this->db->from('aktifasi');
		$query = $this->db->get();
		return $query->result();
	}
	function read_berita ()
 {
 	 	$this->db->select('*');
		$this->db->from('berita');
		$this->db->order_by('id_berita', 'DESC');
		$query = $this->db->get();
		return $query->result();
 }
 
	function aktifasi($id){
		$this->db->where('id_aktifasi','1')
				 ->update('aktifasi',$status = array('id_jadwal' => $id ));
	}
	public function download_berkas($nisn){
  $query = $this->db->get_where('peserta',array('nisn'=>$nisn));
  return $query->row();
 }
}