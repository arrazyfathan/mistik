<?php

class Donasi_barang extends CI_Controller {
    function __construct(){
        parent:: __construct();
        $this->load->model('Barang_model');
        $this->load->model('Bencana_model');
        $this->load->library('form_validation');
        
        //Validasi jika user belum login
        if($this->session->userdata('logedin') !=TRUE){
            $url=base_url('login_donatur');
            redirect($url);
        }
    }

    public function index(){
        $data['bencana'] = $this->Bencana_model->getAllBencana();
        $config = array(
                        array(
                                'field' => 'nama-barang',
                                'label' => 'name',
                                'rules' => 'required'
                        ),
                        array(
                                'field' => 'jumlah-barang',
                                'label' => 'count',
                                'rules' => 'required'
                        ),
                );

            $this->form_validation->set_rules($config);

                if ($this->form_validation->run() == false) {

                        $this->load->view('donasi/barang', $data);
                        
                    } else {
                        
                        $this->Barang_model->tambahDataBarang();
                        $this->session->set_flashdata('flash', 'Berdonasi');
                        redirect('Donasi_barang');
                }
        
    }

}
