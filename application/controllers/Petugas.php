<?php
    class Petugas extends CI_Controller {

        function __construct(){
            parent:: __construct();
            $this->load->model('Bencana_model');
            $this->load->model('Donatur_model');
            $this->load->model('Petugas_model');
            $this->load->model('Posko_model');
            $this->load->model('Kelogistik_model');
            $this->load->library('form_validation');
            //Validasi jika user belum login
            if($this->session->userdata('masuk') !=TRUE){
                $url=base_url('logindb');
                redirect($url);
            }
        }
        
        function index(){
            $data['bencana'] = $this->Bencana_model->getAllBencana();
            $data['petugas'] = $this->Petugas_model->getAllPetugas();
            $data['donatur'] = $this->Donatur_model->getAllDonatur();
            $this->template->load('petugas/template', 'petugas/dashboard', $data);
        }
        
        function profilePetugas() {
            $data['petugas'] = $this->Petugas_model->getAllPetugas();
            $this->template->load('petugas/template', 'petugas/data_relawan', $data);
            }

        function profilePosko() {
                $data['petugas'] = $this->Petugas_model->getAllPetugas();
                $data['posko'] = $this->Posko_model->getAllPosko();
                $this->template->load('petugas/template', 'petugas/data_posko', $data);
        }

        function profileDonatur() {
            $data['donatur'] = $this->Donatur_model->getAllDonatur();
            $this->template->load('petugas/template', 'petugas/data_donatur', $data);
        }
        
        function profileBencana() {
            $data['bencana'] = $this->Bencana_model->getAllBencana();
            $this->template->load('petugas/template', 'petugas/data_program', $data);
        }
        
        function maps() {
            $this->template->load('petugas/template', 'petugas/maps');
            }


        // TAMBAH DATA
        // ----------------------------
        // TAMBAH DATA KELOGISTIK

            function tambahKelogistik(){

                $config = array(
                        array(
                                'field' => 'nama-barang',
                                'label' => 'Commodity Name',
                                'rules' => 'required'
                        ),
                        array(
                                'field' => 'stok-kebutuhan',
                                'label' => 'Stock',
                                'rules' => 'required'
                        )
                );
                
                $this->form_validation->set_rules($config);
                
                if ($this->form_validation->run() == false) {
                        
                        $this->template->load('petugas/template', 'petugas/buat_kelogistik');
                        
                } else {
                        $this->Kelogistik_model->tambahDataKelogistik();
                        $this->session->set_flashdata('flash', 'Ditambah');
                        redirect('petugas/tambahKelogistik');
                }
            }

        // END TAMBAH DATA KELOGISITIK
        // ----------------------------
        // END TAMBAH DATA
    }