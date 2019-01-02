<?php
    class Petugas extends CI_Controller {

        function __construct(){
            parent:: __construct();
            $this->load->model('Uang_model');
            $this->load->model('Bencana_model');
            $this->load->model('Donatur_model');
            $this->load->model('Petugas_model');
            $this->load->model('Posko_model');
            $this->load->model('Kelogistik_model');
            $this->load->library('form_validation');
            $this->load->library('pagination');
            //Validasi jika user belum login
            if($this->session->userdata('masuk_petugas') !=TRUE){
                $url=base_url('logindb');
                redirect($url);
            }
            
        }
        
        function index(){
            $data['posko'] = $this->Posko_model->getTotalPosko();
            $data['program'] = $this->Bencana_model->getTotalProgram();
            $data['pengungsi'] = $this->Bencana_model->getTotalPengungsi();
            $data['uang'] = $this->Uang_model->getTotalDonasi();
            $data['grafik'] = $this->Bencana_model->getGrafikBencana();
            $this->template->load('petugas/template', 'petugas/dashboard', $data);
        }
        
        function profilePetugas() {
        
        //konfigurasi pagination
        $config['base_url'] = site_url('petugas/profilePetugas'); //site url
        $config['total_rows'] = $this->db->count_all('petugas'); //total row
        $config['per_page'] = 5;  //show record per halaman
        $config["uri_segment"] = 3;  // uri parameter
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);
 
        // Membuat Style pagination untuk BootStrap v4
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
 
        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
 
        //panggil function get_mahasiswa_list yang ada pada mmodel mahasiswa_model. 
        $data['data'] = $this->Petugas_model->tablePetugas($config["per_page"], $data['page']);           
 
        $data['pagination'] = $this->pagination->create_links(); 

                if($this->input->post('keyword')){
                        $data['data'] = $this->Petugas_model->cariDataPetugas();
                }
                $this->template->load('petugas/template', 'petugas/data_relawan', $data);
            }

        function profilePosko() {
                //konfigurasi pagination
        $config['base_url'] = site_url('petugas/profilePosko'); //site url
        $config['total_rows'] = $this->db->count_all('posko'); //total row
        $config['per_page'] = 5;  //show record per halaman
        $config["uri_segment"] = 3;  // uri parameter
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);
 
        // Membuat Style pagination untuk BootStrap v4
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
 
        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
 
        //panggil function get_mahasiswa_list yang ada pada mmodel mahasiswa_model. 
        $data['data'] = $this->Posko_model->tablePosko($config["per_page"], $data['page']);           
 
        $data['pagination'] = $this->pagination->create_links(); 
                
                if($this->input->post('keyword')){
                        $data['data'] = $this->Posko_model->cariDataPosko();
                }
                $this->template->load('petugas/template', 'petugas/data_posko', $data);
        }

        function profileDonatur() {
            //konfigurasi pagination
        $config['base_url'] = site_url('petugas/profileDonatur'); //site url
        $config['total_rows'] = $this->db->count_all('donatur'); //total row
        $config['per_page'] = 5;  //show record per halaman
        $config["uri_segment"] = 3;  // uri parameter
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);
 
        // Membuat Style pagination untuk BootStrap v4
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
 
        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
 
        //panggil function get_mahasiswa_list yang ada pada mmodel mahasiswa_model. 
        $data['data'] = $this->Donatur_model->tableDonatur($config["per_page"], $data['page']);           
 
        $data['pagination'] = $this->pagination->create_links(); 

                if($this->input->post('keyword')){
                        $data['data'] = $this->Donatur_model->cariDataDonatur();
                }
                $this->template->load('petugas/template', 'petugas/data_donatur', $data);
        }
        
        function profileBencana() {
            //konfigurasi pagination
        $config['base_url'] = site_url('petugas/profileBencana'); //site url
        $config['total_rows'] = $this->db->count_all('bencana'); //total row
        $config['per_page'] = 5;  //show record per halaman
        $config["uri_segment"] = 3;  // uri parameter
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);
 
        // Membuat Style pagination untuk BootStrap v4
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
 
        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
 
        //panggil function get_mahasiswa_list yang ada pada mmodel mahasiswa_model. 
        $data['data'] = $this->Bencana_model->tableBencana($config["per_page"], $data['page']);           
 
        $data['pagination'] = $this->pagination->create_links();
        
                if($this->input->post('keyword')){
                        $data['data'] = $this->Bencana_model->cariDataBencana();
                }
                $this->template->load('petugas/template', 'petugas/data_program', $data);
        }
        
        function maps() {
            $this->template->load('petugas/template', 'petugas/maps');
            }


        // TAMBAH DATA
        // ----------------------------
        // TAMBAH DATA KELOGISTIK

            function tambahKelogistik(){

                $data['bencana'] = $this->Bencana_model->getAllBencana();
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
                        
                        $this->template->load('petugas/template', 'petugas/buat_kelogistik', $data);
                        
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