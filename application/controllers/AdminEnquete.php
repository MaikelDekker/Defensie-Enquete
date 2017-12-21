<?php
class adminEnquete extends CI_Controller {
 
    public function __construct()
    {
        parent::__construct();
        $this->load->model('adminEnquete_model');
        $this->load->helper('url_helper');
    }
 
    public function index()
    {
        $data['adminEnquete'] = $this->adminEnquete_model->get_adminEnquete();
        $data['title'] = 'View of adminEnquete';
 
        $this->load->view('templates/header', $data);
        $this->load->view('adminEnquete/index', $data);
        $this->load->view('templates/footer');
    }
 
    public function view($slug = NULL)
    {
        $data['adminEnquete_item'] = $this->adminEnquete_model->get_adminEnquete($slug);
        
        if (empty($data['adminEnquete_item']))
        {
            show_404();
        }
 
        $data['title'] = $data['adminEnquete_item']['title'];
 
        $this->load->view('templates/header', $data);
        $this->load->view('adminEnquete/view', $data);
        $this->load->view('templates/footer');
    }
    
    public function create()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');
 
        $data['title'] = 'Create a adminEnquete item';
 
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('text', 'Text', 'required');
 
        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('adminEnquete/create');
            $this->load->view('templates/footer');
 
        }
        else
        {
            $this->adminEnquete_model->set_adminEnquete();
            $this->load->view('templates/header', $data);
            $this->load->view('adminEnquete/success');
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
        
        $data['title'] = 'Edit a adminEnquete item';        
        $data['adminEnquete_item'] = $this->adminEnquete_model->get_adminEnquete_by_id($id);
        
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('text', 'Text', 'required');
 
        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('adminEnquete/edit', $data);
            $this->load->view('templates/footer');
 
        }
        else
        {
            $this->adminEnquete_model->set_adminEnquete($id);
            //$this->load->view('adminEnquete/success');
            redirect( base_url() . 'index.php/adminEnquete/index');
        }
    }
    
    public function delete()
    {
        $id = $this->uri->segment(3);
        
        if (empty($id))
        {
            show_404();
        }
                
        $adminEnquete_item = $this->adminEnquete_model->get_adminEnquete_by_id($id);
        
        $this->adminEnquete_model->delete_adminEnquete($id);        
        redirect( base_url() . 'index.php/adminEnquete/index');        
    }
}