<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class keluhan extends CI_Controller { 
	public function __construct() {
		parent :: __construct();
		is_logged_in();
		$this->load->model('User_model', 'user');
		$this->load->model('Admin_model', 'admin');
		$this->load->model('Employee_model', 'employee');
    	$this->load->model('Patient_model', 'patient');
	}

	public function index() {
    	$data['title'] = 'Data Keluhan';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['employees'] = $this->employee->select_all();
        $start_date = $this->input->get('start_date', TRUE);
        $end_date = $this->input->get('end_date', TRUE);
        if ($start_date == '' && $end_date == '') {
            $data['patients'] = $this->patient->select_all();     
        }else{
		  $data['patients'] = $this->patient->select_all_by_date($start_date, $end_date);
        }
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('keluhan/index', $data);
		$this->load->view('templates/footer');
	}

	public function add_data() {
		$data['title'] = 'Add Data';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->form_validation->set_rules('check_in', 'Check in', 'required');
		$this->form_validation->set_rules('check_out', 'Check out', 'required');
		$this->form_validation->set_rules('employee_id', 'Employee', 'required');
		$this->form_validation->set_rules('keluhan', 'Keluhan', 'required');
		// $this->form_validation->set_rules('drugs', 'Drugs', 'required');
		// $this->form_validation->set_rules('conclusion', 'Conclusion', 'required');
		if ($this->form_validation->run() == FALSE) {
			// $data['subMenu'] = $this->menu->getSubMenu();
			// $data['menu'] = $this->db->get('user_menu')->result_array();
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Error</div>');
			redirect('keluhan');
	
		}else{
			$data = [
				'check_in' => $this->input->post('check_in'),
				'check_out' => $this->input->post('check_out'),
				'employee_id' => $this->input->post('employee_id'),
				'keluhan' => $this->input->post('keluhan')
			];
			$this->patient->insert($data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New data added!</div>');
			redirect('keluhan');
		}
	}

	public function get_employee() {
		$nik = $this->input->post('nik');
		$data = $this->employee->get_data_by_nik($nik);
		echo json_encode($data);
	}

	public function editpat($patient_id)
    {
        $data['title'] = 'Approval Keluhan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['patient'] = $this->patient->get_by_id($patient_id);

        $this->form_validation->set_rules('check_in', 'Check in', 'required');
		$this->form_validation->set_rules('check_out', 'Check out', 'required');
        $this->form_validation->set_rules('jenis_sakit', 'Jenis sakit', 'required');
		$this->form_validation->set_rules('diagnosis', 'Diagnosis', 'required');
		$this->form_validation->set_rules('drugs', 'Drugs', 'required');
		$this->form_validation->set_rules('conclusion', 'Conclusion', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('keluhan/editpat', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $patient_name = $this->input->post('title');
            $data_pat = [
                'check_in' => $this->input->post('check_in'),
                'check_out' => $this->input->post('check_out'),
                'jenis_sakit' => $this->input->post('jenis_sakit'),
                'diagnosis' => $this->input->post('diagnosis'),
                'drugs' => $this->input->post('drugs'),
                'conclusion' => $this->input->post('conclusion')

            ];
            $this->db->set($data_pat);
            $this->db->where('id', $patient_id);
            $this->db->update('patient');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Edit Patient Data Success!</div>');
            redirect('keluhan');
        }
    }
    public function deletepat($patient_id)
    {
        $patientt = $this->patient->get_by_id($patient_id);

        $this->db->delete('patient', ['id' => $patient_id]);
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Patient data is deleted!</div>');
        redirect('keluhan');
    }

    public function detailpat($patient_id) {
        $get_data = $this->patient->get_by_id($patient_id);
        $data['title'] = 'Detail Patient';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['patient'] = $get_data;
        $data['employee'] = $this->employee->get_data_by_id($get_data['employee_id']);

        $this->form_validation->set_rules('check_in', 'Check in', 'required');
        $this->form_validation->set_rules('check_out', 'Check out', 'required');
        $this->form_validation->set_rules('diagnosis', 'Diagnosis', 'required');
        $this->form_validation->set_rules('drugs', 'Drugs', 'required');
        $this->form_validation->set_rules('conclusion', 'Conclusion', 'required');
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/detail-patient', $data);
        $this->load->view('templates/footer');
    }

}