<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cfrontend extends CI_Controller {


	public function welcome()
	{
		$data['title']				=	'PPDB MAN 2 BANDUNG';
		$data['berita']				=	$this->Madmin->read_berita();
		$data['informasi']				=	$this->Madmin->read_informasi();
		$data['pendaftaran']		=	$this->Mpendaftaran->jadwal();
		$this->load->view('frontend/app', $data);
	}

	public function daftar()
	{
		$data['title']				=	'Halaman Pendaftaran Peserta';
		$this->load->view('frontend/pendaftaran/daftar', $data);
	}
	public function login_peserta()
	{
		$data['title']				=	'Halaman Login Peserta';
		$this->load->view('frontend/pendaftaran/login_peserta', $data);
	}
	public function proses_login_peserta(){

		$output = array('error' => false);

		$nisn = $_POST['nisn'];
		$no_hp = $_POST['no_hp'];

		$data = $this->Mpendaftaran->login_peserta($nisn, $no_hp);

		if($data){
			$this->session->set_userdata('peserta', $data);
			$output['message'] = 'Login Berhasil!! Masuk Ke Halaman Administrator..';
		}
		else{
			$output['error'] = true;
			$output['message'] = 'Login Gagal!! Username Atau Password Salah';
		}

		echo json_encode($output); 
	}

	public function register()
	{
		
		
		$nisn = $_POST['nisn'];
		$nama_peserta = $_POST['nama_peserta'];
		$tgl_lahir = $_POST['tgl_lahir'];
		$asal_sekolah = $_POST['asal_sekolah'];
		$no_hp = $_POST['no_hp'];
		$data = $this->Mpendaftaran->register($nisn);

		if ($nisn == '') {
    		$output['error']['nisn'] = 'NISN tidak boleh kosong';
		}
		if ($nama_peserta == '') {
		    $output['error']['nama_peserta'] = 'Nama Lengkap tidak boleh kosong';
		}
		if ($tgl_lahir == '') {
		    $output['error']['tgl_lahir'] = 'Tanggal Lahir tidak boleh kosong';
		}
		if ($asal_sekolah == '') {
		    $output['error']['asal_sekolah'] = 'Asal Sekolah tidak boleh kosong';
		}
		if ($no_hp == '') {
		    $output['error']['no_hp'] = 'Nomor Whatsapp tidak boleh kosong';
		}
		if ($data){
			$output['error']['nisn'] = 'NISN sudah terdaftar';
		}
		if (empty($output['error'])) {
    	$output['hasil'] = 'sukses';
		}
       
       
		echo json_encode($output); 
	}
	public function proses_register(){
		$nisn = $_POST['nisn'];
		$nama_peserta = $_POST['nama_peserta'];
		$tgl_lahir = $_POST['tgl_lahir'];
		$no_hp = $_POST['no_hp'];
		$asal_sekolah = $_POST['asal_sekolah'];

		$hasil			=	array(		
								'id_peserta'			=> '',
								'nisn'					=> $nisn,
								'nama_siswa'			=> $nama_peserta,
								'tgl_lahir'				=> $tgl_lahir,
								'asal_sekolah'			=> $asal_sekolah,
								'no_hp'					=> $no_hp,
							);

		 $data = $this->Mpendaftaran->addregistrasi($hasil);
		 if($data){
			$output['hasil'] = 'sukses';
		}
		else{
			$output['hasil'] = 'gagal';		
		}

		echo json_encode($output); 

	}

}