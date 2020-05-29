<?php

class Auth extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Auth_model');
	}

	public function login()
	{
		$form_open = form_open('auth/cek_login');
		$form_close = form_open();
		$label_email = form_label('Email', 'email');
		$label_password = form_label('Password', 'password');
		$input_email = form_input('email');
		$input_password = form_password('password');
		$submit = form_submit('login', 'submit');
		$data = array(
			'form_open' => $form_open,
			'form_close' => $form_close,
			'label_email' => $label_email,
			'label_password' => $label_password,
			'input_email' => $input_email,
			'input_password' => $input_password,
			'submit' => $submit,
		);
		$this->load->view('auth/login_v', $data);
	}

	public function cek_login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$data = array(
			'email' => $email,
			'password' => md5($password),
		);
		$cek_user = $this->Auth_model->cek_user($data);
		if ($cek_user->num_rows() > 0) {
			$row = $cek_user->row();
			$email = $row->email;
			$nama_lengkap = $row->nama_lengkap;
			$user = array(
					'email' => $email,
					'nama_lengkap' => $nama_lengkap
			);
			$this->session->set_userdata($user);
			redirect('home');
		
		} else {
			$this->session->set_flashdata('pesan', 'username atau password salah!!');
			redirect('login');
		}
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