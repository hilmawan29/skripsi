<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

 class landing extends CI_Controller { 
	public function __construct() {
		parent :: __construct();
		$this->load->model('Artikel_model', 'artikel');
		$this->load->model('Event_model', 'event');
	}
	public function index() {
		$data['title'] = 'Landing Page';
		$data['list_artikel'] = $this->artikel->select_all(3);
		$this->load->view('landing/index', $data);
	}
	public function artikel() {
    	$data['title'] = 'Artikel';
		$data['list_artikel'] = $this->artikel->select_all("all");
		$this->load->view('landing/landing-artikel', $data);
	}
	public function artikel_detail($artikel_id) {
    	$data['title'] = 'Artikel';
		$data['artikel'] = $this->artikel->get_data_by_id($artikel_id);
		$this->load->view('artikel/artikel_detail', $data);
	}
	public function event() {
    	$data['title'] = 'Event';
		$data['list_event'] = $this->event->select_all("all");
		$this->load->view('landing/landing-event', $data);
	}
	public function event_detail($event_id) {
    	$data['title'] = 'Event';
		$data['event'] = $this->event->get_data_by_id($event_id);
		$this->load->view('event/event_detail', $data);
	}
}
