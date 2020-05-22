<?php
class Music_model extends CI_Model{
    public function getAllMusic(){
        $query = $this->db->get('song');
        return $query->result_array();
    }

    public function addMusic(){
        $data = [
            //format post
            //nama kolom => this->input->post('name input', 'xss clean')
            "song_name" => $this->input->post('songname', true),
            "song_singer" => $this->input->post('singer', true),
            "song_author" => $this->input->post('songauthor', true),
            "song_listen" => $this->input->post('songlisten', true)
        ];
        $this->db->insert('song', $data);
    }

    public function deleteTheMusic($id){
        $this->db->where('id', $id);
        $this->db->delete('song');
    }

    public function getSelectedMusic($id){
        $query = $this->db->get_where('song', array('id' => $id));
        return $query->row_array();
    }

    public function updateTheMusic($id){
        $data = [
            "song_name" => $this->input->post('songname', true),
            "song_singer" => $this->input->post('singer', true),
            "song_author" => $this->input->post('songauthor', true),
            "song_listen" => $this->input->post('songlisten', true)
        ];
        $this->db->where('id', $id);
        $this->db->update('song', $data);

    }
}