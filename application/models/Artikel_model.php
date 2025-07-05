<?php
class Artikel_model extends CI_Model {

    //Admin
    public function get_all() {
        return $this->db->get('artikel')->result();
    }
    
    //user
    public function get_all_published() {
        $this->db->where('draft', 0);
        return $this->db->get('artikel')->result();
    }

    public function get_by_id($id) {
        return $this->db->get_where('artikel', ['id' => $id])->row();
    }

    public function create($data) {
        return $this->db->insert('artikel', $data);
    }

    public function update($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('artikel', $data);
    }

    public function delete($id) {
        $this->db->where('id', $id);
        return $this->db->delete('artikel');
    }

    public function count_all() {
        return $this->db->count_all('artikel');
    }

    public function get_latest($limit = 5) {
        $this->db->order_by('created_at', 'DESC');
        $this->db->limit($limit);
        return $this->db->get('artikel')->result();
    }

}