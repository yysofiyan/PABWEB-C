<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('auth_model');
	}

	public function login()
	{
		$data['forms'] = [
			[
				'form_label' => form_label('Email:', 'email'),
				'form_input' => form_input('email')
			],
			[
				'form_label' => form_label('Password:', 'password'),
				'form_input' => form_password('password')
			]
		];

		$this->load->view('auth/login_view', $data);
	}

	public function cek_login()
	{
		$data = [
			'email'    => $this->input->post('email'),
			'password' => md5($this->input->post('password'))
		];

		$cekUser = $this->auth_model->cekUser($data);

		if ($cekUser->num_rows() > 0) {
			$row  = $cekUser->row();
			$user = [
				'email'        => $row->email,
				'nama_lengkap' => $row->nama_lengkap,
			];

			$this->session->set_userdata($user);

			return redirect('home');
		}
		
		$this->session->set_flashdata('pesan', 'email atau password salah!');
		redirect('login');
	}

	public function hapus_session()
	{
		$this->session->unset_userdata('nama_lengkap');
		
		redirect('home');
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login');
	}
}
