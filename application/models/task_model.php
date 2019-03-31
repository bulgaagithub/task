<?php
class task_model extends CI_Model {

    public function __construct()
    {
         $this->load->database();
    }

    public function get_category($status = FALSE) {

        if ($status === NULL)
        {
            $query = $this->db->get('category');
            return $query->result_array();
        }

        $query = $this->db->get_where('category', array('task_type' => $status));
        return $query->result_array();
    }

    public function set_category($data = array()) {
        return $this->db->insert('category',$data);
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

    // Task Insert, Update, Delete, Select 

     public function get_task($type = FALSE) {

        if ($type === NULL)
        {
            $query = $this->db->get('task');
            return $query->result_array();
        }

        $query = $this->db->get_where('task', array('type' => $type));
        return $query->result_array();
    }

    public function set_task($data = array()) {
        $insert = $this->db->insert('task',$data);
        return $insert?true:false;
    }

    public function get_last_task($type = FALSE) {
        $sql = "SELECT id FROM task WHERE type = '$type' ORDER BY id DESC LIMIT 1";
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
            if($i == 0) {
                $sql = "INSERT INTO response(response,task_id,status) VALUES('".$data[$i]."',".$id.",1)";
                $this->db->query($sql);  
            } else {
                $sql = "INSERT INTO response(response,task_id,status) VALUES('".$data[$i]."',".$id.",0)";
                $this->db->query($sql);  
            }
        }
    }
}