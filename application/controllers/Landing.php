<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

 class landing extends CI_Controller { 
	public function __construct() {
		parent :: __construct();
		$this->load->model('Artikel_model', 'artikel');
	}
	public function index() {
		$data['title'] = 'Landing Page';
		$data['list_artikel'] = $this->artikel->select_all(5);
		$this->load->view('landing/index', $data);
}
}
