<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller 
{
    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
    }
    public function index()
    {
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|callback_trim_if_not_null');
        $this->form_validation->set_rules('password', 'Password', 'required|callback_trim_if_not_null');
        
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Frogs Indonesia Login';
            $this->load->view('auth/login', $data);
        } else {
            // jika validasi success
            $this->_login();
        }
    }

    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
    
        $user = $this->db->get_where('user', ['email' => $email])->row_array();
    
        if($user) {
            if($user['is_active'] == 1) {
                if(password_verify($password, $user['password'])) {
                    $data = [
                        'email' => $user['email'],
                        'role_id' => $user['role_id'],
                        'name' => $user['name']  // Add user's name to session data
                    ];
                    $this->session->set_userdata($data);
                    
                    // Redirect based on user role
                    switch($user['role_id']) {
                        case 1: // Admin
                            redirect('dashboard');
                            break;
                        case 2: // FI
                            redirect('fi');
                            break;
                        case 3: // FSI
                            redirect('fsi');
                            break;
                        case 4: // Technologi
                            redirect('technologi');
                            break;
                        case 5: // Bussiness
                            redirect('bussiness');
                            break;
                        case 6: // Finance
                            redirect('finance');
                            break;
                        default:
                            redirect('dashboard');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong Password </div>');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">This email has not been activated </div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email is not registered </div>');
            redirect('auth');
        }
    }

    public function registration()
    {
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'This email has already registered!'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[6]', [
            'min_length' => 'Pasword too short!'
        ]);
        $this->form_validation->set_rules('role', 'Role', 'required|callback_trim_if_not_null', [
            'required' => 'Please select a role.'
        ]);
        

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Frogs Indonesia Registration';
            $data['roles'] = $this->db->get('user_role')->result_array();
            $this->load->view('auth/registration', $data);
        } else {
            $data = [
                'name' => htmlspecialchars($this->input->post('name', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'image' => 'default.jpg',
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => $this->input->post('role'),
                'is_active' => 1,
                'date_created' => time()
            ];

            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congratulation! your account has been created. Please Login</div>');
            redirect('auth');
        }
    }

    public function trim_if_not_null($str) {
        return (is_null($str) || $str === '') ? '' : trim($str);
    }
    
    

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">You have been logged out! </div>');
        redirect('auth');
    }

    public function blocked()
    {
        $this->load->view('auth/blocked');
    }

}