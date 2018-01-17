<?php
class admin extends CI_Controller {
 
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin_model');
        $this->load->helper('url_helper');
    }
 
    public function index()
    {
        $data['title'] = 'Homepage';
        //$this->load->view('templates/header', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer');
    }
 
    public function view($slug = NULL)
    {
        $data['admin_item'] = $this->admin_model->get_admin($slug);
        
        if (empty($data['admin_item']))
        {
            show_404();
        }
 
        $data['title'] = $data['admin_item']['title'];
 
        $this->load->view('templates/header', $data);
        $this->load->view('admin/view', $data);
        $this->load->view('templates/footer');
    }
    
    public function create()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');
 
        $data['title'] = 'Create a admin item';
 
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('text', 'Text', 'required');
 
        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('admin/create');
            $this->load->view('templates/footer');
 
        }
        else
        {
            $this->admin_model->set_admin();
            $this->load->view('templates/header', $data);
            $this->load->view('admin/success');
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
        
        $data['title'] = 'Edit a admin item';        
        $data['admin_item'] = $this->admin_model->get_admin_by_id($id);
        
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('text', 'Text', 'required');
 
        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('admin/edit', $data);
            $this->load->view('templates/footer');
 
        }
        else
        {
            $this->admin_model->set_admin($id);
            //$this->load->view('admin/success');
            redirect( base_url() . 'index.php/admin/index');
        }
    }
    
    public function delete()
    {
        $id = $this->uri->segment(3);
        
        if (empty($id))
        {
            show_404();
        }
                
        $admin_item = $this->admin_model->get_admin_by_id($id);
        
        $this->admin_model->delete_admin($id);        
        redirect( base_url() . 'index.php/admin/index');        
    }

    public function results()
    {
        $data['admin'] = $this->admin_model->get_admin();
        $data['title'] = 'Results';
 
        $this->load->view('templates/header', $data);
        $this->load->view('admin/results', $data);
        $this->load->view('templates/footer');
    }
}