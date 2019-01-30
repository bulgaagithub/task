<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SignIn extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct() {
		parent::__construct();
        $this->load->helper('url');
        $this->load->model('admin_model');
		$this->load->library('bcrypt');
		$this->load->helper('form');
    	$this->load->library('form_validation');
    	$this->load->library('session');
	}
	public function index()
	{
		$this->load->view('admin/login');
	}

	public function signin() {
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() === FALSE)
		{
		    redirect('/');
		}
		else
		{
			$username = $this->input->post('username');
			$password = $this->input->post('password');
		    $this->admin_model->signin($username,$password);
		}
	}

	public function register() {
		$this->load->view('dashboard/register');
	}

	public function save() {
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');

		if ($this->form_validation->run() === FALSE)
		{
		    redirect('signin/register');
		}
		else
		{
			$username 	= $this->input->post('username');
			$password 	= $this->bcrypt->hash_password($this->input->post('password'));
			$email 		= $this->input->post('email');
		    $this->admin_model->save($username,$email,$password);
		    redirect('/');
		}
	}

	public function signout() {
		// Removing session data
		$sess_array = array(
		'username' => ''
		);
		$this->session->unset_userdata('signin', $sess_array);
		$data['message_display'] = 'Successfully Logout';
		redirect('/signin');
	}

}
