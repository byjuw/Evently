<?php 

class Model_users extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function insert_user($user)
    {
		$this->db->insert('users', $user);
    }    

    public function get_userID($email)
    {
            $this->db->where('email', $email);
            $query = $this->db->get('users');

            foreach ($query->result() as $row)
            {
            	$id = $row->id;
            }
        return $id;
    }
}