<?php

class Validinscription extends CI_Controller {

        public function index()
        {
                $this->load->helper(array('form', 'url'));

                $this->load->library('form_validation');

                $this->load->model('model_membres');

                // $this->form_validation->set_rules('nom', 'Nom', 'required|xss_clean');
                // $this->form_validation->set_rules('prenom', 'Prénom', 'required|xss_clean');
                // $this->form_validation->set_rules('email', 'Email', 'required|valid_email|xss_clean');
                // $this->form_validation->set_rules('password', 'Mot de passe', 'required|xss_clean');
                // $this->form_validation->set_rules('passconf', 'Confirmation du mot de passe', 'required|matches[password]|xss_clean');

                // $this->form_validation->set_rules('organisme', 'Organisme');
                // $this->form_validation->set_rules('profession', 'Profession');
                // $this->form_validation->set_rules('telephone', 'Téléphone');

                // if ($this->form_validation->run() == FALSE)
                // {
                //         $this->load->view('inscription');
                // }
                // else
                // {
                        $membres = $this->input->post();

                        $this->model_membres->insert_membres($membres);
                        // $insert_membres = $this->model_membres->insert_membres($membres);

                        $this->load->view('inscription_reussie');
                }
        }
// }