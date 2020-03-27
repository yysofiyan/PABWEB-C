<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Program_studi extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('prodi_model');
	}

	// metode result
	public function index()
	{
		$data['prodi'] = $this->prodi_model->lihatData();
		$this->load->view('prodi', $data);
	}
}
