<?php
class CLV_model extends CI_Model {

    public function __construct()
    {
         $this->load->database();
    }

    public function get_category($status = 'Mathematic') {

    	if ($status === NULL)
        {
            $query = $this->db->get('category');
           	return $query->result_array();
        }

        $query = $this->db->get_where('category', array('task_type' => $status));
        return $query->result_array();
    }

    public function get_level($id) {

        if (isset($id)) {
            $query = $this->db->get_where('level', array('category_id' => $id));
            return $query->result_array();
        } else {
            $query = $this->db->get_where('level', array('category_id' => NULL));
            return $query->result_array();
        }
    }

    public function get_variant() {
        $query = $this->db->get('variant');
        return $query->result_array();
    }

    public function set_variant(){

        $sql = "INSERT INTO variant(name) VALUES(".$this->db->escape($this->input->post('variant')).")";
        if ($this->db->simple_query($sql)) {
            return true;
        } else {
            $error = $this->db->error();
            if ($error['code'] == 1062) {
                $this->session->set_flashdata('error', 'Энэ вариант бүртгэгдсэн байна');
                redirect('variant/new');
            }
        }
        // echo $error;
    }    

    // Task Insert, Update, Delete, Select 

    public function set_task($data = array()) {
        $insert = $this->db->insert('task',$data);
        return $insert?true:false;
    }

    public function get_last_task() {
        $sql = "SELECT id FROM task ORDER BY id DESC LIMIT 1";
        $query = $this->db->query($sql);

        $row = $query->row();

        if (isset($row))
        {
            return $row->id;
        }
    }

    public function set_images($data = array()) {
        $insert = $this->db->insert_batch('task_images',$data);
        return $insert?true:false;
    }

    public function set_response($data = array(), $id) 
    {
        $count = count($data,COUNT_RECURSIVE);
        for ($i = 0; $i < $count; $i++) { 
            $sql = "INSERT INTO response(response,task_id) VALUES('".$data[$i]."',".$id.")";
            $this->db->query($sql);
        }
    }
}