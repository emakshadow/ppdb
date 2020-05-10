<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cpeserta extends CI_Controller {


	public function halaman_peserta()
	{	
	

		if($peserta= $this->session->userdata('peserta')){
		extract($peserta);
		$data['peserta']			= $this->Mpeserta->read_peserta_join_status($nisn);
		$data['title']				=	'Halaman Peserta';
		$data['titlewrap']			=	'Profil';
		$data['content']			=	'frontend/page_peserta/halaman_peserta';
		$this->load->view('frontend/page_peserta/app', $data);
		}
		else{
			redirect('login_peserta');
			}
	}
	public function halaman_form()
	{	

		if($peserta = $this->session->userdata('peserta')){
		extract($peserta);
		$data['peserta']			= $this->Mpeserta->read_peserta_join_status($nisn);
		$data['title']				=	'Halaman Form';
		$data['titlewrap']			=	'Form Data Peserta';
		$data['content']			=	'frontend/page_peserta/halaman_form';
		$this->load->view('frontend/page_peserta/app', $data);
		}
		else{
			redirect('login_peserta');
			}
	}
	public function detail_peserta()
	{	

		if($peserta = $this->session->userdata('peserta')){
		extract($peserta);
		$data['peserta']			= $this->Mpeserta->read_peserta_join($nisn);
		$data['title']				=	'Data Peserta';
		$data['titlewrap']			=	'Data Peserta';
		$data['content']			=	'frontend/page_peserta/detail_peserta';
		$this->load->view('frontend/page_peserta/app', $data);
		}
		else{
			redirect('login_peserta');
			}
	}
	public function pilih_jalur(){
		$id = $_POST['id'];
		$nisn = $_POST['nisn'];

		$hasil			=	array(	
								'id_jalur'			=> $id
							);

		 $data = $this->db->where('nisn',$nisn)
		 					->update('peserta', $hasil);
		
		echo json_encode($data);
	}

	public function form_data_diri(){
		
		
		if($peserta = $this->session->userdata('peserta')){
		extract($peserta);
		$data['peserta']			= $this->Mpeserta->read_peserta($nisn);
		$data['title']				=	'Halaman Form';
		$data['titlewrap']			=	'Form Data Diri';
		$data['content']			=	'frontend/page_peserta/form-emis/data_diri';
		$this->load->view('frontend/page_peserta/form-emis/app', $data);
		}
		else{
			redirect('Cpeserta/halaman_form');
			}
	}
	public function form_asal_sekolah(){
		if($peserta = $this->session->userdata('peserta')){
		extract($peserta);
		$data['peserta']			= $this->Mpeserta->read_peserta($nisn);
		$data['title']				=	'Halaman Form';
		$data['titlewrap']			=	'Form Asal Sekolah';
		$data['content']			=	'frontend/page_peserta/form-emis/asal_sekolah';
		$this->load->view('frontend/page_peserta/form-emis/app', $data);
		}
		else{
			redirect('login_peserta');
			}
	}
	public function form_alamat(){
		if($peserta = $this->session->userdata('peserta')){
		extract($peserta);
		$data['peserta']			= $this->Mpeserta->read_peserta($nisn);
		$data['title']				=	'Halaman Form';
		$data['titlewrap']			=	'Form Alamat Peserta';
		$data['content']			=	'frontend/page_peserta/form-emis/alamat';
		$this->load->view('frontend/page_peserta/form-emis/app', $data);
		}
		else{
			redirect('login_peserta');
			}
	}
	public function form_ortu(){
		if($peserta = $this->session->userdata('peserta')){
		extract($peserta);
		$data['peserta']			= $this->Mpeserta->read_peserta($nisn);
		$data['title']				=	'Halaman Form';
		$data['titlewrap']			=	'Form Data Orang Tua Peserta';
		$data['content']			=	'frontend/page_peserta/form-emis/orang_tua';
		$this->load->view('frontend/page_peserta/form-emis/app', $data);
		}
		else{
			redirect('login_peserta');
			}
	}
		public function form_berkas(){
		if($peserta = $this->session->userdata('peserta')){
		extract($peserta);
		$data['peserta']			= $this->Mpeserta->read_peserta_join_jalur($nisn);
		$data['title']				=	'Halaman Form';
		$data['titlewrap']			=	'Form Upload Persyaratan';
		$data['content']			=	'frontend/page_peserta/form-emis/berkas';
		$this->load->view('frontend/page_peserta/form-emis/app', $data);
		}
		else{
			redirect('login_peserta');
			}
	}
	public function add_data_diri(){
		$i 				=	$this->input;
				$values			=	array(		
								'nisn'					=>	$i->post('nisn'),
								'nama_siswa'			=>	$i->post('nama_siswa'),
								'nik'						=>	$i->post('nik'),
								'tempat_lahir'				=>	$i->post('tempat_lahir'),
								'tgl_lahir'					=>	$i->post('tgl_lahir'),
								'jenis_kelamin'				=>	$i->post('jenis_kelamin'),
								'hobi'				=>	$i->post('hobi'),
								'cita'						=>	$i->post('cita'),
								'email'				=>	$i->post('email'),
								'no_hp'					=>	$i->post('no_hp'),
								'anak_ke'					=>	$i->post('anak_ke'),
								'nama_siswa'			=>	$i->post('nama_siswa'),
								'jumlah_saudara'						=>	$i->post('jumlah_saudara')
							);
				$data = $this->Mpeserta->add_data_diri($values);
				echo json_encode($data);

	}
	public function add_asal_sekolah(){
		$i 				=	$this->input;
				$values			=	array(		
								'id_asal_sekolah'			=>	$i->post('id_asal_sekolah'),
								'asal_sekolah'				=>	$i->post('asal_sekolah'),
								'jenis_sekolah'				=>	$i->post('jenis_sekolah'),
								'kota_sekolah'				=>	$i->post('kota_sekolah'),
								'status_sekolah'			=>	$i->post('status_sekolah'),
								'skhun'						=>	$i->post('skhun'),
								
							);
				$row			=	array(		
								'id_asal_sekolah'			=>	$i->post('id_asal_sekolah'),
								
							);
				$this->db->where('nisn',$i->post('id_asal_sekolah'))
								   ->update('peserta',$row);
				$data = $this->db->insert('asal_sekolah',$values);
				
				echo json_encode($data);

	}
	public function add_alamat(){
		$i 				=	$this->input;
				$values			=	array(		
								'id_alamat'					=>	$i->post('id_alamat'),
								'alamat'				=>	$i->post('alamat'),
								'provinsi'				=>	$i->post('provinsi'),
								'kota'				=>	$i->post('kota'),
								'kecamatan'			=>	$i->post('kecamatan'),
								'kelurahan'						=>	$i->post('kelurahan'),
								'kode_pos'						=>	$i->post('kode_pos'),
								'jarak_rumah'						=>	$i->post('jarak_rumah'),
								'transportasi'						=>	$i->post('transportasi'),
								
							);
				$row			=	array(		
								'id_alamat'			=>	$i->post('id_alamat'),
								
							);
				$this->db->where('nisn',$i->post('id_alamat'))
								   ->update('peserta',$row);
				$data = $this->db->insert('alamat',$values);
				
				echo json_encode($data);

	}

	public function add_ortu(){
		$i 				=	$this->input;
				$values			=	array(		
								'id_ortu'					=>	$i->post('id_ortu'),
								'no_kk'						=>	$i->post('no_kk'),
								'penghasilan_ortu'			=>	$i->post('penghasilan_ortu'),
								'no_ktp_ayah'				=>	$i->post('no_ktp_ayah'),
								'nama_ayah'					=>	$i->post('nama_ayah'),
								'tgl_lahir_ayah'					=>	$i->post('tgl_lahir_ayah'),
								'tempat_lahir_ayah'			=>	$i->post('tempat_lahir_ayah'),
								'pendidikan_ayah'			=>	$i->post('pendidikan_ayah'),
								'pekerjaan_ayah'			=>	$i->post('pekerjaan_ayah'),
								'no_hp_ayah'				=>	$i->post('no_hp_ayah'),
								'no_ktp_ibu'				=>	$i->post('no_ktp_ibu'),
								'nama_ibu'					=>	$i->post('nama_ibu'),
								'tgl_lahir_ibu'					=>	$i->post('tgl_lahir_ibu'),
								'tempat_lahir_ibu'			=>	$i->post('tempat_lahir_ibu'),
								'pendidikan_ibu'			=>	$i->post('pendidikan_ibu'),
								'pekerjaan_ibu'			=>	$i->post('pekerjaan_ibu'),
								'no_hp_ibu'				=>	$i->post('no_hp_ibu'),
							);
				$row			=	array(		
								'id_ortu'			=>	$i->post('id_ortu'),
								
							);
				$this->db->where('nisn',$i->post('id_ortu'))
								   ->update('peserta',$row);
				$data = $this->db->insert('orang_tua',$values);
				
				echo json_encode($data);

	}
	public function upload_berkas(){

		$nisn = $_POST['nisn'];
		$berkas = $_POST['berkas'];

		$config['upload_path']          = './berkas/';
		$config['allowed_types']        = 'docx|doc|pdf';
		$config['max_size']             = 10000;
 
		$this->upload->initialize($config);
 	
				
		if ( $this->upload->do_upload('berkas')){
				$values			=	array(		
								'berkas'			=>	$this->upload->data('file_name')
								
							);
				$this->db->where('nisn',$nisn)
								   ->update('peserta',$values);
				$this->session->set_flashdata('notif', '<div class="alert alert-success"><b>Upload Berhasil</b> Data berhasil di import</div>');
				redirect('Cpeserta/halaman_form/');
		}else{
			
			 $this->session->set_flashdata('notif', '<div class="alert alert-danger"><b>Upload Gagal</b> '.$this->upload->display_errors().'</div>');
            //redirect halaman
            redirect('Cpeserta/form_berkas/');
		}
	}
	public function logout_peserta(){
		$this->session->unset_userdata('peserta');
		redirect('login_peserta');
	}
}