<?php

class ContentController extends CI_Controller {
    public function index(){
        $this->load->view('content/content');
    }
}