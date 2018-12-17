<?php

    class ProgramController extends CI_Controller {
        public function index() 
        {
        $data['judul'] = 'Program';
            $this->load->view('template/header', $data);
            $this->load->view('programs/programs');
            $this->load->view('template/footer');
        }
    }