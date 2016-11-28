<?php 

class Model_membres extends CI_Model {

        public function __construct(){
                parent::__construct();
        }

        public function insert_membre($membre){
                $this->db->insert('membres', $membre);
        }
}