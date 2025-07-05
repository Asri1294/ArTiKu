<?php
class Feedback_model extends CI_Model {

    public function get_all() {
        return $this->db->order_by('id', 'DESC')->get('feedback')->result();
    }

    public function create($data) {
        $this->db->insert('feedback', $data);
        return $this->db->insert_id();
    }

    public function count_all() {
        return $this->db->count_all('feedback');
    }
}