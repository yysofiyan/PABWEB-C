<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class My_error extends CI_Controller {

	public function index()
	{
		$this->load->view('errors/my_error');
	}
}
