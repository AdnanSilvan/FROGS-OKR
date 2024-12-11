<?php
class fi_model extends CI_Model {
    public function __construct()
    {
      $this->load->database();
    }
  
    public function get_all_fis()
    // Ambil semua fi
 {
        $query = $this->db->get('fi');
        return $query->result_array();
    }

    // Ambil satu fi berdasarkan ID
    public function get_fi($id) {
        $query = $this->db->get_where('fi', array('id' => $id));
        return $query->row_array();
    }

    // Simpan data fi baru ke database
    public function create_fi($data) {
        return $this->db->insert('fi', $data);
    }

    // Update data fi berdasarkan ID
    public function update_fi($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('fi', $data);
    }

    // Hapus fi berdasarkan ID
    public function delete_fi($id) {
        $this->db->where('id', $id);
        return $this->db->delete('fi');
    }
    
    public function count_all_fis() {
      return $this->db->count_all('fi');
  }
}
