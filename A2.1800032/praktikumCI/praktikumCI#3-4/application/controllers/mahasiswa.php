<?php
class mahasiswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('mahasiswa_model');
    }

    public function index()
    {
        $data['mahasiswa'] = $this->mahasiswa_model->lihat_data();
        $this->load->view('mahasiswa_v', $data);
    }
}