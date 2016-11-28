<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inscription extends CI_Controller {

	public function index (){

		$this->load->helper('form');
		$this->load->view('inscription');
	}

	public function create()
	{
		$this->load->helper('security');

		$this->load->library('form_validation');

		$this->load->model('model_membres');

		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[membres.email]', array('is_unique' => 'Adresse email déjà utilisée'));
		$this->form_validation->set_rules('password', 'Mot de passe', 'required');
		$this->form_validation->set_rules('passconf', 'Confirmation du mot de passe', 'required|matches[password]');


		$membre = [
		"nom" => $this->input->post('nom'),
		"prenom" => $this->input->post('prenom'),
		"email" => $this->input->post('email'),
		"password" => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
		"organisme" => $this->input->post('organisme'),
		"profession" => $this->input->post('profession'),
		"telephone" => $this->input->post('telephone')
		];


		if ($this->form_validation->run() == FALSE)
		{
		    $this->load->view('inscription');
		}
		else
		{
			$this->model_membres->insert_membre($membre);

			$this->load->view('inscription_reussie');
		}
	}
}