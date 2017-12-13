<?php
class Hdd extends CI_Controller {
 
    public function __construct()
    {
        parent::__construct();
        $this->load->model('hdd_model');
        $this->load->helper('url_helper');
    }
 
    public function index()
    {
        $data['hdd'] = $this->hdd_model->get_hdd();
        $data['title'] = 'List of HDD';
 
        $this->load->view('templates/header', $data);
        $this->load->view('hdd/index', $data);
        $this->load->view('templates/footer');
    }
 
    public function view($slug = NULL)
    {
        $data['hdd_item'] = $this->hdd_model->get_hdd($slug);
        
        if (empty($data['hdd_item']))
        {
            show_404();
        }
 
        $data['name'] = $data['hdd_item']['name'];
        $data['designer'] = $data['hdd_item']['designer'];
        $data['description'] = $data['hdd_item']['description'];
        $data['price'] = $data['hdd_item']['price'];
        $data['component'] = $data['hdd_item']['component'];
        $data['construction'] = $data['hdd_item']['construction'];
        $data['capacity'] = $data['hdd_item']['capacity'];
        $data['interface'] = $data['hdd_item']['interface'];
        $data['read'] = $data['hdd_item']['read'];
        $data['rpm'] = $data['hdd_item']['rpm'];
        $data['cache'] = $data['hdd_item']['cache'];
        $data['volumeuse'] = $data['hdd_item']['volumeuse'];
        $data['volumestandy'] = $data['hdd_item']['volumestandy'];
        $data['powerread'] = $data['hdd_item']['powerread'];
        $data['powerstandby'] = $data['hdd_item']['powerstandby'];
        $data['powersleep'] = $data['hdd_item']['powersleep'];
        $data['poweridle'] = $data['hdd_item']['poweridle'];
        $data['dimensions'] = $data['hdd_item']['dimensions'];
        $data['information'] = $data['hdd_item']['information'];
        $data['weight'] = $data['hdd_item']['weight'];
        $data['warranty'] = $data['hdd_item']['warranty'];

 
        $this->load->view('templates/header', $data);
        $this->load->view('hdd/view', $data);
        $this->load->view('templates/footer');
    }
    
    public function create()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');
 
        $data['title'] = 'Create new HDD';
 
        $this->form_validation->set_rules('name', 'name', 'required');
        $this->form_validation->set_rules('designer', 'designer', 'required');
        $this->form_validation->set_rules('description', 'description', 'required');
        $this->form_validation->set_rules('price', 'price', 'required');
        $this->form_validation->set_rules('construction', 'construction', 'required');
        $this->form_validation->set_rules('component', 'component', 'required');
        $this->form_validation->set_rules('capacity', 'capacity', 'required');
        $this->form_validation->set_rules('interface', 'interface', 'required');
        $this->form_validation->set_rules('read', 'read', 'required');
        $this->form_validation->set_rules('rpm', 'rpm', 'required');
        $this->form_validation->set_rules('cache', 'cache', 'required');
        $this->form_validation->set_rules('volumeuse', 'volumeuse', 'required');
        $this->form_validation->set_rules('volumestandby', 'volumestandby', 'required');
        $this->form_validation->set_rules('powerread', 'powerread', 'required');
        $this->form_validation->set_rules('powerstandby', 'powerstandby', 'required');
        $this->form_validation->set_rules('powersleep', 'powersleep', 'required');
        $this->form_validation->set_rules('poweridle', 'poweridle', 'required');
        $this->form_validation->set_rules('dimensions', 'dimensions', 'required');
        $this->form_validation->set_rules('information', 'information', 'required');
        $this->form_validation->set_rules('weight', 'weight', 'required');
        $this->form_validation->set_rules('warranty', 'warranty', 'required');
 
        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('hdd/create');
            $this->load->view('templates/footer');
 
        }
        else
        {
            $this->hdd_model->set_hdd();
            $this->load->view('templates/header', $data);
            $this->load->view('hdd/success');
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
        
        $data['title'] = 'Edit HDD item';        
        $data['hdd_item'] = $this->hdd_model->get_hdd_by_id($id);
        
        $this->form_validation->set_rules('name', 'name', 'required');
        $this->form_validation->set_rules('designer', 'designer', 'required');
        $this->form_validation->set_rules('description', 'description', 'required');
        $this->form_validation->set_rules('price', 'price', 'required');
        $this->form_validation->set_rules('construction', 'construction', 'required');
        $this->form_validation->set_rules('component', 'component', 'required');
        $this->form_validation->set_rules('capacity', 'capacity', 'required');
        $this->form_validation->set_rules('interface', 'interface', 'required');
        $this->form_validation->set_rules('read', 'read', 'required');
        $this->form_validation->set_rules('rpm', 'rpm', 'required');
        $this->form_validation->set_rules('cache', 'cache', 'required');
        $this->form_validation->set_rules('volumeuse', 'volumeuse', 'required');
        $this->form_validation->set_rules('volumestandby', 'volumestandby', 'required');
        $this->form_validation->set_rules('powerread', 'powerread', 'required');
        $this->form_validation->set_rules('powerstandby', 'powerstandby', 'required');
        $this->form_validation->set_rules('powersleep', 'powersleep', 'required');
        $this->form_validation->set_rules('poweridle', 'poweridle', 'required');
        $this->form_validation->set_rules('dimensions', 'dimensions', 'required');
        $this->form_validation->set_rules('information', 'information', 'required');
        $this->form_validation->set_rules('weight', 'weight', 'required');
        $this->form_validation->set_rules('warranty', 'warranty', 'required');
 
        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('hdd/edit', $data);
            $this->load->view('templates/footer');
 
        }
        else
        {
            $this->hdd_model->set_hdd($id);
            $this->load->view('hdd/success');
            redirect( base_url() . 'index.php/hdd/index');
        }
    }
    
    public function delete()
    {
        $id = $this->uri->segment(3);
        
        if (empty($id))
        {
            show_404();
        }
                
        $hdd_item = $this->hdd_model->get_hdd_by_id($id);
        
        $this->hdd_model->delete_hdd($id);        
        redirect( base_url() . 'index.php/hdd/index');        
    }
}