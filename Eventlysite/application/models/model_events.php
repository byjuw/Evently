<?php

class Model_events extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function insert_event($event)
    {
        $this->db->insert('events', $event);
        $query = $this->db->get('events', 'id');

        foreach ($query->result() as $row)
        {
            $id = $row->id;
        }

        $user_event = [
            'id_user'   => $_SESSION['id'],
            'id_event'  => $id
        ];
        $this->db->insert('users_events', $user_event);
    }

    public function load_event()
    {
        $this->db->join('events', 'users_events.id_event = events.id');
        
        $query = $this->db->get_where('users_events', array('id_user' => $_SESSION['id']));

        $events = [];
        foreach ($query->result() as $row)
        {
            $event['nom'] = $row->nom;
            $event['date'] = $row->date;
            $event['heure'] = $row->heure;
        	$event['description'] = $row->description;
            $events[] = $event;
        }
    	return $events;
    }
}