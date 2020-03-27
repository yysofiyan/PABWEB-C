<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('mahasiswa_model');
	}

	// metode result
	public function index()
	{
		$data['mahasiswa'] = $this->mahasiswa_model->lihatData();
		$this->load->view('mahasiswa', $data);
	}

	public function mhs_result_array()
	{
		$data['mahasiswa'] = $this->mahasiswa_model->metodeResultArray();
		$this->load->view('mahasiswa_result_array_view', $data);
	}

	public function mhs_row()
	{
		$data['mahasiswa'] = $this->mahasiswa_model->metodeRow();
		$this->load->view('mahasiswa_row_view', $data);
	}

	public function mhs_row_array()
	{
		$data['mahasiswa'] = $this->mahasiswa_model->metodeRowArray();
		$this->load->view('mahasiswa_row_array_view', $data);
	}
}
