<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Variant extends CI_Controller {

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
        $this->load->model('clv_model');
        $this->load->helper('url_helper');
        $this->load->helper('url');
        $this->load->library('session');
    }

	public function index()
	{
		// $this->load->helper('url');
		// if (isset($this->session->userdata['login'])) {
		// 	$this->load->view('template/dashboard');
		// } else {
		// 	$this->load->view('template/index');
		// }
		$data['variant'] = $this->clv_model->get_variant();

		if (empty($data['variant']))
        {
                show_404();
        }

		$this->load->view('variant/variant',$data);
	}

	public function new() {
		$this->load->view('variant/new');
	}

	public function save() {

		$this->load->helper('form');
    	$this->load->library('form_validation');

    	$this->form_validation->set_rules('variant', 'Variant', 'required');

	    if ($this->form_validation->run() === FALSE)
	    {
	    	$this->load->view('variant/new');
	    }
	    else
	    {
	        $bquery = $this->clv_model->set_variant();
	        if ($bquery) {
	        	redirect('variant/variant');
	        } else {

	        }
	        // $this->load->view('news/success');
	    }
	}

	public function chemistry() {
		echo "Hello";
	}
	
}
