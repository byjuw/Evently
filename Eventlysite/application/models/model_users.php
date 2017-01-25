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

    public function remember_me($id, $random_string)
    {
        $this->db->where('id', $id);
        $data = [
            'remember' => $random_string
        ];
        $this->db->update('users', $data);
    }    

    public function no_remember_me($id)
    {
        $this->db->where('id', $id);
        $data = [
            'remember' => 0
        ];
        $this->db->update('users', $data);   
    }

    public function load_remember($string){
        $this->db->where('remember', $string);
        $query = $this->db->get('users');

        foreach ($query->result() as $row) {
            $id = $row->id;
            $email = $row->email;
        }
        $data = [
            'id' => $id,
            'email' => $email
        ];
        return $data;
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