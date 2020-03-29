<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('mahasiswa_model');
		$this->load->model('prodi_model');
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

	public function tambah_data()
	{
		$getProdi = $this->prodi_model->lihatData();
		$prodi    = [];
		foreach ($getProdi as $row) {
			$prodi[$row->id_prodi] = $row->nama_prodi;
		}

		$data['forms']       = [
			[
				'form_label' => form_label('NIM:', 'nim'),
				'form_input' => form_input('nim')
			],
			[
				'form_label' => form_label('Nama Mahasiswa:', 'nama_mhs'),
				'form_input' => form_input('nama_mhs')
			],
			[
				'form_label' => form_label('Program Studi:', 'prodi'),
				'form_input' => form_dropdown('prodi', $prodi)
			]
		];

		$this->load->view('mahasiswa_form', $data);
	}

	public function tambah_aksi()
	{
		$data = [
			'nim'      => $this->input->post('nim'),
			'nama_mhs' => $this->input->post('nama_mhs'),
			'id_prodi'    => $this->input->post('prodi')
		];

		$this->mahasiswa_model->insertData($data);

		redirect('mahasiswa');
	}
}
