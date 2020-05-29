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
    public function tambah_data()
    {
        $form_open = form_open('mahasiswa/tambah_aksi');
        $label_nim = form_label('NIM', 'nim');
        $label_nama = form_label('Nama Mahasiswa', 'nama_mhs');
        $label_prodi = form_label('Program Studi', 'prodi');
        $attr_id = array(
            'type' => 'hidden',
            'name' => 'id_mahasiswa',
            'value' => set_value('id_mahasiswa')
        );
        $input_nim = form_input('nim');
        $input_nama = form_input('nama_mhs');
        $input_id = form_input($attr_id);
        $get_prodi = $this->Mahasiswa_model->get_prodi();
        $prodi = array();
        foreach ($get_prodi as $r) {
            $prodi[$r->id_prodi] = $r->nama_prodi;
        }
        $dropdown_prodi = form_dropdown('prodi', $prodi);
        $form_submit = form_submit('submit', 'simpan');

        $error_nim = form_error('nim');
        $error_nama = form_error('nama_mhs');
        $data = array(
            'form_open' => $form_open,
            'label_nim' => $label_nim,
            'label_nama' => $label_nama,
            'label_prodi' => $label_prodi,
            'input_id' => $input_id,
            'input_nim' => $input_nim,
            'input_nama' => $input_nama,
            'dropdown_prodi' => $dropdown_prodi,
            'form_submit' => $form_submit,
            'error_nim' => $error_nim,
            'error_nama' => $error_nama,
        );
        $this->load->view('mahasiswa_form', $data);
    }
    
    public function tambah_aksi()
    {
        $this->_rules();
        $validasi = $this->form_validation->run();
        if ($validasi == FALSE) {
            $this->tambah_data();
        } else {
        $nim = $this->input->post('nim');
        $nama_mhs = $this->input->post('nama_mhs');
        $prodi = $this->input->post('prodi');
        $data = array(
            'nim' => $nim,
            'nama_mhs' => $nama_mhs,
            'id_prodi' => $prodi,
        );
        $this->Mahasiswa_model->insert_data($data);
        $this->session->set_flashdata('pesan', 'Data berhasil ditambah!');
        redirect('mahasiswa');
        }
    }

    public function _rules()
    {
        $attr_nim = array(
            'required' => 'NIM harus diisi!',
            'min_length' => 'NIM minimal 8 karakter!',
            'max_length' => 'NIM melebihi 8 karakter!',
            'numeric' => 'NIM tidak menggunakan huruf!'
        );
        $attr_nama = array(
            'required' => 'Nama mahasiswa harus diisi!',
            'min_length' => 'Nama mahasiswa minimal 5 karakter!',
            'max_length' => 'Nama mahasiswa maxsimal 30 karakter!',
        );
        $this->form_validation->set_rules('nim', 'NIM', 'trim|required|numeric|min_length[8]|max_length[8]', $attr_nim);
        $this->form_validation->set_rules('nama_mhs', 'Nama Mahasiswa', 'trim|required|min_length[5]|max_length[50]', $attr_nama);
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
    public function edit($id)
    {
        $get_row = $this->Mahasiswa_model->get_row($id);
        if ($get_row->num_rows() > 0){
            $row = $get_row->row();
            $id_mahasiswa = $row->id_mahasiswa;
            $attr_id = array(
                'type' => 'hidden',
                'name' => 'id_mahasiswa',
                'value' => set_Value('id_mahasiswa', $id_mahasiswa)
        );
        $nim = $row->NIM;
        $nama_mhs = $row->nama_mhs;
        $id_prodi = $row->id_prodi;
        $form_open = form_open('mahasiswa/edit_aksi');
        $label_nim = form_label('NIM', 'nim');
        $label_nama = form_label('Nama Mahasiswa', 'nama_mhs');
        $label_prodi = form_label('Progam Studi', 'prodi');
        $input_nim = form_input('nim', $nim);
        $input_nama = form_input('nama_mhs', $nama_mhs);
        $input_id = form_input($attr_id);
        $get_prodi = $this->Mahasiswa_model->get_prodi();
        $prodi = array();
        foreach ($get_prodi as $r) {
            $prodi[$r->id_prodi] = $r->nama_prodi;
        }
        $dropdown_prodi = form_dropdown('prodi', $prodi, $id_prodi);
        $form_submit = form_submit('submit', 'simpan');
        $error_nim = form_error('nim');
        $error_nama = form_error('nama_mhs');
        $data = array(
            'form_open' => $form_open,
            'label_nim' => $label_nim,
            'label_nama' => $label_nama,
            'label_prodi' => $label_prodi,
            'input_nim' => $input_nim,
            'input_id' => $input_id,
            'input_nama' => $input_nama,
            'dropdown_prodi' => $dropdown_prodi,
            'form_submit' => $form_submit,
            'error_nim' => $error_nim,
            'error_nama' => $error_nama,
        );
        $this->load->view('mahasiswa_form', $data);
    } else{
        $this->session->set_flashdata('pesan', 'Data Tidak Ditemukan');
        redirect('mahasiswa');
    }
    }
    public function edit_aksi()
    {
        $this->_rules();
        $validasi = $this->form_validation->run();
        $id = $this->input->post('id_mahasiswa');
        if ($validasi == FALSE){
            $this->edit($id);
        } else{
            $nim = $this->input->post('nim');
            $nama_mhs = $this->input->post('nama_mhs');
            $prodi = $this->input->post('prodi');
            $data = array(
                'NIM' => $NIM,
                'nama_mhs' => $nama_mhs,
                'id_prodi' => $prodi,
            );
            $this->Mahasiswa_model->update_data($id, $data);
            $this->session->set_flashdata('pesan', 'Data Berhasil Diubah!');
            redirect('mahasiswa');
        }
    }
    public function hapus($id)
    {
        $id = $this->uri->segment(3);
        $this->Mahasiswa_model->delete_data($id);
        $this->session->set_flashdata('pesan', 'Data Berhasil Dihapus!');
        redirect('mahasiswa');
    }
}
