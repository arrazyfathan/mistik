<?php

class Donasi_uang extends CI_Controller {
    function __construct(){
        parent:: __construct();
        $this->load->model('Bencana_model');
        $this->load->model('Uang_model');
        $this->load->model('Donatur_model');
        $this->load->library('form_validation');
        
        //Validasi jika user belum login
        if($this->session->userdata('logedin') !=TRUE){
            $url=base_url('login_donatur');
            redirect($url);
        }
    }

    public function index(){
        $data['bencana'] = $this->Bencana_model->getAllBencana();
        $nama_donatur = $this->input->post('nama-donatur');
        $program_donasi = $this->input->post('program-donasi');
        $jumlah = $this->input->post('jumlah');
        $inlineRadioOptions = $this->input->post('inlineRadioOptions');

        $config = array(
                        array(
                                'field' => 'jumlah',
                                'label' => 'count',
                                'rules' => 'required|numeric'
                        ),
                        array(
                                'field' => 'inlineRadioOptions',
                                'label' => 'Option Bank',
                                'rules' => 'required'
                        ),
                );

            $this->form_validation->set_rules($config);

                if ($this->form_validation->run() == false) {

                        $this->load->view('donasi/uang', $data);

                } else {
                        $this->Uang_model->tambahDataUang();
                        $this->session->set_flashdata('flash', 'Berhasil');
                        // redirect('Donasi_uang/invoice');
                        // $cek_uang=$this->Uang_model->auth_uang();
                        // $data=$cek_uang->row_array();
                        // $this->session->set_userdata('ses_nama',$data['nama-donatur']);
                        // $this->session->set_userdata('ses_namaprogram',$data['program_donasi']);
                        // $this->session->set_userdata('ses_jumlah',$data['jumlah']);
                        // $this->session->set_userdata('ses_namabank',$data['nama_bank']);
                        $this->session->set_userdata('ses_nama',$nama_donatur);
                        $this->session->set_userdata('ses_namaprogram',$program_donasi);
                        $this->session->set_userdata('ses_jumlah',$jumlah);
                        $this->session->set_userdata('ses_namabank',$inlineRadioOptions);
                        $this->load->view('donasi/invoice');
                }


        
    }

}