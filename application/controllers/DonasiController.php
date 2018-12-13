<?php
class DonasiController extends CI_Controller {

    function __construct(){
        parent:: __construct();
        //Validasi jika user belum login
        if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('login_donatur');
            redirect($url);
        }
    }

    public function index(){
        $this->load->view('donasi/layout');
    }
}