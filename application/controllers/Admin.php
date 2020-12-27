<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Admin_model');

		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->load->view('Template/Admin/header');
		$this->load->view('Admin/Dashboard');
		$this->load->view('Template/Admin/footer');
	}

	public function merk()
	{

		$this->form_validation->set_rules('nama_merk', 'Nama Merk', 'required|trim');
		$this->form_validation->set_rules('type', 'Type Merk', 'required|trim');


		if ($this->form_validation->run() == false) {
			$data['merk'] = $this->Admin_model->getMerk();
			$this->load->view('Template/Admin/header');
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
			$this->load->view('Template/Admin/header');
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
		$this->form_validation->set_rules('nama_motor', 'Nama Motor', 'required|trim');
		$this->form_validation->set_rules('merk', 'Merk', 'required|trim');
		$this->form_validation->set_rules('tahun', 'Tahun', 'required|trim');
		$this->form_validation->set_rules('plat_nomor', 'Plat Nomor', 'required|trim');
		$this->form_validation->set_rules('tarif_sewa', 'Tarif Sewa', 'required|trim');
		$this->form_validation->set_rules('warna', 'Warna', 'required|trim');


		if ($this->form_validation->run() == false) {
			$data['merk'] = $this->Admin_model->getMerkMotor();
			$data['motor'] = $this->Admin_model->getMotor();
			$this->load->view('Template/Admin/header');
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
}
