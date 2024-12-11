<?php
class finance_model extends CI_Model {
    public function __construct()
    {
      $this->load->database();
    }
  
    public function get_all_finances()
    // Ambil semua finance
 {
        $query = $this->db->get('finance');
        return $query->result_array();
    }

    // Ambil satu finance berdasarkan ID
    public function get_finance($id) {
        $query = $this->db->get_where('finance', array('id' => $id));
        return $query->row_array();
    }

    // Simpan data finance baru ke database
    public function create_finance($data) {
        return $this->db->insert('finance', $data);
    }

    // Update data finance berdasarkan ID
    public function update_finance($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('finance', $data);
    }

    // Hapus finance berdasarkan ID
    public function delete_finance($id) {
        $this->db->where('id', $id);
        return $this->db->delete('finance');
    }

    public function count_all_finances() {
        return $this->db->count_all('finance');
    }
}
