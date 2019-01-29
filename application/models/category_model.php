<?php
class Category_model extends CI_Model {

    public function __construct()
    {
         $this->load->database();
    }

    public function get_category($status = NULL) {

    	if ($status === NULL)
        {
            $query = $this->db->get('category');
           	return $query->result_array();
        }

        $query = $this->db->get_where('category', array('status' => $status));
        return $query->result_array();
    }    
}