<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class event extends CI_Controller { 
	public function __construct() {
		parent :: __construct();
		is_logged_in();
		$this->load->model('User_model', 'user');
		$this->load->model('Admin_model', 'admin');
		$this->load->model('Event_model', 'event');
    }

	public function index() {
    	$data['title'] = 'Event';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['event'] = $this->event->select_all("all");
  		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('event/index', $data);
		$this->load->view('templates/footer');
	}

	public function add_data() {
		$data['title'] = 'Add Data';
		$this->form_validation->set_rules('judul', 'Judul', 'required');
		$this->form_validation->set_rules('deskripsi', 'Deskrisi', 'required');
		$this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
		$this->form_validation->set_rules('lokasi', 'Lokasi', 'required');
		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">'.validation_errors().'</div>');
			redirect('event');
		}else{
			$config['upload_path']          = 'assets/image/home/';
	        $config['allowed_types']        = 'gif|jpg|png|jpeg|JPG|PNG';
	        $config['max_size']             = 10000;
	        $config['max_width']            = 10024;
	        $config['max_height']           = 10024;

	        $this->load->library('upload', $config);
	        if ( ! $this->upload->do_upload('foto')){
	        	$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">'. $this->upload->display_errors().'</div>');
				redirect('event');
			}else{
				$data_foto = $this->upload->data();
				$data = [
					'judul' => $this->input->post('judul'),
					'deskripsi' => $this->input->post('deskripsi'),
					'tanggal' => $this->input->post('tanggal'),
					'lokasi' => $this->input->post('lokasi'),
					'gambar' => "home/".$data_foto['file_name']
				];
				$this->event->create($data);
				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New data added!</div>');
				redirect('event');
			}
		}
	}

	public function edit_event($event_id)
    {
        $data['title'] = 'Approval Event';
        $data['event'] = $this->event->get_data_by_id($event_id);
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('judul', 'Judul', 'required');
		$this->form_validation->set_rules('deskripsi', 'Deskrisi', 'required');
        $this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
        $this->form_validation->set_rules('lokasi', 'Lokasi', 'required');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('event/edit_event', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $config['upload_path']          = 'assets/image/home/';
	        $config['allowed_types']        = 'gif|jpg|png|jpeg|JPG|PNG';
			$config['max_size']             = 10000;
	        $config['max_width']            = 10024;
	        $config['max_height']           = 10024;

	        $this->load->library('upload', $config);
	        if ( ! $this->upload->do_upload('foto') && !empty($_FILES["foto"]["name"])){
	        	$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">'. $this->upload->display_errors().'</div>');
				redirect("event/edit_event/$event_id");
			}else{
				$data_foto = $this->upload->data();
				if($data_foto["file_name"] == ""){
					$data_isian = [
							'judul' => $this->input->post('judul'),
							'deskripsi' => $this->input->post('deskripsi'),
							'tanggal' => $this->input->post('tanggal'),
							'lokasi' => $this->input->post('lokasi')
						];
				}else{
					$data_isian = [
						'judul' => $this->input->post('judul'),
						'deskripsi' => $this->input->post('deskripsi'),
						'tanggal' => $this->input->post('tanggal'),
						'lokasi' => $this->input->post('lokasi'),
						'gambar' => "home/".$data_foto['file_name']
					];
				}
	            $this->db->set($data_isian);
	            $this->db->where('id', $event_id);
	            $this->db->update('event');
	            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Edit Event Success!</div>');
	            redirect('event');
        	}
    	}
	}
    public function delete_event($event_id)
    {
        $event = $this->event->get_data_by_id($event_id);

        $this->db->delete('event', ['id' => $event_id]);
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Event is deleted!</div>');
        redirect('event');
    }
}