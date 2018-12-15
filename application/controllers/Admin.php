<?php
class Admin extends CI_Controller {
        
        function __construct(){
                parent:: __construct();
                $this->load->model('Bencana_model');
                $this->load->model('Donatur_model');
                $this->load->model('Petugas_model');
                $this->load->model('Posko_model');
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
                $this->template->load('admin/template', 'admin/dashboard', $data);
        }
        
        function profileBencana() {
                $data['bencana'] = $this->Bencana_model->getAllBencana();
                $this->template->load('admin/template', 'admin/data_program', $data);
        }
        
        function profilePetugas() {
                $data['petugas'] = $this->Petugas_model->getAllPetugas();
                $this->template->load('admin/template', 'admin/data_relawan', $data);
        }
        
        function profileDonatur() {
                $data['donatur'] = $this->Donatur_model->getAllDonatur();
                $this->template->load('admin/template', 'admin/data_donatur', $data);
        }

        function profilePosko() {
                $data['petugas'] = $this->Petugas_model->getAllPetugas();
                $data['posko'] = $this->Posko_model->getAllPosko();
                $this->template->load('admin/template', 'admin/data_posko', $data);
        }

        function maps() {
                $this->template->load('admin/template', 'admin/maps');
        }
        
        //HAPUS DATA
        public function hapusBencana($id)
        {
                $this->Bencana_model->hapusDataBencana($id);
                $this->session->set_flashdata('flash', 'Dihapus');
                redirect('admin/profileBencana');
        }
        
        public function hapusPetugas($id)
        {
                $this->Petugas_model->hapusDataPetugas($id);
                $this->session->set_flashdata('flash', 'Dihapus');
                redirect('admin/profilePetugas');
        }
        
        public function hapusDonatur($id)
        {
                $this->Donatur_model->hapusDataDonatur($id);
                $this->session->set_flashdata('flash', 'Dihapus');
                redirect('admin/profileDonatur');
        }
        
        public function hapusPosko($id)
        {
                $this->Posko_model->hapusDataPosko($id);
                $this->session->set_flashdata('flash', 'Dihapus');
                redirect('admin/profilePosko');
        }    
        // END HAPUS
        
        // EDIT DATA
        // ----------------------------
        // EDIT DATA BENCANA
        public function editBencana($id)
        {
                $data['bencana'] = $this->Bencana_model->getAllBencana();
                
                $config = array(
                        array(
                                'field' => 'nama-program',
                                'label' => 'Program name',
                                'rules' => 'required'
                        ),
                        array(
                                'field' => 'jenis-bencana',
                                'label' => 'Program type',
                                'rules' => 'required'
                        ),
                        array(
                                'field' => 'jumlah-pengungsi',
                                'label' => 'refuges',
                                'rules' => 'required|numeric'
                        ),
                        array(
                                'field' => 'deskripsi',
                                'label' => 'Description',
                                'rules' => 'required'
                        ),
                );
                
                $this->form_validation->set_rules($config);
                
                if ($this->form_validation->run() == false) {
                        
                        $this->template->load('admin/template', 'admin/profileProgram', $data);
                        
                } else {
                        $this->Bencana_model->editDataBencana($id);
                        $this->session->set_flashdata('flash', 'Diubah');
                        redirect('admin/profileBencana');
                }
        }
        // END EDIT DATA BENCANA
        // ----------------------------
        // EDIT DATA PETUGAS
        public function editPetugas($id)
        {
                $data['petugas'] = $this->Petugas_model->getAllPetugas();
                
                $config = array(
                        array(
                                'field' => 'nama-depan',
                                'label' => 'First Name',
                                'rules' => 'required'
                        ),
                        array(
                                'field' => 'nama-belakang',
                                'label' => 'Last Name',
                                'rules' => 'required'
                        ),
                        array(
                                'field' => 'notelp',
                                'label' => 'Telephone number',
                                'rules' => 'required|numeric'
                        ),
                        array(
                                'field' => 'alamat',
                                'label' => 'Address',
                                'rules' => 'required'
                        ),
                );
                
                $this->form_validation->set_rules($config);
                
                if ($this->form_validation->run() == false) {
                        
                        $this->template->load('admin/template', 'admin/profileRelawan', $data);
                        
                } else {
                        $this->Petugas_model->editDataPetugas($id);
                        $this->session->set_flashdata('flash', 'Diubah');
                        redirect('admin/profilePetugas');
                }
        }
        // END EDIT DATA PETUGAS    
        // ----------------------------
        // EDIT DATA DONATUR
        public function editDonatur($id)
        {
                
                $data['donatur'] = $this->Donatur_model->getAllDonatur();
                
                $config = array(
                        array(
                                'field' => 'nama-lengkap',
                                'label' => 'Name',
                                'rules' => 'required'
                        ),
                        array(
                                'field' => 'notelp',
                                'label' => 'Telephone number',
                                'rules' => 'required|numeric'
                        ),
                        array(
                                'field' => 'alamat',
                                'label' => 'Address',
                                'rules' => 'required'
                        ),
                );
                
                $this->form_validation->set_rules($config);
                
                if ($this->form_validation->run() == false) {
                        
                        $this->template->load('admin/template', 'admin/profileDonatur', $data);
                        
                } else {
                        $this->Donatur_model->editDataDonatur($id);
                        $this->session->set_flashdata('flash', 'Diubah');
                        redirect('admin/profileDonatur');
                }
        }

        // END EDIT DATA DONATUR
        // ---------------------------
        // EDIT DATA POSKO

        public function editPosko($id)
        {
                
                $data['posko'] = $this->Posko_model->getAllPosko();
                
                $config = array(
                        array(
                                'field' => 'nama-posko',
                                'label' => 'Name',
                                'rules' => 'required'
                        ),
                );
                
                $this->form_validation->set_rules($config);
                
                if ($this->form_validation->run() == false) {
                        
                        $this->template->load('admin/template', 'admin/profilePosko', $data);
                        
                } else {
                        $this->Posko_model->editDataPosko($id);
                        $this->session->set_flashdata('flash', 'Diubah');
                        redirect('admin/profilePosko');
                }
        }
        // END EDIT DATA POSKO
        // END EDIT DATA

        // TAMBAH DATA
        // ----------------------------
        // TAMBAH DATA POSKO

        function buatPosko() {

                
                $config = array(
                        array(
                                'field' => 'nama-posko',
                                'label' => 'Name',
                                'rules' => 'required'
                        ),
                );
                
                $this->form_validation->set_rules($config);
                
                if ($this->form_validation->run() == false) {
                        
                        $this->template->load('admin/template', 'admin/buat_posko');
                        
                } else {
                        $this->Posko_model->tambahDataPosko();
                        $this->session->set_flashdata('flash', 'Ditambah');
                        redirect('admin/profilePosko');
                }
        }

        // END TAMBAH DATA POSKO
        // ----------------------------
        // END TAMBAH DATA

        // DETAIL DATA
        // ----------------------------
        // DETAIL DATA POSKO

        function detailPosko() {

                $data['posko'] = $this->Posko_model->getAllPosko();
                $this->template->load('admin/template', 'admin/detail_posko', $data);
        }

}
