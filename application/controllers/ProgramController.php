<?php

    class ProgramController extends CI_Controller {

        function __construct(){
                parent:: __construct();
                $this->load->model('Bencana_model');
        }

        public function index() 
        {
            $data['judul'] = 'Program';
            $data['bencana'] = $this->Bencana_model->getAllBencana();
            
            $this->load->view('programs/programs', $data);
            $this->load->view('template/footer');
        }
    }