<?php

class Model_events extends CI_Model {

        public function __construct()
        {
                parent::__construct();
        }

        public function insert_event($event)
        {
                $sql =$this->db->insert('events', $event);
        }
}