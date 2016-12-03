<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
  		$this->load->library('form_validation');
  		$this->load->helper('form');
		$this->load->view('home');
	}
}