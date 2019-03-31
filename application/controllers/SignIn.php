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
	 	// Load the captcha helper
        $this->load->helper('captcha');
	}
	public function index()
	{

        // Captcha configuration
        $config = array(
            'img_path'      => 'captcha_images/',
            'img_url'       => base_url().'captcha_images/',
            'font_path'     => 'system/fonts/texb.ttf',
            'img_width'     => '160',
            'img_height'    => 50,
            'word_length'   => 4,
            'font_size'     => 18,
            'pool'			=> '0123456789'
        );
        $captcha = create_captcha($config);
        
        // Unset previous captcha and set new captcha word
        $this->session->unset_userdata('captchaCode');
        $this->session->set_userdata('captchaCode', $captcha['word']);
        
        // Pass captcha image to view
        $data['captchaImg'] = $captcha['image'];
        
        // Load the view
		$this->load->view('admin/login',$data);
	}

	public function refresh(){
        // Captcha configuration
        $config = array(
            'img_path'      => 'captcha_images/',
            'img_url'       => base_url().'captcha_images/',
            'font_path'     => 'system/fonts/texb.ttf',
            'img_width'     => '160',
            'img_height'    => 50,
            'word_length'   => 8,
            'font_size'     => 18
        );
        $captcha = create_captcha($config);
        
        // Unset previous captcha and set new captcha word
        $this->session->unset_userdata('captchaCode');
        $this->session->set_userdata('captchaCode',$captcha['word']);
        
        // Display captcha image
        echo $captcha['image'];
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
			// If captcha form is submitted
		    $inputCaptcha = $this->input->post('captcha');
		    $sessCaptcha = $this->session->userdata('captchaCode');
		    if($inputCaptcha === $sessCaptcha){
		    	$username = $this->input->post('username');
				$password = $this->input->post('password');
			    $this->admin_model->signin($username,$password);
		    }
		    else
		    {
		    	$this->session->set_flashdata('captcha_error_msg', ' Баталгаажуулах код тохирохгүй байна !!!');
		    	redirect('signin');
		    }
			
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
		'id'		=>'',
		'username' 	=> ''
		);
		$this->session->unset_userdata('signin', $sess_array);
		$data['message_display'] = 'Success logout.';
		redirect('/signin');
	}

}
