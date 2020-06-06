<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hello extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('hello_model');
	}

	public function index()
	{
		echo "Hello Mardira";
	}

	public function hello_model()
	{
		echo $this->hello_model->hellomardira();
	}

	public function hello_view()
	{
		$this->load->view('hello');
	}

	public function hello_mvc()
	{
		$data['mvc'] = $this->hello_model->mardira();
		
		$this->load->view('hello', $data);
	}
}
