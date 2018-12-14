<?php
    class Admin extends CI_Controller {

        function __construct(){
            parent:: __construct();
            // $this->load->model('Admin_model');
            $this->load->model('Bencana_model');
            $this->load->model('Donatur_model');
            $this->load->model('Petugas_model');
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
            $this->template->load('admin/template', 'admin/dashboard', $data);
            }
    
        function tables() {
            $data['bencana'] = $this->Bencana_model->getAllBencana();
            $data['petugas'] = $this->Petugas_model->getAllPetugas();
            $data['donatur'] = $this->Donatur_model->getAllDonatur();
            $this->template->load('admin/template', 'admin/table', $data);
            }
        
        function profile() {
            $data['bencana'] = $this->Bencana_model->getAllBencana();
            $data['petugas'] = $this->Petugas_model->getAllPetugas();
            $data['donatur'] = $this->Donatur_model->getAllDonatur();
            $this->template->load('admin/template', 'admin/data_relawan', $data);
            }
        
        function maps() {
            $data['bencana'] = $this->Bencana_model->getAllBencana();
            $data['petugas'] = $this->Petugas_model->getAllPetugas();
            $data['donatur'] = $this->Donatur_model->getAllDonatur();
            $this->template->load('admin/template', 'admin/maps', $data);
            }

        public function hapusBencana($id)
        {
            $this->Bencana_model->hapusDataBencana($id);
            $this->session->set_flashdata('flash', 'Dihapus');
            redirect('admin/tables');
        }

        public function hapusPetugas($id)
        {
            $this->Petugas_model->hapusDataPetugas($id);
            $this->session->set_flashdata('flash', 'Dihapus');
            redirect('admin/tables');
        }

        public function hapusDonatur($id)
        {
            $this->Donatur_model->hapusDataDonatur($id);
            $this->session->set_flashdata('flash', 'Dihapus');
            redirect('admin/tables');
        }
}