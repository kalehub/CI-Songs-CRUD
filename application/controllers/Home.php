<?php 

class Home extends CI_Controller{
    public function index(){
        $this->load->helper('url');
        $data['pageTitle'] = 'Songs CRUD';
        $this->load->view('templates/header.html', $data);
        $this->load->view('home/index');
        $this->load->view('templates/footer.html');
    }
}