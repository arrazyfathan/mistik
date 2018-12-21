<?php

    class Home extends CI_Controller {

        function __construct(){
                parent:: __construct();
                $this->load->model('Bencana_model');
        }

        public function index() 
        {
        $data['judul'] = 'Mistik';
            $this->load->view('template/header', $data);
            $this->load->view('home/index');
            $this->load->view('template/footer');
        }
    }