<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cpeserta extends CI_Controller {


	public function halaman_peserta()
	{	
	

		if($this->session->userdata('peserta')){
		

		$data['title']				=	'Halaman Peserta';
		$data['titlewrap']			=	'Profil';
		$data['content']			=	'frontend/page_peserta/halaman_peserta';
		$this->load->view('frontend/page_peserta/app', $data);
		}
		else{
			redirect('login_peserta');
			}
	}
	public function logout_peserta(){
		$this->session->unset_userdata('peserta');
		redirect('login_peserta');
	}
}