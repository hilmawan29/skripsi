<?php
 defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller { 
	public function __construct() {
		parent :: __construct();
		$this->load->model('Patient_model', 'patient');
	}

	public function index() {
		$data['title'] = 'Dashboard';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        if(!empty ($this->input->get('label'))) {
            $start_date = date("Y-m-01", strtotime($this->input->get('label')));
            $end_date = date("Y-m-t", strtotime($this->input->get('label')));
        }else{
            $start_date = date('Y-m-01');
            $end_date = date("Y-m-t");
        }
        if ($this->session->userdata('role_id') != '3') {
        	$data['dashboard'] = $this->patient->summary_result($start_date, $end_date);
        }else{
        	$data['dashboard'] = $this->patient->summary_reference_result($start_date, $end_date);
        }
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('dashboard/index', $data);
		$this->load->view('templates/footer');
	}
}