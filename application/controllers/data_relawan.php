<?php

class data_relawan extends CI_Controller {
    public function __construct() 
    {
        parent::__construct();
        {
            $this->load->model('petugas_model');
        }
    }

    public function index(){
        $data['data_relawan'] = $this->petugas_model->getAllPetugas(); 
        $this->template->load('admin/template', 'admin/data_relawan' ,$data);
        
    }

}