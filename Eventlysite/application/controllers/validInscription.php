<?php

class Validinscription extends CI_Controller {

        public function index()
        {
                $this->load->helper(array('form', 'url', 'date'));

                $this->load->library('form_validation');

                $this->load->model('model_membres');

                $this->form_validation->set_rules('nom', 'Nom', 'required');
                $this->form_validation->set_rules('prenom', 'Prénom', 'required');
                $this->form_validation->set_rules('mail', 'Email', 'required|valid_email');
                $this->form_validation->set_rules('password', 'Mot de passe', 'required');
                $this->form_validation->set_rules('passconf', 'Confirmation du mot de passe', 'required|matches[password]');

                $this->form_validation->set_rules('organisme', 'Organisme');
                $this->form_validation->set_rules('profession', 'Profession');
                $this->form_validation->set_rules('telephone', 'Téléphone');

                if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('inscription');
                }
                else
                {
                        $membre = array(
                                'nom'          => $this->input->post('nom'),
                                'prenom'         => $this->input->post('prenom'),
                                'password'     => $this->input->post('password'),
                                'organisme'         => $this->input->post('organisme'),
                                'mail'         => $this->input->post('mail'),
                                'profession'         => $this->input->post('profession'),
                                'telephone'         => $this->input->post('telephone')
                        );

                        $this->model_membres->insert_membre($membre);

                        $this->load->view('inscription_reussie');
                }
        }
}