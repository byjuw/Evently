<?php

class Ajoutevent extends CI_Controller {

        public function index()
        {
                $this->load->helper(array('form', 'date'));

                $this->load->library('form_validation');

                $this->load->model('model_events');

                $this->form_validation->set_rules('nom', 'Nom de l\'évènement', 'required');
                $this->form_validation->set_rules('lieu', 'Lieu de l\'évènement', 'required');
                $this->form_validation->set_rules('description', 'Description de l\'évènement', 'required');
                $this->form_validation->set_rules('heure', 'Heure de l\'évènement', 'required');
                $this->form_validation->set_rules('organisme', 'Organisme organisateur', 'required');
                $this->form_validation->set_rules('organisateurs', 'Organisateurs de l\'évènement', 'required');
                $this->form_validation->set_rules('confidentialite', 'Confidentialité de l\'évènement', 'required');

                if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('accueil');
                }
                else
                {
                        $event = array(
                                'nom'                   => $this->input->post('nom'),
                                'lieu'                  => $this->input->post('lieu'),
                                'description'           => $this->input->post('description'),
                                'date_heure'            => $this->input->post('heure'),
                                'organisme'             => $this->input->post('organisme'),
                                'organisateurs'         => $this->input->post('organisateurs'),
                                'confidentialite'       => $this->input->post('confidentialite')
                        );

                        $this->model_events->insert_event($event);

                        $this->load->view('home');
                }
        }
}