<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
  		$this->load->library('form_validation');
  		$this->load->helper('form');
		$this->load->model('model_events');

		if(isset($_SESSION['id'])) {
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

		$event = $this->model_events->load_event();
		echo $event;

	}
}