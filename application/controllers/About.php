<?php

class About extends CI_Controller{
    public function index(){
        $data['pageTitle'] = 'About us';
        $this->load->view('templates/header.html', $data);
        $this->load->view('about/index');
        $this->load->view('templates/footer.html');
    }
}