<?php
class Fsi extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('fsi_model');

        is_logged_in();
    }

    // Tampilkan semua KPI
    public function index() {
        $data['fsis'] = $this->fsi_model->get_all_fsis();
        $data['title'] = 'Divisi Operational FSI | Frogs Indonesia';
        $this->load_views('fsi/index', $data); // Use the new method
    }

    // Tampilkan form create KPI dan proses input data
    public function create() {
        $this->form_validation->set_rules('objective_name', 'Objective Name', 'required');
        $this->form_validation->set_rules('key_results', 'Key Results', 'required');
        $this->form_validation->set_rules('owner', 'Owner', 'required');
        $this->form_validation->set_rules('weight', 'Weight', 'required|numeric');
        $this->form_validation->set_rules('target', 'Target', 'required|numeric');
        $this->form_validation->set_rules('actual', 'Actual', 'required|numeric');
        $this->form_validation->set_rules('progress', 'Progress', 'required|numeric');

        if ($this->form_validation->run() === FALSE) {
            $data['title'] = 'Divisi Operational FSI | Frogs Indonesia';
            $this->load_views('fsi/create', $data); // Use the new method
        } else {
            $data = array(
                'objective_name' => $this->input->post('objective_name'),
                'key_results' => $this->input->post('key_results'),
                'owner' => $this->input->post('owner'),
                'weight' => $this->input->post('weight'),
                'target' => $this->input->post('target'),
                'actual' => $this->input->post('actual'),
                'progress' => $this->input->post('progress')
            );

            $this->fsi_model->create_fsi($data);
            redirect('fsi');
        }
    }

    // Tampilkan form edit KPI dan proses edit data
    public function edit($id) {
        $data['fsi'] = $this->fsi_model->get_fsi($id);

        if (empty($data['fsi'])) {
            show_404();
        }

        $this->form_validation->set_rules('objective_name', 'Objective Name', 'required');
        $this->form_validation->set_rules('key_results', 'Key Results', 'required');
        $this->form_validation->set_rules('owner', 'Owner', 'required');
        $this->form_validation->set_rules('weight', 'Weight', 'required|numeric');
        $this->form_validation->set_rules('target', 'Target', 'required|numeric');
        $this->form_validation->set_rules('actual', 'Actual', 'required|numeric');
        $this->form_validation->set_rules('progress', 'Progress', 'required|numeric');

        if ($this->form_validation->run() === FALSE) {
            $data['title'] = 'Divisi Operational FSI | Frogs Indonesia';
            $this->load_views('fsi/edit', $data); // Use the new method
        } else {
            $update_data = array(
                'objective_name' => $this->input->post('objective_name'),
                'key_results' => $this->input->post('key_results'),
                'owner' => $this->input->post('owner'),
                'weight' => $this->input->post('weight'),
                'target' => $this->input->post('target'),
                'actual' => $this->input->post('actual'),
                'progress' => $this->input->post('progress')
            );

            $this->fsi_model->update_fsi($id, $update_data);
            redirect('fsi');
        }
    }

    // Hapus KPI berdasarkan ID
    public function delete($id) {
        $this->fsi_model->delete_fsi($id); 
        redirect('fsi');
    }

    // Private method to load views
    private function load_views($view, $data = []) {
        $data['user'] = $this->session->userdata(); // Load user session data
        $data['title'] = isset($data['title']) ? $data['title'] : 'Default Title'; // Set a default title if not provided

        // Load views
        $this->load->view('theme/header', $data);
        $this->load->view('theme/sidebar', $data);
        $this->load->view('theme/topbar', $data);
        $this->load->view($view, $data);
        $this->load->view('theme/footer');
    }
}
