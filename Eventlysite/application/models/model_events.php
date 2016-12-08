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
        $this->db->join('events', 'users_events.id_event = events.id');
        
        $query = $this->db->get_where('users_events', array('id_user' => $_SESSION['id']));

        $events = [];
        foreach ($query->result() as $row)
        {
            $event['nom'] = $row->nom;
            $event['date_heure'] = $row->date_heure;
        	$event['description'] = $row->description;
            $events[] = $event;
        }
    	return $events;
    }
}