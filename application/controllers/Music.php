<?php


class Music extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        //load models untuk satu controller(controller Music)
        $this->load->model('Music_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['pageTitle'] = 'Music Playlist';
        $data['music'] = $this->Music_model->getAllMusic();
        $this->load->view('templates/header.html', $data);
        $this->load->view('music/index');
        $this->load->view('templates/footer.html');
    }

    public function addMusic()
    {

        //set validation rules
        $this->form_validation->set_rules('songname', 'Song Name', 'required');
        $this->form_validation->set_rules('singer', 'Singer', 'required');
        $this->form_validation->set_rules('songauthor', 'Author', 'required');
        $this->form_validation->set_rules('songlisten', 'Listen Count', 'required|numeric');

        if ($this->form_validation->run() == FALSE) {
            $data['pageTitle'] = 'Add Music | Music Playlist';
            $this->load->view('templates/header.html', $data);
            $this->load->view('music/add-music');
            $this->load->view('templates/footer.html');
        } else {
            $this->Music_model->addMusic();
            $this->session->set_flashdata('flash', 'successfully added');
            redirect('music');
        }
    }
    
    public function deleteMusic($id){
        $this->Music_model->deleteTheMusic($id);
        $this->session->set_flashdata('flash', 'successfully deleted');
        redirect('music');
    }

    public function getMusicById($id){
        $data['music'] = $this->Music_model->getSelectedMusic($id);
        // $this->Music_model->updateTheMusic($id);
        // $this->session->set_flashdata('flash', 'successfully updated');
        // redirect('music');
    }

    public function updateMusic($id){
        $data['pageTitle'] = 'Edit Music | Music Playlist';
        $data['msc'] = $this->Music_model->getSelectedMusic($id);
        //set validation rules
        $this->form_validation->set_rules('songname', 'Song Name', 'required');
        $this->form_validation->set_rules('singer', 'Singer', 'required');
        $this->form_validation->set_rules('songauthor', 'Author', 'required');
        $this->form_validation->set_rules('songlisten', 'Listen Count', 'required|numeric');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header.html', $data);
            $this->load->view('music/update-music', $data);
            $this->load->view('templates/footer.html');
        } else {
            $this->Music_model->updateTheMusic($id);
            $this->session->set_flashdata('flash', 'successfully edited');
            redirect('music');
        }
    }
}
