<?php

    class Login  extends CI_Controller {

        public function __construct()
        {
            parent::__construct();
            $this->load->model('Login_model');
            $this->load->library('form_validation');
        }

        public function index() 
        {
            $data['judul'] = 'Login Donatur';
            // $this->load->view('template/header', $data);
            // $this->load->view('login_donatur/index');
            
            $config = array(
                array(
                    'field' => 'username',
                    'label' => 'Username',
                    'rules' => 'required'
                ),
                array(
                    'field' => 'password',
                    'label' => 'Password',
                    'rules' => 'required'
                )
            );

            $this->form_validation->set_rules($config);

        if ($this->form_validation->run()) {

            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $this->load->model('Login_model');
            if ($this->Login_model->login($username, $password)) {

                $session_data = array(
                    'username' => $username
                );
                $this->session->set_userdata($session_data);
                redirect(/*base_url() .*/'login/enter');
            } else {
                $this->session->set_flashdata('error', 'Invalid Username and Password');
                redirect(/*base_url() .*/'login');
            }

        } else {
            $this->load->view('template/header', $data);
            $this->load->view('login_donatur/index');
            $this->load->view('template/footer');
        }
        }

        function enter()
        {
            if ($this->session->userdata('username') != '') {
                echo '<h2> Welcome - ' . $this->session->userdata('username') . '</h2>';
                echo '<label><a href="' . base_url() . 'Login">Logout</a></label>';
            } else {
                redirect(/*base_url() .*/'login');
            }

            function Logout()
            {
                $this->session->unset_userdata('username');
            }

        }

        
    }