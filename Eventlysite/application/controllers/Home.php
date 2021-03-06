<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
  		$this->load->library('form_validation');
  		$this->load->helper('form');
		$this->load->model(array('model_events', 'model_users'));

		if(isset($_SESSION['id'])) {
			$event = $this->model_events->load_event();
			
			$data = [
				"event" => $event
			];

			$this->load->view('home', $data);
		}
		else if(get_cookie('remember')){
			$string = get_cookie('remember');
			$user = $this->model_users->load_remember($string);
			$session = [
				'logged_in' => true,
				'email'		=> $user['email'],
				'id'		=> $user['id']
			];

			$this->session->set_userdata((array) $session);


			$event = $this->model_events->load_event();
			
			$data = [
				"event" => $event
			];

			$this->load->view('home', $data);

		}
		else {
			$this->load->view('login');
		}
	}

	public function ajax(){
		$this->load->model('model_events');

		$events = $this->model_events->load_event();
		$var = "";
		foreach($events as $result) {
			$var .= $result['nom'].";";
			$var .= $result['date'].";";
			$var .= $result['heure'].";";
			$var .= $result['description']."|";
		}
		$var = rtrim($var, "|");
		echo $var;
	}
}