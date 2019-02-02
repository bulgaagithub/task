<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Math extends CI_Controller {

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
    }

	public function index()
	{
		$this->load->view('math/task');
		// $this->load->helper('url');
		// if (isset($this->session->userdata['login'])) {
		// 	$this->load->view('template/dashboard');
		// } else {
		// 	$this->load->view('template/index');
		// }
	}

	public function task() {
		$this->load->view('math/task_list');
	}

	public function new_task($id = NULL) {

		$data['category'] = $this->clv_model->get_category();
		$data['level'] = $this->clv_model->get_level($id);
		$data['variant'] = $this->clv_model->get_variant();

		if (empty($data['category']))
        {
                show_404();
        }

		// $this->load->view('math/new_task',$data);
		$this->load->view('math/task_new',$data);
	}

	public function save_task() {

		$data['level_id'] = $this->input->post('level');
		$data['variant_id'] = $this->input->post('variant');

		$data['task'] = $this->input->post('task');

		$data['type'] = 'Mathematic';
		$task = $this->clv_model->set_task($data);

		if($task) {
			$id = $this->clv_model->get_last_task();
			if(!empty($_FILES['files']['name'])) {
				$filesCount = count($_FILES['files']['name']);
				for ($i=0; $i < $filesCount; $i++) { 
					$_FILES['file']['name'] = $_FILES['files']['name'][$i];
					$_FILES['file']['type'] = $_FILES['files']['type'][$i];
					$_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
					$_FILES['file']['error'] = $_FILES['files']['error'][$i];
					$_FILES['file']['size'] = $_FILES['files']['size'][$i];

					$config['upload_path']          = 'uploads';
	                $config['allowed_types']        = 'gif|jpg|png';

	                $this->load->library('upload', $config);
	                $this->upload->initialize($config);

	                // Upload file to server
	                if (!$this->upload->do_upload('file'))
	                {
	                    $error = array('error' => $this->upload->display_errors());
	                }
	                else
	                {
                        $data2 = $this->upload->data();

                        $imageData[$i]['image_name'] =  $data2['file_name'];
                        $imageData[$i]['task_id'] = $id;
	                }
				}
				if(!empty($imageData)){
	                
	                // Insert files data into the database
	                $images = $this->clv_model->set_images($imageData);

	                // Upload status message
	                $statusMsg = $images?'Files uploaded successfully.':'Some problem occurred, please try again.';
	                $this->session->set_flashdata('statusMsg',$statusMsg);
            	}
			} 
			$data3 = $this->input->post('answers');
			$response = $this->clv_model->set_response($data3,$id);
			redirect('/math');
		} else {
			echo 'Aldaa';
		}
	}

	public function get_level() 
	{
  		$id = $this->input->post('id');
	  	// get data
	  	$data = $this->clv_model->get_level($id);

	  	echo json_encode($data);
	}

	public function physic() {
		echo "Hello";
	}

	public function chemistry() {
		echo "Hello";
	}	
}
