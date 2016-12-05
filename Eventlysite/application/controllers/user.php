<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function login()
	{
		$this->load->helper(array('security', 'form'));
		$this->load->model('model_users');
		
		$data = [
			"errors" => []
		];

		$email = $this->input->post('email');
		$password = $this->input->post('password');
		

		if($email != null && $password != null){

			$this->db->where('email', $email);
			$query = $this->db->get('users');
			$user = $query->result();
			$id = $this->model_users->get_userID($email);

			if(count($user) < 1){
				//Indiquer une erreur d'adresse email inexistante
				$data['errors'] = [
					"login_error1" => "Adresse email non-valide. Veuillez vous inscrire."
				];
				$this->template->load('login', $data);
				return;
			}

			if(!password_verify($password, $user[0]->password)){

				//Indiquer une erreur de mot de passe
				$data['errors'] = [
					"login_error2" => "Mot de passe erroné."
				];
				$this->template->load('login', $data);
				return;
			}


			$session = [
				'logged_in' => true,
				'email'		=> $email,
				'id'		=> $id
			];



			$this->session->set_userdata((array) $session);
			redirect('/');
			return;

		}
		if ($this->session->userdata('logged_in')) {
			redirect('/');
		}
		else {
			$this->load->view('login');
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('/');
	}

	public function inscription()
	{
		if ($this->session->userdata('logged_in')) {
			redirect('/');
		}
		else {
			$this->load->helper('form');
			$this->load->view('inscription');
		}
	}

	public function create()
	{
		$this->load->helper('security');

		$this->load->library('form_validation');

		$this->load->model('model_users');

		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]', array('is_unique' => 'Adresse email déjà utilisée'));
		$this->form_validation->set_rules('password', 'Mot de passe', 'required');
		$this->form_validation->set_rules('passconf', 'Confirmation du mot de passe', 'required|matches[password]');


		$user = [
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
			$this->model_users->insert_user($user);

			$this->load->view('inscription_reussie');
		}
	}
}