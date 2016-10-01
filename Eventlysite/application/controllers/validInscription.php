<?php

class Validinscription extends CI_Controller {

        public function index()
        {
                $this->load->helper(array('form', 'url', 'date'));

                $this->load->library('form_validation');

                $this->load->model('membres_model');

                $this->form_validation->set_rules('nom', 'Nom', 'required');
                $this->form_validation->set_rules('prenom', 'Prénom', 'required');
                $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
                $this->form_validation->set_rules('password', 'Mot de passe', 'required');
                $this->form_validation->set_rules('passconf', 'Confirmation du mot de passe', 'required|matches[password]');

                // $this->form_validation->set_rules('organisme', 'Organisme');
                // $this->form_validation->set_rules('profession', 'Profession');
                // $this->form_validation->set_rules('telephone', 'Téléphone');

                if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('inscription');
                }
                else
                {
                        $membres = array(
                                'nom'          => $this->input->post('nom'),
                                'prenom'         => $this->input->post('prenom'),
                                'password'     => $this->input->post('password'),
                                'organisme'         => $this->input->post('organisme'),
                                'email'         => $this->input->post('email'),
                                'profession'         => $this->input->post('profession'),
                                'telephone'         => $this->input->post('telephone')
                        );

                        $this->membres_model->insert_membres($membres);

                        $this->load->view('inscription_reussie');
                }
        }
}