<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->model('clv_model');
        $this->load->helper('url_helper');
        $this->load->helper('url');
        $this->load->library('session');
    }

	public function index()
	{
		if (isset($this->session->userdata['signin'])) {
			$this->load->view('dashboard/dashboard');
		} else {
			redirect('signin');
		}
	}

	public function insert() {
		$data[] = $this->input->post('answers');
		$count = count($data);
		if (is_null($this->input->post('answers'))) {
			echo "null data";
		} else {
			echo $count;
		}
		print_r($data);
	}

	public function login() {
		
	}
}
