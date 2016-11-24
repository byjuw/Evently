<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Accueil extends CI_Controller {

	public function index()
	{
  		$this->load->library('form_validation');
  		$this->load->helper('form');
		$this->load->view('accueil');
	}
}