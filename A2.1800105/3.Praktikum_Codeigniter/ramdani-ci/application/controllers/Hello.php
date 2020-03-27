<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hello extends CI_Controller {

	public function index()
	{
		echo "Hello Ramdani";
	}

	public function hello_model()
	{
		$this->load->model('hello_model');

		echo $this->hello_model->helloRamdani();
	}
}
