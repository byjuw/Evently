<?php

class Model_events extends CI_Model {

        public function __construct()
        {
            parent::__construct();
        }

        public function insert_event($event)
        {
            $sql = $this->db->insert('events', $event);
        }

        public function load_event()
        {
        	$this->db->where('id_user', $_SESSION['id']);
            $query = $this->db->get('users_events');

           	$id_events = 0;
            foreach ($query->result() as $row)
            {
            	$id_events = $row->id_event;
            }

            $this->db->where('id', $id_events);
            $query = $this->db->get('events');

            $event = 0;
            foreach ($query->result() as $row)
            {
            	$event = $row->nom;
            }
        	return $event;
        }
}