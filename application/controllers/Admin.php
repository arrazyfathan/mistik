<?php
class Admin extends CI_Controller {
        
        function __construct(){
                parent:: __construct();
                $this->load->helper('short_number');
                $this->load->model('Uang_model');
                $this->load->model('Bencana_model');
                $this->load->model('Donatur_model');
                $this->load->model('Petugas_model');
                $this->load->model('Barang_model');
                $this->load->model('Kelogistik_model');
                $this->load->model('Posko_model');
                $this->load->library('form_validation');
                $this->load->library('pagination');

                //Validasi jika user belum login
                if($this->session->userdata('masuk_admin') !=TRUE){
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
                $this->template->load('admin/template', 'admin/dashboard', $data);
        }
        
        function profileBencana() {

        //konfigurasi pagination
        $config['base_url'] = site_url('admin/profileBencana'); //site url
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
                $this->template->load('admin/template', 'admin/data_program', $data);
        }

        function profileDonasiUang() {

        //konfigurasi pagination
        $config['base_url'] = site_url('admin/profileDonasiUang'); //site url
        $config['total_rows'] = $this->db->count_all('uang'); //total row
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
        $data['data'] = $this->Uang_model->tableUang($config["per_page"], $data['page']);           
 
        $data['pagination'] = $this->pagination->create_links(); 

                if($this->input->post('keyword')){
                        $data['data'] = $this->Uang_model->cariDataUang();
                }

        $this->template->load('admin/template', 'admin/data_uang', $data);
        }

        function profileDonasiBarang() {

        //konfigurasi pagination
        $config['base_url'] = site_url('admin/profileDonasiBarang'); //site url
        $config['total_rows'] = $this->db->count_all('barang'); //total row
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
        $data['data'] = $this->Barang_model->tableBarang($config["per_page"], $data['page']);           
 
        $data['pagination'] = $this->pagination->create_links(); 

                if($this->input->post('keyword')){
                        $data['data'] = $this->Barang_model->cariDataBarang();
                }
                $this->template->load('admin/template', 'admin/data_barang', $data);
        }

        function profileLogistik() {
        
        //konfigurasi pagination
        $config['base_url'] = site_url('admin/profileLogistik'); //site url
        $config['total_rows'] = $this->db->count_all('kelogistik'); //total row
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
        $data['data'] = $this->Kelogistik_model->tableKelogistik($config["per_page"], $data['page']);           
 
        $data['pagination'] = $this->pagination->create_links(); 

                if($this->input->post('keyword')){
                        $data['data'] = $this->Kelogistik_model->cariDataKelogistik();
                }
                $this->template->load('admin/template', 'admin/data_logistik', $data);
        }
        
        function profilePetugas() {
                
        //konfigurasi pagination
        $config['base_url'] = site_url('admin/profilePetugas'); //site url
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
                $this->template->load('admin/template', 'admin/data_relawan', $data);
        }
        
        function profileDonatur() {
                
        //konfigurasi pagination
        $config['base_url'] = site_url('admin/profileDonatur'); //site url
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
                $this->template->load('admin/template', 'admin/data_donatur', $data);
        }

        function profilePosko() {
                
        //konfigurasi pagination
        $config['base_url'] = site_url('admin/profilePosko'); //site url
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

        public function hapusLogistik($id)
        {
                $this->Kelogistik_model->hapusDataKelogistik($id);
                $this->session->set_flashdata('flash', 'Dihapus');
                redirect('admin/profileLogistik');
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
                $data['bencana'] = $this->Bencana_model->getBencanaById($id);
                
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
                $data['petugas'] = $this->Petugas_model->getPetugasById($id);
                
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
                
                $data['donatur'] = $this->Donatur_model->getDonaturById($id);
                
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
                
                $data['posko'] = $this->Posko_model->getPoskoById($id);
                
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
        // UPDATE DATA
        public function updateBarang($id)
        {
                $this->Barang_model->updateBarang($id);
                redirect('Admin/profileDonasiBarang');
                
        }
        // END EDIT DATA

        // TAMBAH DATA
        // ----------------------------
        // TAMBAH DATA POSKO

        function buatPosko() {

                $data['petugas'] = $this->Petugas_model->getAllPetugas();
                $config = array(
                        array(
                                'field' => 'nama-posko',
                                'label' => 'Name',
                                'rules' => 'required'
                        ),
                );
                
                $this->form_validation->set_rules($config);
                
                if ($this->form_validation->run() == false) {
                        
                        $this->template->load('admin/template', 'admin/buat_posko', $data);
                        
                } else {
                        $this->Posko_model->tambahDataPosko();
                        $this->session->set_flashdata('flash', 'Ditambah');
                        redirect('admin/buatPosko');
                }
        }

        function buatProgram() {

                // $data = array();
		
		// if($this->input->post('submit')){ 
		
		// 	$upload = $this->Bencana_model->upload();
			
		// 	if($upload['result'] == "success"){ 
				
		// 		$this->Bencana_model->save($upload);
				
		// 		redirect('buatProgram'); 
		// 	}else{ 
		// 		$data['message'] = $upload['error'];
		// 	}
		// }
		
                // $this->template->load('admin/template', 'admin/buat_program', $data);
                
                // --------------------------------------------------------------------------

                $config = array(
                        array(
                                'field' => 'nama-program',
                                'label' => 'Program name',
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
                        
                        $this->template->load('admin/template', 'admin/buat_program');
                        
                } else {
                        $upload = $this->Bencana_model->upload();
                        $this->Bencana_model->tambahDataBencana($upload);
                        $this->session->set_flashdata('flash', 'Ditambah');
                        redirect('admin/buatProgram');              
                }
        }

        // END TAMBAH DATA POSKO
        // ----------------------------
        // END TAMBAH DATA

        // DETAIL DATA
        // ----------------------------
        // DETAIL DATA POSKO

        function detailPosko($id) {

                $data['posko'] = $this->Posko_model->getPoskoById($id);
                $data['petugas'] = $this->Petugas_model->getPetugasById($id);
                $this->template->load('admin/template', 'admin/detail_posko', $data);
        }

        
       
}
