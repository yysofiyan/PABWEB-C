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
        $data['mahasiswa'] = $this->Mahasiswa_model->lihat_data();
        $this->load->view('mahasiswa_view', $data);
    }

    public function tambah_data()
    {
        $form_open = form_open('mahasiswa/tambah_aksi');
        $label_nim = form_label('NIM', 'nim');
        $label_nama = form_label('Nama Mahasiswa', 'nama_mhs');
        $label_prodi = form_label('Program Studi', 'prodi');
        $input_nim = form_input('nim');
        $input_nama = form_input('nama_mhs');

        $get_prodi = $this->Mahasiswa_model->get_prodi();
        $prodi = array();
        foreach  ($get_prodi as $r) {
            $prodi[$r->id_prodi] = $r->nama_prodi;
        }
        $dropdown_prodi = form_dropdown('prodi', $prodi);

        $form_submit = form_submit('submit', 'simpan');
        $data = array(
            'form_open'=> $form_open,
            'label_nim' => $label_nim,
            'label_nama' => $label_nama,
            'label_prodi' => $label_prodi,
            'input_nim' => $input_nim,
            'input_nama' => $input_nama,
            'dropdown_prodi' => $dropdown_prodi,
            'form_submit' => $form_submit,
        );
        $this->load->view('mahasiswa_form', $data);
    }

    public function tambah_aksi()
    {
        $nim = $this->input->post('nim');
        $nama_mhs = $this->input->post('nama_mhs');
        $prodi = $this->input->post('prodi');
        $data = array(
            'nim' => $nim,
            'nama_mhs' => $nama_mhs,
            'id_prodi' => $prodi,
        );
        $this->Mahasiswa_model->insert_data($data);
        redirect('mahasiswa');
    }
}