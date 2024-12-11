<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
  
  public function __construct()
  {
    parent::__construct();
	$this->load->model(['fi_model', 'fsi_model', 'technologi_model', 'bussiness_model', 'finance_model']);

	is_logged_in();

  }
  
	public function index()
	{
		$data['user'] = $this->db->get_where('user', ['email' => 
		$this->session->userdata('email')])->row_array();

		$data['fis_count'] = $this->fi_model->count_all_fis();
		$data['fsis_count'] = $this->fsi_model->count_all_fsis();
		$data['technologis_count'] = $this->technologi_model->count_all_technologis();
		$data['bussinesss_count'] = $this->bussiness_model->count_all_bussinesss();
		$data['finances_count'] = $this->finance_model->count_all_finances();
		$data['title'] = 'Dashboard';

		$this->load->view('theme/header', $data);
		$this->load->view('theme/sidebar', $data);
		$this->load->view('theme/topbar', $data);
		$this->load->view('dashboard', $data);
		$this->load->view('theme/footer');
	}
}
