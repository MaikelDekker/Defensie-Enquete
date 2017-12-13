<?php
class Ram extends CI_Controller {
 
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ram_model');
        $this->load->helper('url_helper');
    }
 
    public function index()
    {
        $data['ram'] = $this->ram_model->get_ram();
        $data['title'] = 'List of RAM';
 
        $this->load->view('templates/header', $data);
        $this->load->view('ram/index', $data);
        $this->load->view('templates/footer');
    }
 
    public function view($slug = NULL)
    {
        $data['ram_item'] = $this->ram_model->get_ram($slug);
        
        if (empty($data['ram_item']))
        {
            show_404();
        }
 
        $data['name'] = $data['ram_item']['name'];
        $data['designer'] = $data['ram_item']['designer'];
        $data['price'] = $data['ram_item']['price'];
        $data['type'] = $data['ram_item']['type'];
        $data['capacity'] = $data['ram_item']['capacity'];
        $data['frequency'] = $data['ram_item']['frequency'];
        $data['dims'] = $data['ram_item']['dims'];
        $data['timings'] = $data['ram_item']['timings'];
        $data['releaseDate'] = $data['ram_item']['releaseDate'];
        $data['warranty'] = $data['ram_item']['warranty'];
 
        $this->load->view('templates/header', $data);
        $this->load->view('ram/view', $data);
        $this->load->view('templates/footer');
    }
    
    public function create()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');
 
        $data['title'] = 'Create a RAM item';
 
        $this->form_validation->set_rules('name', 'name', 'required');
        $this->form_validation->set_rules('designer', 'designer', 'required');
        $this->form_validation->set_rules('price', 'price', 'required');
        $this->form_validation->set_rules('releaseDate', 'releaseDate', 'required');
        $this->form_validation->set_rules('type', 'type', 'required');
        $this->form_validation->set_rules('dims', 'dims', 'required');
        $this->form_validation->set_rules('frequency', 'frequency', 'required');
        $this->form_validation->set_rules('timings', 'timings', 'required');
        $this->form_validation->set_rules('warranty', 'warranty', 'required');
 
        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('ram/create');
            $this->load->view('templates/footer');
 
        }
        else
        {
            $this->ram_model->set_ram();
            $this->load->view('templates/header', $data);
            $this->load->view('ram/success');
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
        
        $data['title'] = 'Edit RAM item';        
        $data['ram_item'] = $this->ram_model->get_ram_by_id($id);
        
        $this->form_validation->set_rules('name', 'name', 'required');
        $this->form_validation->set_rules('designer', 'designer', 'required');
        $this->form_validation->set_rules('price', 'price', 'required');
        $this->form_validation->set_rules('releaseDate', 'releaseDate', 'required');
        $this->form_validation->set_rules('type', 'type', 'required');
        $this->form_validation->set_rules('dims', 'dims', 'required');
        $this->form_validation->set_rules('frequency', 'frequency', 'required');
        $this->form_validation->set_rules('timings', 'timings', 'required');
        $this->form_validation->set_rules('warranty', 'warranty', 'required');
 
        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('ram/edit', $data);
            $this->load->view('templates/footer');
 
        }
        else
        {
            $this->ram_model->set_ram($id);
            //$this->load->view('ram/success');
            redirect( base_url() . 'index.php/ram/index');
        }
    }
    
    public function delete()
    {
        $id = $this->uri->segment(3);
        
        if (empty($id))
        {
            show_404();
        }
                
        $ram_item = $this->ram_model->get_ram_by_id($id);
        
        $this->ram_model->delete_ram($id);        
        redirect( base_url() . 'index.php/ram/index');        
    }
}