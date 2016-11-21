<?php

class Model_events extends CI_Model {


        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
        }


        public function insert_event($event)
        {
                $sql =$this->db->insert('evenements', $event);
                // $query = $this->db->query($sql);

                // if ($query === TRUE) {
                //         return TRUE;
                // } else {
                //         $last_query = $this->db->last_query();
                //         return $last_query;
                // }
        }
}