<?php

class Model_membres extends CI_Model {


        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
        }


        public function insert_membre($membre)
        {

                // $this->db->set('membres', $membres);
                // $this->db->insert($this->membres);
                $sql =$this->db->insert('membres', $membre);
                // $query = $this->db->query($sql);

                // if ($query === TRUE) {
                //         return TRUE;
                // } else {
                //         $last_query = $this->db->last_query();
                //         return $last_query;
                // }
        }
}