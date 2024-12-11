<?php
class Bussiness extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('bussiness_model');

        is_logged_in();
    }

    // Tampilkan semua bussiness
    public function index() {
        $data['bussinesss'] = $this->bussiness_model->get_all_bussinesss();
        $data['title'] = 'Divisi Business Development | Frogs Indonesia';
        $this->load_views('bussiness/index', $data);
    }

    // Tampilkan form create bussiness dan proses input data
    public function create() {
        $this->form_validation->set_rules('objective_name', 'Objective Name', 'required');
        $this->form_validation->set_rules('key_results', 'Key Results', 'required');
        $this->form_validation->set_rules('owner', 'Owner', 'required');
        $this->form_validation->set_rules('weight', 'Weight', 'required|numeric');
        $this->form_validation->set_rules('target', 'Target', 'required|numeric');
        $this->form_validation->set_rules('actual', 'Actual', 'required|numeric');
        $this->form_validation->set_rules('progress', 'Progress', 'required|numeric');

        if ($this->form_validation->run() === FALSE) {
            $data['title'] = 'Divisi Business Development | Frogs Indonesia';
            $this->load_views('bussiness/create', $data);
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

            $this->bussiness_model->create_bussiness($data);
            redirect('bussiness');
        }
    }

    // Tampilkan form edit bussiness dan proses edit data
    public function edit($id) {
        $data['bussiness'] = $this->bussiness_model->get_bussiness($id);

        if (empty($data['bussiness'])) {
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
            $data['title'] = 'Divisi Business Development | Frogs Indonesia';
            $this->load_views('bussiness/edit', $data);
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

            $this->bussiness_model->update_bussiness($id, $update_data);
            redirect('bussiness');
        }
    }

    // Hapus bussiness berdasarkan ID
    public function delete($id) {
        $this->bussiness_model->delete_bussiness($id);
        redirect('bussiness');
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
