<?php

class Daftar_donatur extends CI_Controller
{

        public function __construct()
        {
                parent::__construct();
                $this->load->model('Donatur_model');
                $this->load->library('form_validation');
        }
        
        public function index()
        {
                $data['judul'] = 'Mistik';
                $data['donatur'] = $this->Donatur_model->getAllDonatur();

                $config = array(
                        array(
                                'field' => 'nama-lengkap',
                                'label' => 'Name',
                                'rules' => 'required'
                        ),
                        array(
                                'field' => 'username',
                                'label' => 'Username',
                                'rules' => 'required'
                        ),
                        array(
                                'field' => 'ttl',
                                'label' => 'Birth date',
                                'rules' => 'required'
                        ),
                        array(
                                'field' => 'alamat',
                                'label' => 'Address',
                                'rules' => 'required'
                        ),
                        array(
                                'field' => 'email',
                                'label' => 'Email',
                                'rules' => 'required|valid_email'
                        ),
                        array(
                                'field' => 'notelp',
                                'label' => 'Telephone number',
                                'rules' => 'required|numeric'
                        ),
                        array(
                                'field' => 'password',
                                'label' => 'Password',
                                'rules' => 'required|min_length[6]'
                        ),
                        array(
                                'field' => 'repeat',
                                'label' => 'Password Confirmation',
                                'rules' => 'required|matches[password]'
                        ),
                );

                $this->form_validation->set_rules($config);

                if ($this->form_validation->run() == false) {

                        $this->load->view('daftar donatur/index', $data);

                } else {
                        $this->Donatur_model->tambahDataDonatur();
                        $this->session->set_flashdata('flash', 'Terdaftar');
                        redirect('daftar_donatur');
                }
        }
}
