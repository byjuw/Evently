<?php

class Inscription extends CI_Controller {

        public function index()
        {
                $this->load->helper(array('form', 'url'));

                $this->load->library('form_validation');

                $this->form_validation->set_rules('name', 'Nom', 'required');
                $this->form_validation->set_rules('prenom', 'Prénom', 'required');
                $this->form_validation->set_rules('email', 'Email', 'required');
                $this->form_validation->set_rules('password', 'Mot de passe', 'required');
                $this->form_validation->set_rules('passconf', 'Confirmation du mot de passe', 'required|matches[password]');

                $this->form_validation->set_rules('organisme', 'Organisme');
                $this->form_validation->set_rules('profession', 'Profession');
                $this->form_validation->set_rules('numtel', 'Téléphone');

                if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('inscription');
                }
                else
                {
                        $this->load->view('inscription_reussie');
                }
        }
}