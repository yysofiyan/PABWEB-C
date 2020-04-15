<?php
class url extends CI_Controller
{
    public function index()
    {
        $this->load->view('url_view');
    }
    public function detail($id)
    {
        $id = $this->uri->segment(3);
        $data['segment'] = $id;
        $this->load->view('halaman_detail',$data);
    }
    public function blank()
    {
        echo "Halaman ini kosong gays .. Silahkan kembali! :)";
       
    }
}