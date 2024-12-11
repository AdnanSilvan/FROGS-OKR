<?php
class Fi extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('fi_model');

        is_logged_in();
    }

    // Tampilkan semua fi
    public function index() {
        $data['fis'] = $this->fi_model->get_all_fis();
        $data['fis_count'] = $this->fi_model->count_all_fis();
        $data['title'] = 'Divisi Operational FI | Frogs Indonesia';
        $this->load_views('fi/index', $data); 
    }

    // Tampilkan form create fi dan proses input data
    public function create() {
        $this->form_validation->set_rules('objective_name', 'Objective Name', 'required');
        $this->form_validation->set_rules('key_results', 'Key Results', 'required');
        $this->form_validation->set_rules('owner', 'Owner', 'required');
        $this->form_validation->set_rules('weight', 'Weight', 'required|numeric');
        $this->form_validation->set_rules('target', 'Target', 'required|numeric');
        $this->form_validation->set_rules('actual', 'Actual', 'required|numeric');
        $this->form_validation->set_rules('progress', 'Progress', 'required|numeric');

        if ($this->form_validation->run() === FALSE) {
            $data['title'] = 'Divisi Operational FI | Frogs Indonesia';
            $this->load_views('fi/create', $data); 
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

            $this->fi_model->create_fi($data);
            redirect('fi');
        }
    }

    // Tampilkan form edit fi dan proses edit data
    public function edit($id) {
        $data['fi'] = $this->fi_model->get_fi($id);

        if (empty($data['fi'])) {
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
            $data['title'] = 'Divisi Operational FI | Frogs Indonesia';
            $this->load_views('fi/edit', $data); 
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

            $this->fi_model->update_fi($id, $update_data);
            redirect('fi');
        }
    }

    // Hapus fi berdasarkan ID
    public function delete($id) {
        $deleted = $this->fi_model->delete_fi($id);
        if ($deleted) {
            $this->session->set_flashdata('message', 'Data deleted successfully.');
        } else {
            $this->session->set_flashdata('error', 'Failed to delete data.');
        }
        redirect('fi');
    }
    
    // Private method to load views
    private function load_views($view, $data = []) {
        $data['user'] = $this->session->userdata(); 
        $data['title'] = isset($data['title']) ? $data['title'] : 'Default Title'; // Set a default title if not provided

        // Load views
        $this->load->view('theme/header', $data);
        $this->load->view('theme/sidebar', $data);
        $this->load->view('theme/topbar', $data);
        $this->load->view($view, $data);
        $this->load->view('theme/footer');
    }
}
