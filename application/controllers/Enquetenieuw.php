<?php
class Enquetenieuw extends CI_Controller {

        public function __construct()
        {
            parent::__construct();
            $this->load->model('Enquetenieuw_model');
            $this->load->helper('url_helper');
        }

        public function index()
        {
            //Formulier
            $this->load->helper('form');
            $this->load->library('form_validation');

            $this->form_validation->set_rules('enqueteFullname', 'Volledige naam', 'required|trim|regex_match[/^[a-zA-Z ]+$/]');
            $this->form_validation->set_rules('enqueteEducation', 'Opleiding/blok', 'required');
            $this->form_validation->set_rules('enqueteClass', 'Klas', 'required|trim|regex_match[/^[a-zA-Z0-9]+$/]');
            $this->form_validation->set_rules('enquetePsoftnr', 'Psoft nummer', 'required');

            //Overige
            $data['educationEMV'] = $this->Enquetenieuw_model->get_educationBlocks('EMV Blok');
            $data['educationPotom'] = $this->Enquetenieuw_model->get_educationBlocks('POTOM');
            $data['questions'] = $this->Enquetenieuw_model->get_questions();
            $data['questionsOpen'] = $this->Enquetenieuw_model->get_questionsOpen();
            $data['title'] = 'Enqu&ecirc;te';

            if ($this->form_validation->run() == FALSE)
            {
                $this->load->view('templates/enquete_header', $data);
                $this->load->view('enquetenieuw/index', $data);
                $this->load->view('templates/enquete_footer');
            }
            else
            {
                $this->Enquetenieuw_model->create_surveyAnswers();
                $this->load->view('templates/enquete_header', $data);
                $this->load->view('enquetenieuw/success');
                $this->load->view('templates/enquete_footer');
            }
        }
}