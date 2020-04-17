<?php
    class Hello extends CI_Controller
    {
        public function index()
        {
            echo "hello mardira";
        }
        public function hello_model()
        {
            $this->load->model('hello_model');
            $data = $this->hello_model->hello_mardira();
            echo $data;
        }
        public function v_hello()
        {
            $this->load->view('v_hello');
        }
        public function hello_mvc()
        {
            $this->load->model('hello_model');
            $data['mvc'] = $this->hello_model->mardira_mvc();
            $this->load->view('v_hello', $data);
        }
    }
