<?php
class bussiness_model extends CI_Model {
    public function __construct()
    {
      $this->load->database();
    }
  
    public function get_all_bussinesss()
    // Ambil semua bussiness
 {
        $query = $this->db->get('bussiness');
        return $query->result_array();
    }

    // Ambil satu bussiness berdasarkan ID
    public function get_bussiness($id) {
        $query = $this->db->get_where('bussiness', array('id' => $id));
        return $query->row_array();
    }

    // Simpan data bussiness baru ke database
    public function create_bussiness($data) {
        return $this->db->insert('bussiness', $data);
    }

    // Update data bussiness berdasarkan ID
    public function update_bussiness($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('bussiness', $data);
    }

    // Hapus bussiness berdasarkan ID
    public function delete_bussiness($id) {
        $this->db->where('id', $id);
        return $this->db->delete('bussiness');
    }

    public function count_all_bussinesss() {
        return $this->db->count_all('bussiness');
    }
}
