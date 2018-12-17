<?php

class Login_donatur extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Login_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Login Donatur';

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
                $this->session->set_userdata('logedin',TRUE);
                $nama = $this->session->userdata('nama_Lengkap');
                redirect('login_donatur/enter');
            } else {
                $this->session->set_flashdata('error', 'Invalid Username and Password');
                redirect('login_donatur');
            }

        } else {
            $this->load->view('template/header', $data);
            $this->load->view('login_donatur/index');

        }
    
    }



    function enter()
    {
        if ($this->session->userdata('username') != '') {
            redirect('donasicontroller');
        } else {
            redirect('login');
        }


    }

    function Logout()
        {
            $this->session->sess_destroy();
            $url=base_url('login_donatur');
            redirect($url);
        }

}