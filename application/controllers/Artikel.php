<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class artikel extends CI_Controller { 
	public function __construct() {
		parent :: __construct();
		is_logged_in();
		$this->load->model('User_model', 'user');
		$this->load->model('Admin_model', 'admin');
		$this->load->model('Artikel_model', 'artikel');
    }

	public function index() {
    	$data['title'] = 'Artikel';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['artikel'] = $this->artikel->select_all("all");
  		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('artikel/index', $data);
		$this->load->view('templates/footer');
	}

	public function add_data() {
		$data['title'] = 'Add Data';
		$this->form_validation->set_rules('judul', 'Judul', 'required');
		$this->form_validation->set_rules('deskripsi', 'Deskrisi', 'required');
		$this->form_validation->set_rules('sumber', 'Sumber', 'required');
		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">'.validation_errors().'</div>');
			redirect('artikel');
		}else{
			$config['upload_path']          = 'assets/image/home/';
	        $config['allowed_types']        = 'gif|jpg|png';
	        $config['max_size']             = 10000;
	        $config['max_width']            = 1024;
	        $config['max_height']           = 768;

	        $this->load->library('upload', $config);
	        if ( ! $this->upload->do_upload('foto')){
	        	$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">'. $this->upload->display_errors().'</div>');
				redirect('artikel');
			}else{
				$data_foto = $this->upload->data();
				$data = [
					'judul' => $this->input->post('judul'),
					'deskripsi' => $this->input->post('deskripsi'),
					'sumber' => $this->input->post('sumber'),
					'gambar' => "home/".$data_foto['file_name']
				];
				$this->artikel->create($data);
				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New data added!</div>');
				redirect('artikel');
			}
		}
	}

	public function edit_artikel($artikel_id)
    {
        $data['title'] = 'Approval Artikel';
        $data['artikel'] = $this->artikel->get_data_by_id($artikel_id);
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('judul', 'Judul', 'required');
		$this->form_validation->set_rules('deskripsi', 'Deskrisi', 'required');
        $this->form_validation->set_rules('sumber', 'Jenis sakit', 'required');
       if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('artikel/edit_artikel', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $config['upload_path']          = 'assets/image/home/';
	        $config['allowed_types']        = 'gif|jpg|png';
	        $config['max_size']             = 10000;
	        $config['max_width']            = 1024;
	        $config['max_height']           = 768;

	        $this->load->library('upload', $config);
	        if ( ! $this->upload->do_upload('foto') && !empty($_FILES["foto"]["name"])){
	        	$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">'. $this->upload->display_errors().'</div>');
				redirect("artikel/edit_artikel/$artikel_id");
			}else{
				$data_foto = $this->upload->data();
				if($data_foto["file_name"] == ""){
					$data_isian = [
							'judul' => $this->input->post('judul'),
							'deskripsi' => $this->input->post('deskripsi'),
							'sumber' => $this->input->post('sumber')
						];
				}else{
					$data_isian = [
						'judul' => $this->input->post('judul'),
						'deskripsi' => $this->input->post('deskripsi'),
						'sumber' => $this->input->post('sumber'),
						'gambar' => "home/".$data_foto['file_name']
					];
				}
	            $this->db->set($data_isian);
	            $this->db->where('id', $artikel_id);
	            $this->db->update('artikel');
	            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Edit Artikel Success!</div>');
	            redirect('artikel');
        	}
    	}
	}
    public function delete_artikel($artikel_id)
    {
        $artikel = $this->artikel->get_data_by_id($artikel_id);

        $this->db->delete('artikel', ['id' => $artikel_id]);
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Artikel is deleted!</div>');
        redirect('artikel');
    }
}