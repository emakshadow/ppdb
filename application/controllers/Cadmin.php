 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cadmin extends CI_Controller {

	public function dasbor()
	{

		if($user= $this->session->userdata('user')){
		extract($user);

		$data['total_btq']			= 	$this->Madmin->total_btq();
		$data['total_akademik']		= 	$this->Madmin->total_akademik();
		$data['total_prestasi']	= 	$this->Madmin->total_prestasi();
		$data['total_ketm']			= 	$this->Madmin->total_ketm();
		$data['total_ppt']			= 	$this->Madmin->total_ppt();
		$data['user']				= 	$this->Madmin->read_administrator($id_user);
		$data['title']				=	'Halaman Administrator';
		$data['titlewrap']			= 	'Dashboard';
		$data['jadwal']				=	$this->Madmin->read_aktifasi();
		$data['informasi']				=	$this->Madmin->read_informasi();
		$data['content']			=	'backend/page/dashboard';
		$this->load->view('backend/app', $data);
		}
		else{
			redirect('login');
			}
		}

	public function btq(){
		if($user= $this->session->userdata('user')){
		extract($user);
		$data['user']			= $this->Madmin->read_administrator($id_user);
		if($user= $this->session->userdata('user')){
		extract($user);
		$data['user']			= $this->Madmin->read_administrator($id_user);
		$data['data_peserta']		=	$this->Madmin->read_btq();
		$data['title']				=	'Halaman Administrator';
		$data['titlewrap']			= 	'Peserta BTQ';
		$data['content']			=	'backend/page/btq';
		$this->load->view('backend/app', $data);
		}
		else{
			redirect('login');
			}
	}
		else{
			redirect('login');
			}
	}
	public function jalur_prestasi(){
		if($user= $this->session->userdata('user')){
		extract($user);
		$data['user']			= $this->Madmin->read_administrator($id_user);
		$data['data_peserta']		=	$this->Madmin->read_prestasi();
		$data['title']				=	'Halaman Administrator';
		$data['titlewrap']			= 	'Peserta Jalur Prestasi';
		$data['content']			=	'backend/page/prestasi';
		$this->load->view('backend/app', $data);
		}
		else{
			redirect('login');
			}
	}
	public function jalur_ketm(){
		if($user= $this->session->userdata('user')){
		extract($user);
		$data['user']			= $this->Madmin->read_administrator($id_user);
		$data['data_peserta']		=	$this->Madmin->read_ketm();
		$data['title']				=	'Halaman Administrator';
		$data['titlewrap']			= 	'Peserta Jalur KETM';
		$data['content']			=	'backend/page/ketm';
		$this->load->view('backend/app', $data);
		}
		else{
			redirect('login');
			}
	}
	public function jalur_akademik(){
		if($user= $this->session->userdata('user')){
		extract($user);
		$data['user']			= $this->Madmin->read_administrator($id_user);
		$data['data_peserta']		=	$this->Madmin->read_akademik();
		$data['title']				=	'Halaman Administrator';
		$data['titlewrap']			= 	'Peserta Jalur Akademik';
		$data['content']			=	'backend/page/akademik';
		$this->load->view('backend/app', $data);
		}
		else{
			redirect('login');
			}
	}
	public function jalur_ppt(){
		if($user= $this->session->userdata('user')){
		extract($user);
		$data['user']			= $this->Madmin->read_administrator($id_user);
		$data['data_peserta']		=	$this->Madmin->read_ppt();
		$data['title']				=	'Halaman Administrator';
		$data['titlewrap']			= 	'Peserta Jalur PPT';
		$data['content']			=	'backend/page/ppt';
		$this->load->view('backend/app', $data);
		}
		else{
			redirect('login');
			}
	}
	public function lulus_akademik(){
		if($user= $this->session->userdata('user')){
		extract($user);
		$data['user']			= $this->Madmin->read_administrator($id_user);
		$data['data_peserta']		=	$this->Madmin->lulus_akademik();
		$data['title']				=	'Halaman Administrator';
		$data['titlewrap']			= 	'Peserta Lulus Jalur Akademik';
		$data['content']			=	'backend/page/lulus_akademik';
		$this->load->view('backend/app', $data);
		}
		else{
			redirect('login');
			}
	}
	public function lulus_prestasi(){
		if($user= $this->session->userdata('user')){
		extract($user);
		$data['user']			= $this->Madmin->read_administrator($id_user);
		$data['data_peserta']		=	$this->Madmin->lulus_prestasi();
		$data['title']				=	'Halaman Administrator';
		$data['titlewrap']			= 	'Peserta Lulus Jalur Prestasi';
		$data['content']			=	'backend/page/lulus_prestasi';
		$this->load->view('backend/app', $data);
		}
		else{
			redirect('login');
			}
	}
	public function lulus_ketm(){
		if($user= $this->session->userdata('user')){
		extract($user);
		$data['user']			= $this->Madmin->read_administrator($id_user);
		$data['data_peserta']		=	$this->Madmin->lulus_ketm();
		$data['title']				=	'Halaman Administrator';
		$data['titlewrap']			= 	'Peserta Lulus Jalur KETM';
		$data['content']			=	'backend/page/lulus_ketm';
		$this->load->view('backend/app', $data);
		}
		else{
			redirect('login');
			}
	}
	public function lulus_ppt(){
		if($user= $this->session->userdata('user')){
		extract($user);
		$data['user']			= $this->Madmin->read_administrator($id_user);
		$data['data_peserta']		=	$this->Madmin->lulus_ppt();
		$data['title']				=	'Halaman Administrator';
		$data['titlewrap']			= 	'Peserta Lulus Jalur PPT';
		$data['content']			=	'backend/page/lulus_ppt';
		$this->load->view('backend/app', $data);
		}
		else{
			redirect('login');
			}
	}
	public function berita(){
		if($user= $this->session->userdata('user')){
		extract($user);
		$data['user']			= $this->Madmin->read_administrator($id_user);
		$data['berita']			= $this->Madmin->read_berita();
		$data['title']				=	'Halaman Administrator';
		$data['titlewrap']			= 	'Berita';
		$data['content']			=	'backend/page/berita';
		$this->load->view('backend/app', $data);
		}
		else{
			redirect('login');
			}
	}
	public function add_berita(){
	$this->form_validation->set_rules('judul', 'Judul Tidak Boleh Kosong', 'required');
	$this->form_validation->set_rules('isi', 'Isi Tidak Boleh Kosong', 'required');
	if ($this->form_validation->run() === FALSE) {
		 $this->session->set_flashdata('notif', '<div class="alert alert-danger"><b>Tambah Berita Gagal</b> '.validation_errors().'</div>');
		redirect('Cadmin/berita');
	}else{
		$config['upload_path']          = './assets/backend/berita';
		$config['allowed_types']        = 'jpeg|jpg|png|';
		$config['max_size']             = 5000;
 	
		$this->upload->initialize($config);
		if ( $this->upload->do_upload('file')){
				$data = array(
					'id_berita' => '',
					'judul' 	=> $this->input->post('judul'),
					'file'		=> $this->upload->data('file_name'),
					'tanggal'	=> $this->input->post('tanggal'),
					'isi' 		=> $this->input->post('isi'),
				);
		$this->db->insert('berita',$data);
		$this->session->set_flashdata('notif', '<div class="alert alert-success"><b>Tambah Berita Berhasil</b> Berita Berhasil Diposting</div>');
		redirect('Cadmin/berita');
		}else{
			
			 $this->session->set_flashdata('notif', '<div class="alert alert-danger"><b>Tambah Berita Gagal</b> '.$this->upload->display_errors().'</div>');
            //redirect halaman
            redirect('Cadmin/berita');
		}

		
	}
	}
	public function delete_berita($id_berita){
		$data = $this->db->where('berita.id_berita', $id_berita)
				->delete('berita');
				if($data){
				$this->session->set_flashdata('notif', '<div class="alert alert-success"><b>Hapus Berita Berhasil</b> Berita Berhasil Dihapus</div>');
				redirect('Cadmin/berita');
				}else{
				$this->session->set_flashdata('notif', '<div class="alert alert-danger"><b>Hapus Berita Gagal</b> Berita Gagal Dihapus</div>');
				redirect('Cadmin/berita');
				}
	}

	public function ubah_informasi(){
		$data = array('informasi_tes' => $this->input->post('informasi_tes') );
		$query = $this->db->where('informasi.id_informasi', '1')
				->update('informasi',$data);
		if($query){
		$this->session->set_flashdata('notif', '<div class="alert alert-success"><b>Berhasil! Informasi Jalur Akademik Berhasil Diupdate</div>');
		redirect('Cadmin/dasbor');
		}else{
		$this->session->set_flashdata('notif', '<div class="alert alert-danger"><b>Gagal! Informasi Jalur Akademik Gagal Diupdate</div>');
		redirect('Cadmin/dasbor');
		}
	}
	public function ubah_info(){
		$data = array('info_terkini' => $this->input->post('info_terkini') );
		$query = $this->db->where('informasi.id_informasi', '1')
				->update('informasi',$data);
		if($query){
		$this->session->set_flashdata('notif', '<div class="alert alert-success"><b>Berhasil! Info Terkini Berhasil Diupdate</div>');
		redirect('Cadmin/dasbor');
		}else{
		$this->session->set_flashdata('notif', '<div class="alert alert-danger"><b>Gagal! Info Terkini Gagal Diupdate</div>');
		redirect('Cadmin/dasbor');
		}
	}
	public function aktifasi(){

		$id = $_POST['id'];
		
		$data = $this->Madmin->aktifasi($id);

		
		echo json_encode($data);
	}
	public function berkas($nisn)
	{		
		$id =  $this->Madmin->download_berkas($nisn);
		$berkas = $id->berkas;
		force_download('./berkas/'.$berkas , NULL);
	}
	


}