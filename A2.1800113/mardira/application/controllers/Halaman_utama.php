<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Halaman_utama extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		cek_session();
	}

	public function index()
	{
		$this->load->view('halaman_utama');
	}
}
