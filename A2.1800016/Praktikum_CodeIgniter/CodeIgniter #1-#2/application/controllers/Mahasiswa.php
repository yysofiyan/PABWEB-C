<?php
class Mahasiswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mahasiswa_model');
    }

    public function index()
    {
        $data['mahasiswa'] = $this->Mahasiswa_model->lihatData();
        $this->load->view('mahasiswa_view', $data);
    }

    public function mhs_result()
    {
        $data['result'] = $this->Mahasiswa_model->metodeResult();
        $this->load->view('result_view', $data);
    }

    public function mhs_row()
    {
        $data['row'] = $this->Mahasiswa_model->metodeRow();
        $this->load->view('row_view', $data);
    }

    public function mhs_resultArray()
    {
        $data['resultarray'] = $this->Mahasiswa_model->metodeResultArray();
        $this->load->view('resultarray_view', $data);
    }

    public function mhs_rowArray()
    {
        $data['rowarray'] = $this->Mahasiswa_model->metodeRowArray();
        $this->load->view('rowarray_view', $data);
    }
}