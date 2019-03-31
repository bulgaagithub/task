<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Physics extends CI_Controller {

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
        $this->load->model('task_model');
        $this->load->helper('url_helper');
        $this->load->helper('url');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
    }

	public function index()
	{
		$data['tasks'] = $this->task_model->get_task('Physics');
		$this->load->view('physics/task_physics',$data);
		// $this->load->helper('url');
		// if (isset($this->session->userdata['login'])) {
		// 	$this->load->view('template/dashboard');
		// } else {
		// 	$this->load->view('template/index');
		// }
	}

	public function new_task($id = NULL) {

		$data['category'] = $this->task_model->get_category('Physics');
		$data['level'] = $this->task_model->get_level($id);
		if (empty($data['category']))
        {
                show_404();
        }

		// $this->load->view('math/new_task',$data);
		$this->load->view('physics/new_task',$data);
	}

	public function save_task() 
	{

        // $this->form_validation->set_rules('level', 'Level', 'required');
        // $this->form_validation->set_rules('category', 'Category', 'required',
        //         array('required' => 'You must provide a %s.')
        // );
        // $this->form_validation->set_rules('number', 'Number', 'required');
        // $this->form_validation->set_rules('sub_number', 'Sub_Number', 'required');
        // $this->form_validation->set_rules('task', 'Task', 'required');
        // $this->form_validation->set_rules('answers[]', 'Answers', 'required');

        // if ($this->form_validation->run() == FALSE)
        // {
        //     redirect('physics/new_task');
        // }
        // else
        // {
            $data['level_id'] = $this->input->post('level');
			$data['category_id'] = $this->input->post('category');
			$data['number'] = $this->input->post('number');
			$data['sub_number'] = $this->input->post('sub_number');

			$data['task'] = $this->input->post('task');

			$data['type'] = 'Physics';
			$task = $this->task_model->set_task($data);

			if($task) {
				$id = $this->task_model->get_last_task('Physics');
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
		                $images = $this->task_model->set_images($imageData);

		                // Upload status message
		                $statusMsg = $images?'Files uploaded successfully.':'Some problem occurred, please try again.';
		                $this->session->set_flashdata('statusMsg',$statusMsg);
	            	}
				} 
				$data3 = $this->input->post('answers');
				$response = $this->task_model->set_response($data3,$id);
				redirect('/physics');
			} else {
				echo 'Aldaa';
			}
        // }
	}

	public function category() {
		$data['category'] = $this->task_model->get_category('Physics');
		$this->load->view('physics/category_physics',$data);
	}

	public function new_category() {
		$this->load->view('physics/category_new');
	}

	public function save_category() 
	{
		$this->form_validation->set_rules('category', 'category', 'required');
		if ($this->form_validation->run() == FALSE)
        {
              $this->load->view('physics/category_new');
        }
        else
        {
        	$data['name'] = $this->input->post('category');
        	$data['task_type'] = 'Physics';
        	$this->task_model->set_category($data);
        	redirect('physics/category');
        }
		
	}
}
