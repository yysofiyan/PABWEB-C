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
        $data['mahasiswa'] = $this->mahasiswa_model->lihatData();
        $this->load->view('mahasiswa_view', $data);
    }
    public function mhs_result()
    {
        $data['result'] = $this->mahasiswa_model->metodeResult();
        $this->load->view('result_view', $data);
    }
    public function mhs_row()
    {
        $data['row'] = $this->mahasiswa_model->metodeRow();
        $this->load->view('row_view', $data);
    }
    public function mhs_resultArray()
    {
        $data['resultarray'] = $this->mahasiswa_model->metodeResultArray();
        $this->load->view('resultarray_view', $data);
    }
    public function mhs_rowArray()
    {
        $data['rowarray'] = $this->mahasiswa_model->metodeRowArray();
        $this->load->view('rowarray_view', $data);
    }
}