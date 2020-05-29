<?php
class Home extends CI_controller
{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('login');
        cek_session();
    }

    public function index()
    {
        $this->load->view('home/home_view');
    }
}