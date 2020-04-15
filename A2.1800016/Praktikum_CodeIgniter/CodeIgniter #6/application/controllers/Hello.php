<?php

class Hello extends CI_Controller
{
    public function index()
    {
        echo "Hello Andini";
    }

    public function hello_model()
    {
        $this->load->model('Hello_model');
        $data = $this->Hello_model->hello_andini();
        echo $data;
    }

    public function hello_view()
    {
        $this->load->view('hello_view');
    }

    public function hello_mvc()
    {
        $this->load->model('Hello_model');
        $data['mvc'] = $this->Hello_model->andini_mvc();
        $this->load->view('hello_view', $data);
    }
}
