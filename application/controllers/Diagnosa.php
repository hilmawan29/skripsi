<?php
 defined('BASEPATH') OR exit('No direct script access allowed');

class Diagnosa extends CI_Controller { 
	public function __construct() {
		parent :: __construct();
		$this->load->model('User_model', 'user');
		$this->load->model('Admin_model', 'admin');
		$this->load->model('Employee_model', 'employee');
    	$this->load->model('Patient_model', 'patient');
    }

	public function index() {
		$data['title'] = 'Diagnosa';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        if(!empty ($this->input->get('label'))) {
            $start_date = date("Y-m-01", strtotime($this->input->get('label')));
            $end_date = date("Y-m-t", strtotime($this->input->get('label')));
        }else{
            $start_date = date('Y-m-01');
            $end_date = date("Y-m-t");
        }
        if ($this->session->userdata('role_id') == '3') {
        	$data['diagnosa'] = $this->patient->select_all_by_reference($start_date, $end_date);
        }else{
        	$data['diagnosa'] = $this->patient->select_all_by_date($start_date, $end_date);
        }
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('diagnosa/index', $data);
		$this->load->view('templates/footer');
	}

	public function editpat($patient_id)
    {
        $data['title'] = 'Edit Data';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['patient'] = $this->patient->get_by_id($patient_id);

		$this->form_validation->set_rules('diagnosis', 'Diagnosis', 'required');
        $this->form_validation->set_rules('drugs', 'Drugs', 'required');
        if ($this->session->userdata('email') == 1) {
            $this->form_validation->set_rules('conclusion', 'Conclusion', 'required');

        }elseif ($this->session->userdata('email') == 3) {
    		$this->form_validation->set_rules('conclusion', 'Conclusion', 'required');
        }

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('diagnosa/edit-diagnosa', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $patient_name = $this->input->post('title');
        if ($this->session->userdata('role_id') == 1) {
            $data_pat = [
                'diagnosis' => $this->input->post('diagnosis'),
                'drugs' => $this->input->post('drugs'),
                'conclusion' => $this->input->post('conclusion')
            ];
        }elseif ($this->session->userdata('role_id') == 3) {
            $data_pat = [
                'diagnosis' => $this->input->post('diagnosis'),
                'drugs' => $this->input->post('drugs'),
                'conclusion_from_dokter' => $this->input->post('conclusion_from_dokter')  
            ]; 
        }
            $this->db->set($data_pat);
            $this->db->where('id', $patient_id);
            $this->db->update('patient');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Edit Patient Data Success!</div>');
            redirect('diagnosa');
        }
    }

    public function detailpat($patient_id) {
        $get_data = $this->patient->get_by_id($patient_id);
        $data['title'] = 'Detail Patient';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['patient'] = $get_data;
        $data['employee'] = $this->employee->get_data_by_id($get_data['employee_id']);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('diagnosa/detail-diagnosa', $data);
        $this->load->view('templates/footer');
    }
}
