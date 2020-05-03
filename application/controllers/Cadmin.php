<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cadmin extends CI_Controller {

	public function dasbor()
	{

		if($this->session->userdata('user')){
		$data['title']				=	'Halaman Administrator';
		$data['titlewrap']			= 	'Dashboard';
		$data['content']			=	'backend/page/dashboard';
		$this->load->view('backend/app', $data);
		}
		else{
			redirect('login');
			}
		}

	public function btq(){
		$data['data_peserta']		=	$this->Madmin->read_btq();
		$data['title']				=	'Halaman Administrator';
		$data['titlewrap']			= 	'Peserta BTQ';
		$data['content']			=	'backend/page/btq';
		$this->load->view('backend/app', $data);
	}

	
	

}