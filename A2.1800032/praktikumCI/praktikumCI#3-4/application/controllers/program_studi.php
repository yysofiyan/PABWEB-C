<?php
class program_studi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('prodi_model');
    }

    public function index()
    {
        $data['prodi'] = $this->prodi_model->lihat_data();
        $this->load->view('prodi_v', $data);
    }
}