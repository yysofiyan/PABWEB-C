<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Halaman extends CI_Controller {

	public function index()
	{
		$this->load->view('halaman_view');
	}
}
