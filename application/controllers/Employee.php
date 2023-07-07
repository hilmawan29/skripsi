<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class employee extends CI_Controller { 
	public function __construct() {
		parent :: __construct();
		is_logged_in();
		$this->load->model('User_model', 'user');
		$this->load->model('Admin_model', 'admin');
		$this->load->model('Employee_model', 'employee');
    	$this->load->model('Patient_model', 'patient');
	}

	public function index() {
        $data['title'] = 'Add Employee';
        $data['user'] = $this->user->getUserData();
        $data['employee'] = $this->employee->select_all();
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('department', 'Department', 'required');
        $this->form_validation->set_rules('age', 'Age', 'required');
        $this->form_validation->set_rules('nik', 'Nik', 'required|is_unique[employee.nik]');
       
        if ($this->form_validation->run() == false) {

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('employee/index', $data);
            $this->load->view('templates/footer', $data);
        } else {
        $config['upload_path']          = './upload/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['max_size']             = 10000;
        $config['max_width']            = 10024;
        $config['max_height']           = 10024;
        $this->load->library('upload', $config);
        // die(var_dump($_FILES['foto']));
        if (!$this->upload->do_upload('foto') && !empty($_FILES['foto']['name'])) {
            // die($this->upload->display_errors());
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">' .$this->upload->display_errors().'</div>');
            redirect('employee');
        } else {
            $uploaded_data = $this->upload->data();
            $name = $this->input->post('name'); 
            $foto = $uploaded_data['file_name'];
            $department = $this->input->post('department');
            $age = $this->input->post('age');
            $nik = $this->input->post('nik');            
            $data = [
                'foto' => $foto,
                'name' => $name,
                'department' => $department,
                'age' => $age,
                'nik' => $nik
            ];
            $this->db->insert('employee', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New Data Added!</div>');
            redirect('employee');
        }
    }
    }

    public function editemployee($employee_id)
    {
        $get_data = $this->employee->EditEmployee($employee_id);
        $data['title'] = 'Edit Employee';
        $data['user'] = $this->user->getUserData();
        $data['employee'] = $get_data;

        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('department', 'Department', 'required');
        $this->form_validation->set_rules('age', 'Age', 'required');
        $this->form_validation->set_rules('nik', 'Nik', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('employee/edit-employee', $data);
            $this->load->view('templates/footer');
        } else {
            $config['upload_path']          = './upload/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['max_size']             = 10000;
            $config['max_width']            = 10024;
            $config['max_height']           = 10050;
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('foto') && $_FILES['foto']['name'] != '') {
            // die($this->upload->display_errors());
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">' .$this->upload->display_errors().'</div>');
            redirect('employee');
        } else {
            $uploaded_data = $this->upload->data();
            $employee_name = $this->input->post('title');
            $name = $this->input->post('name');
            if($_FILES['foto']['name'] != ''){
                $foto = $uploaded_data['file_name'];                
            }else{
                $foto = $get_data['foto'];
            }
            $department = $this->input->post('department');
            $age = $this->input->post('age');
            $nik = $this->input->post('nik');            
            $data = [
                'foto' => $foto,
                'name' => $name,
                'department' => $department,
                'age' => $age,
                'nik' => $nik
            ];
            $this->db->set($data);
            $this->db->where('id', $employee_id);
            $this->db->update('employee');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Edit Employee Data Success!</div>');
            redirect('admin/add_employee');
        }
        }
    }

    public function deleteEmployee($employee_id) {
        $employee = $this->employee->EditEmployee($employee_id);

        $this->db->delete('employee', ['id' => $employee_id]);
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Employee data is deleted!</div>');
        redirect('admin/add_employee');
    }
}
