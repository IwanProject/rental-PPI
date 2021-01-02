<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Admin_model');

		$this->load->library('form_validation');
		$this->load->library('pdf');
	}

	public function index()
	{
		if (empty($this->session->has_userdata('logged_in'))) {
			redirect('Login');
		}
		$data['title'] = 'GoRental | Dashboard';
		$this->load->view('Template/Admin/header', $data);
		$this->load->view('Admin/Dashboard');
		$this->load->view('Template/Admin/footer');
	}

	public function merk()
	{
		if (empty($this->session->has_userdata('logged_in'))) {
			redirect('Login');
		}

		$this->form_validation->set_rules('nama_merk', 'Nama Merk', 'required|trim');
		$this->form_validation->set_rules('type', 'Type Merk', 'required|trim');

		$data['title'] = 'GoRental | Data Merk';
		if ($this->form_validation->run() == false) {
			$data['merk'] = $this->Admin_model->getMerk();
			$this->load->view('Template/Admin/header', $data);
			$this->load->view('Admin/Merk', $data);
			$this->load->view('Template/Admin/footer');
		} else {
			$this->Admin_model->Merk();
			$this->session->set_flashdata('flash', 'ditambahkan');
			redirect('Merk');
		}
	}

	public function deleteMerk($id_merk)
	{
		$this->Admin_model->deleteMerk($id_merk);
		$this->session->set_flashdata('flash', 'di Delete');
		redirect('Merk');
	}

	public function editMerk()
	{

		$id_merk = $this->input->post('id_merk');

		$this->Admin_model->editMerk($id_merk);
		$this->session->set_flashdata('flash', 'di update');
		redirect('Merk');
	}


	public function deleteMobil($id_mobil)
	{
		$this->Admin_model->deleteMobil($id_mobil);
		$this->session->set_flashdata('flash', 'di Delete');
		redirect('Mobil');
	}

	public function editMobil()
	{

		$id_mobil = $this->input->post('id_mobil');

		$this->Admin_model->editMobil($id_mobil);
		$this->session->set_flashdata('flash', 'di update');
		redirect('Mobil');
	}

	public function mobil()
	{
		if (empty($this->session->has_userdata('logged_in'))) {
			redirect('Login');
		}
		$data['title'] = 'GoRental | Data Mobil';
		$this->form_validation->set_rules('nama_mobil', 'Nama Mobil', 'required|trim');
		$this->form_validation->set_rules('merk', 'Merk', 'required|trim');
		$this->form_validation->set_rules('tahun', 'Tahun', 'required|trim');
		$this->form_validation->set_rules('plat_nomor', 'Plat Nomor', 'required|trim');
		$this->form_validation->set_rules('tarif_sewa', 'Tarif Sewa', 'required|trim');
		$this->form_validation->set_rules('warna', 'Warna', 'required|trim');
		$this->form_validation->set_rules('kursi', 'Kursi', 'required|trim');


		if ($this->form_validation->run() == false) {
			$data['mobil'] = $this->Admin_model->getMobil();
			$data['merk'] = $this->Admin_model->getMerkMobil();
			$this->load->view('Template/Admin/header', $data);
			$this->load->view('Admin/Mobil', $data);
			$this->load->view('Template/Admin/footer');
		} else {
			$this->Admin_model->Mobil();
			$this->session->set_flashdata('flash', 'ditambahkan');
			redirect('Mobil');
		}
	}
	public function motor()
	{
		if (empty($this->session->has_userdata('logged_in'))) {
			redirect('Login');
		}
		$data['title'] = 'GoRental | Data Motor';
		$this->form_validation->set_rules('nama_motor', 'Nama Motor', 'required|trim');
		$this->form_validation->set_rules('merk', 'Merk', 'required|trim');
		$this->form_validation->set_rules('tahun', 'Tahun', 'required|trim');
		$this->form_validation->set_rules('plat_nomor', 'Plat Nomor', 'required|trim');
		$this->form_validation->set_rules('tarif_sewa', 'Tarif Sewa', 'required|trim');
		$this->form_validation->set_rules('warna', 'Warna', 'required|trim');


		if ($this->form_validation->run() == false) {
			$data['merk'] = $this->Admin_model->getMerkMotor();
			$data['motor'] = $this->Admin_model->getMotor();
			$this->load->view('Template/Admin/header', $data);
			$this->load->view('Admin/Motor', $data);
			$this->load->view('Template/Admin/footer');
		} else {
			$this->Admin_model->Motor();
			$this->session->set_flashdata('flash', 'ditambahkan');
			redirect('Motor');
		}
	}


	public function deleteMotor($id_motor)
	{
		$this->Admin_model->deleteMotor($id_motor);
		$this->session->set_flashdata('flash', 'di Delete');
		redirect('Motor');
	}

	public function editMotor()
	{
		$id_motor = $this->input->post('id_motor');

		$this->Admin_model->editMotor($id_motor);
		$this->session->set_flashdata('flash', 'di update');
		redirect('Motor');
	}
	public function transaksi()
	{
		if (empty($this->session->has_userdata('logged_in'))) {
			redirect('Login');
		}
		$data['title'] = 'GoRental | Data Transaksi';
		$this->form_validation->set_rules('nama', 'Nama ', 'required|trim');
		$this->form_validation->set_rules('no_ktp', 'Nomor KTP', 'required|trim');
		$this->form_validation->set_rules('no_hp', 'Nomor HP', 'required|trim');
		$this->form_validation->set_rules('no_plat', 'Plat Nomor', 'required|trim');
		$this->form_validation->set_rules('tgl_sewa', 'Tanggal Sewa', 'required|trim');
		$this->form_validation->set_rules('tgl_kembali', 'Tanggal Kembali', 'required|trim');

		if ($this->form_validation->run() == false) {
			$data['transaksi'] = $this->Admin_model->getTransaksi();
			$this->load->view('Template/Admin/header', $data);
			$this->load->view('Admin/Transaksi', $data);
			$this->load->view('Template/Admin/footer');
		} else {
			$no_plat = $this->Admin_model->Transaksi();
			$this->Admin_model->updateStatus($no_plat, 'sewa');
			$this->session->set_flashdata('flash', 'ditambahkan');
			redirect('Transaksi');
		}
	}
	// public function transaksi()
	// {
	// 	$this->form_validation->set_rules('nama', 'Nama ', 'required|trim');
	// 	$this->form_validation->set_rules('no_ktp', 'Nomor KTP', 'required|trim');
	// 	$this->form_validation->set_rules('no_hp', 'Nomor HP', 'required|trim');
	// 	$this->form_validation->set_rules('no_plat', 'Plat Nomor', 'required|trim');
	// 	$this->form_validation->set_rules('tgl_sewa', 'Tanggal Sewa', 'required|trim');
	// 	$this->form_validation->set_rules('tgl_kembali', 'Tanggal Kembali', 'required|trim');

	// 	if ($this->form_validation->run() == false) {
	// 	$data['transaksi'] = $this->Admin_model->getTransaksi();
	// 	$this->load->view('Template/Admin/header');
	// 	$this->load->view('Admin/Transaksi', $data);
	// 	$this->load->view('Template/Admin/footer');
	// 	} else {
	// 		$this->Admin_model->Transaksi();
	// 		$this->Admin_model->updateStatus('sewa');
	// 		$this->session->set_flashdata('flash', 'ditambahkan');
	// 		redirect('Transaksi');
	// 	}

	// }
	public function editTransaksi()
	{

		$idtr = $this->input->post('idtr');

		$this->Admin_model->editTransaksi($idtr);
		$this->session->set_flashdata('flash', 'di update');
		redirect('Transaksi');
	}

	public function updatestatus($no_plat, $status)
	{
		$this->Admin_model->updateStatus($no_plat, $status);
	}
	public function Selesai($idtr)
	{
		$no_plat = $this->Admin_model->tSelesai($idtr);
		$this->session->set_flashdata('flash', 'di update');
		echo '<script>alert("su");</script>';
		$this->Admin_model->updateStatus($no_plat, 'Tersedia');

		redirect('Transaksi');
	}
	public function deleteTransaksi($idtr)
	{
		$this->Admin_model->deleteTransaksi($idtr);
		$this->session->set_flashdata('flash', 'di Delete');
		redirect('Transaksi');
	}

	public function laporan()
	{

		if (empty($this->session->has_userdata('logged_in'))) {
			redirect('Login');
		}
		$data['title'] = 'GoRental | Data Laporan';
		$data['transaksi'] = $this->Admin_model->getLaporan();
		$this->load->view('Template/Admin/header', $data);
		$this->load->view('Admin/Laporan', $data);
		$this->load->view('Template/Admin/footer');
	}

	public function register()
	{
		$this->form_validation->set_rules('username', 'Username', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required|trim', [
			'matches' => 'Password dont match!',
			'min_length' => 'Password too short!'
		]);


		$data['title'] = 'GoRental | Register';
		if ($this->form_validation->run() == false) {
			$this->load->view('Admin/Register', $data);
		} else {
			$data = [

				'username' 	 => htmlspecialchars($this->input->post('username')),
				'email' 	 => htmlspecialchars($this->input->post('email')),
				'password' 	 => password_hash($this->input->post('password'), PASSWORD_DEFAULT)
			];

			$this->db->insert('users', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role=" alert">Congratulation! your account has been created. Please Login</div>');
			redirect('Login');
		}
	}


	public function login()
	{
		$data['title'] = 'GoRental | Login';
		$this->form_validation->set_rules('username', 'Username', 'required|trim');
		$this->form_validation->set_rules('password', 'Password', 'required|trim');
		if ($this->form_validation->run() == false) {
			$this->load->view('Admin/Login', $data);
		} else {
			$this->_login();
		}
	}

	private function _login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$user = $this->db->get_where('users', ['username' => $username])->row_array();


		if ($user) {

			if (password_verify($password, $user['password'])) {

				$data = [
					'email' => $user['email'],
					'username' 	=> $user['username'],
					'password' 	=> $user['password'],
				];

				$this->session->set_userdata('logged_in', $data);
				redirect('/');
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-success" role=" alert">Wrong password!</div>');
				redirect('Login');
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-success" role=" alert">Email is not registered!</div>');
			redirect('Login');
		}
	}



	public function logout()
	{
		session_destroy();
		redirect('Login');
	}

	public function pdf()
	{
		$data['transaksi'] = $this->Admin_model->getLaporan();
		$this->pdf->setPaper('A4', 'Landscape');
		$this->pdf->filename = 'laporan-' . uniqid(10);
		$this->pdf->load_view('Admin/Laporan_pdf', $data);
	}
}
