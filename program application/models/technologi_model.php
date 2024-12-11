<?php
class technologi_model extends CI_Model {
    public function __construct()
    {
      $this->load->database();
    }
  
    public function get_all_technologis()
    // Ambil semua KPI
 {
        $query = $this->db->get('technologi');
        return $query->result_array();
    }

    // Ambil satu KPI berdasarkan ID
    public function get_technologi($id) {
        $query = $this->db->get_where('technologi', array('id' => $id));
        return $query->row_array();
    }

    // Simpan data KPI baru ke database
    public function create_technologi($data) {
        return $this->db->insert('technologi', $data);
    }

    // Update data KPI berdasarkan ID
    public function update_technologi($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('technologi', $data);
    }

    // Hapus KPI berdasarkan ID
    public function delete_technologi($id) {
        $this->db->where('id', $id);
        return $this->db->delete('technologi');
    }

    public function count_all_technologis() 
    {
        // Menghitung jumlah semua data fsi
        return $this->db->count_all('technologi');
      } 
}
