<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Url extends CI_Controller {

	public function index()
	{
		$this->load->view('url_view');
	}

	public function detail()
	{
		$data['segment'] = $this->uri->segment(3);

		$this->load->view('halaman_detail_view', $data);
	}

	public function blank()
	{
		echo "Halaman ini kosong, silahkan kembali.";
		redirect('halaman');
	}
}
