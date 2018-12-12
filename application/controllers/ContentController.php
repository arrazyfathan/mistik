<?php

class ContentController extends CI_COntroller {
    public function index(){
        $this->load->view('content/content');
    }
}