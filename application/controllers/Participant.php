<?php
class Participant extends CI_Controller {
 
    public function __construct()
    {
        parent::__construct();
        $this->load->model('participant_model');
        $this->load->helper('url_helper');
    }
 
    public function index()
    {
        $data['participant'] = $this->participant_model->get_enquete();
        $data['title'] = 'View of participant';
 
        $this->load->view('templates/header', $data);
        $this->load->view('participant/index', $data);
        $this->load->view('templates/footer');
    }
 
    public function view($slug = NULL)
    {
        $data['participant_item'] = $this->participant_model->get_participant_by_id($slug);
        
        if (empty($data['participant_item']))
        {
            show_404();
        }
 
        $data['title'] = $data['participant_item']['title'];
 
        $this->load->view('templates/header', $data);
        $this->load->view('participant/view', $data);
        $this->load->view('templates/footer');
    }
    
    public function create()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');
 
        $data['title'] = 'Create a participant item';
 
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('text', 'Text', 'required');
 
        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('participant/create');
            $this->load->view('templates/footer');
 
        }
        else
        {
            $this->participant_model->set_participant();
            $this->load->view('templates/header', $data);
            $this->load->view('participant/success');
            $this->load->view('templates/footer');
        }
    }
    
    public function edit()
    {
        $id = $this->uri->segment(3);
        
        if (empty($id))
        {
            show_404();
        }
        
        $this->load->helper('form');
        $this->load->library('form_validation');
        
        $data['title'] = 'Edit a participant item';        
        $data['participant_item'] = $this->participant_model->get_participant_by_id($id);
        
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('text', 'Text', 'required');
 
        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('participant/edit', $data);
            $this->load->view('templates/footer');
 
        }
        else
        {
            $this->participant_model->set_participant($id);
            //$this->load->view('participant/success');
            redirect( base_url() . 'index.php/participant/index');
        }
    }
    
    public function delete()
    {
        $id = $this->uri->segment(3);
        
        if (empty($id))
        {
            show_404();
        }
                
        $participant_item = $this->participant_model->get_participant_by_id($id);
        
        $this->participant_model->delete_participant($id);        
        redirect( base_url() . 'index.php/participant/index');        
    }
}