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

	public function _rules()
	{
		$attr_nim = [
			'required'   => 'NIM harus diisi!',
			'min_length' => 'NIM minimal 8 karakter!',
			'max_length' => 'NIM melebihi 8 karakter!',
			'numeric'    => 'NIM tidak boleh mengandung huruf!',
		];
		$attr_nama = [
			'required'   => 'Nama harus diisi!',
			'min_length' => 'Nama minimal 8 karakter!',
			'max_length' => 'Nama melebihi 8 karakter!',
		];
		
		$this->form_validation->set_rules('nim', 'NIM', 'trim|required|numeric|min_length[8]|max_length[8]');
		$this->form_validation->set_rules('nama_mhs', 'Nama Mahasiswa', 'trim|required|min_length[5]|max_length[50]');
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

		$data['form_open'] = form_open('mahasiswa/tambah_aksi');
		$data['forms'] = [
			[
				'form_label' => form_label('NIM:', 'nim'),
				'form_input' => form_input('nim'),
				'form_error' => form_error('nim'),
			],
			[
				'form_label' => form_label('Nama Mahasiswa:', 'nama_mhs'),
				'form_input' => form_input('nama_mhs'),
				'form_error' => form_error('nama_mhs'),
			],
			[
				'form_label' => form_label('Program Studi:', 'prodi'),
				'form_input' => form_dropdown('prodi', $prodi),
				'form_error' => form_error('prodi'),
			]
		];

		$this->load->view('mahasiswa_form', $data);
	}

	public function tambah_aksi()
	{
		$this->_rules();

		if ($this->form_validation->run() == true) {
			$data = [
				'nim'      => $this->input->post('nim'),
				'nama_mhs' => $this->input->post('nama_mhs'),
				'id_prodi' => $this->input->post('prodi')
			];

			$this->mahasiswa_model->insertData($data);
			$this->session->set_flashdata('pesan', 'data berhasil disimpan.');

			redirect('mahasiswa');
		} else {
			$this->tambah_data();
		}
	}

	public function edit($id)
	{
		$mhs = $this->mahasiswa_model->get_row($id);

		if ($mhs) {
			$getProdi = $this->prodi_model->lihatData();
			$prodi    = [];
			foreach ($getProdi as $r) {
				$prodi[$r->id_prodi] = $r->nama_prodi;
			}

			$data['form_open'] = form_open("mahasiswa/edit_aksi/$mhs->id_mahasiswa");
			$data['forms']     = [
				[
					'form_label' => form_label('NIM:', 'nim'),
					'form_input' => form_input('nim', $mhs->NIM),
					'form_error' => form_error('nim'),
				],
				[
					'form_label' => form_label('Nama Mahasiswa:', 'nama_mhs'),
					'form_input' => form_input('nama_mhs', $mhs->nama_mhs),
					'form_error' => form_error('nama_mhs'),
				],
				[
					'form_label' => form_label('Program Studi:', 'prodi'),
					'form_input' => form_dropdown('prodi', $prodi, $mhs->id_prodi),
					'form_error' => form_error('prodi'),
				]
			];

			$this->load->view('mahasiswa_form', $data);
		} else {
			$this->session->set_flashdata('pesan', 'data tidak ditemukan!');
			redirect('mahasiswa');
		}
	}

	public function edit_aksi($id)
	{
		$this->_rules();

		if ($this->form_validation->run() == true) {
			$data = [
				'nim'      => $this->input->post('nim'),
				'nama_mhs' => $this->input->post('nama_mhs'),
				'id_prodi' => $this->input->post('prodi')
			];

			$this->mahasiswa_model->updateData($id, $data);
			$this->session->set_flashdata('pesan', 'data berhasil diubah.');

			redirect('mahasiswa');
		} else {
			$this->edit($id);
		}
	}

	public function hapus($id)
	{
		$this->mahasiswa_model->deleteData($id);
		$this->session->set_flashdata('pesan', 'data berhasil dihapus.');

		redirect('mahasiswa');
	}
}
