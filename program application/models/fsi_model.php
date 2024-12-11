<?php
class fsi_model extends CI_Model {
    public function __construct()
    {
      $this->load->database();
    }
  
    public function get_all_fsis()
    // Ambil semua fsi
 {
        $query = $this->db->get('fsi');
        return $query->result_array();
    }

    // Ambil satu fsi berdasarkan ID
    public function get_fsi($id) {
        $query = $this->db->get_where('fsi', array('id' => $id));
        return $query->row_array();
    }

    // Simpan data fsi baru ke database
    public function create_fsi($data) {
        return $this->db->insert('fsi', $data);
    }

    // Update data fsi berdasarkan ID
    public function update_fsi($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('fsi', $data);
    }

    // Hapus fsi berdasarkan ID
    public function delete_fsi($id) {
      $this->db->where('id', $id);
      return $this->db->delete('fsi'); // Pastikan nama tabel sesuai dengan nama tabel di database
  }
    
  public function count_all_fsis() {
    // Menghitung jumlah semua data fsi
    return $this->db->count_all('fsi');
  } 
}
