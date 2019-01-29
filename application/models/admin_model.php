<?php
class admin_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
        $this->load->helper('url');
        $this->load->library('session');
    }

   public function signin($username,$password) {
        $this->db->select();
        $this->db->where('username', $username);

        $query = $this->db->get('fos_user');

        if($query->num_rows() > 0) {
            $result = $query->row();

            if($this->bcrypt->check_password($password,$result->password)) {
                $session_data = array(
                    'id'  => $result->id,
                    'username'  => $result->username
                );
                // Add user data in session
                $this->session->set_userdata('signin', $session_data);
                return redirect(base_url('admin'));
            } else {
                return redirect(base_url());
            }
        } else {
            return redirect(base_url());
        }
   }

   public function save($username,$email,$password) {
        $data = array(
            'username'              => $username,
            'password'              => $password,
            'email'                 => $email 
        );
        // print_r($data);
        return $this->db->insert('fos_user', $data);
    }
}