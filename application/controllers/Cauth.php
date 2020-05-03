<?php


class Cauth extends CI_Controller {

	public function login_admin()
	{
		if($this->session->userdata('user')){
		redirect('dasbor');
		}
		else{
			$data['title']				=	'Login Administrator';
			$this->load->view('backend/login_admin', $data);
		}
	}
	public function proses_admin(){

		$output = array('error' => false);

		$username = $_POST['username'];
		$password = $_POST['password'];

		$data = $this->Mauth->login($username, $password);

		if($data){
			$this->session->set_userdata('user', $data);
			$output['message'] = 'Login Berhasil!! Masuk Ke Halaman Administrator..';
		}
		else{
			$output['error'] = true;
			$output['message'] = 'Login Gagal!! Username Atau Password Salah';
		}

		echo json_encode($output); 
	}

	public function logout_admin(){
		$this->session->unset_userdata('user');
		redirect('login');
	}
}