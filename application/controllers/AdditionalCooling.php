<?php
class AdditionalCooling extends CI_Controller {
 
    public function __construct()
    {
        parent::__construct();
        $this->load->model('additionalCooling_model');
        $this->load->helper('url_helper');
    }
 
    public function index()
    {
        $data['additionalCooling'] = $this->additionalCooling_model->get_additionalCooling();
        $data['title'] = 'View of Additional Coolings';
 
        $this->load->view('templates/header', $data);
        $this->load->view('additionalCooling/index', $data);
        $this->load->view('templates/footer');
    }
 
    public function view($slug = NULL)
    {
        $data['additionalCooling_item'] = $this->additionalCooling_model->get_additionalCooling($slug);
        
        if (empty($data['additionalCooling_item']))
        {
            show_404();
        }

        $data['name'] = $data['additionalCooling_item']['name'];
        $data['component'] = $data['additionalCooling_item']['component'];
        $data['slug'] = $data['additionalCooling_item']['slug'];
        $data['designer'] = $data['additionalCooling_item']['designer'];
        $data['color'] = $data['additionalCooling_item']['color'];
        $data['color2'] = $data['additionalCooling_item']['color2'];
        $data['ledColor'] = $data['additionalCooling_item']['ledColor'];
        $data['price'] = $data['additionalCooling_item']['price'];
        $data['type'] = $data['additionalCooling_item']['type'];
        $data['dimensions'] = $data['additionalCooling_item']['dimensions'];
        $data['fanSize'] = $data['additionalCooling_item']['fanSize'];
        $data['fanType'] = $data['additionalCooling_item']['fanType'];
        $data['description'] = $data['additionalCooling_item']['description'];
        $data['specialInfo'] = $data['additionalCooling_item']['specialInfo'];
        $data['material'] = $data['additionalCooling_item']['material'];
        $data['compatibility'] = $data['additionalCooling_item']['compatibility'];
        $data['attachment'] = $data['additionalCooling_item']['attachment'];
        $data['decibel'] = $data['additionalCooling_item']['decibel'];
        $data['speed'] = $data['additionalCooling_item']['speed'];
        $data['airMovement'] = $data['additionalCooling_item']['airMovement'];
        $data['connection'] = $data['additionalCooling_item']['connection'];
        $data['warranty'] = $data['additionalCooling_item']['warranty'];
        $data['cableLength'] = $data['additionalCooling_item']['cableLength'];
        $data['voltage'] = $data['additionalCooling_item']['voltage'];
        $data['mtbf'] = $data['additionalCooling_item']['mtbf'];
        $data['coolant'] = $data['additionalCooling_item']['coolant'];
        $data['radiatorSize'] = $data['additionalCooling_item']['radiatorSize'];
        $data['releasedate'] = $data['additionalCooling_item']['releasedate'];
 
        $this->load->view('templates/header', $data);
        $this->load->view('additionalCooling/view', $data);
        $this->load->view('templates/footer');
    }
    
    public function create()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');
 
        $data['title'] = 'Create new Additional Cooler';
 
        $this->form_validation->set_rules('name', 'name', 'required');
        $this->form_validation->set_rules('component', 'component', 'required');
        $this->form_validation->set_rules('designer', 'designer', 'required');
        $this->form_validation->set_rules('color', 'color', 'required');
        $this->form_validation->set_rules('color2', 'color2', 'required');
        $this->form_validation->set_rules('ledColor', 'ledColor', 'required');
        $this->form_validation->set_rules('price', 'price', 'required');
        $this->form_validation->set_rules('type', 'type', 'required');
        $this->form_validation->set_rules('dimensions', 'dimensions', 'required');
        $this->form_validation->set_rules('fanSize', 'fanSize', 'required');
        $this->form_validation->set_rules('fanType', 'fanType', 'required');
        $this->form_validation->set_rules('description', 'description', 'required');
        $this->form_validation->set_rules('specialInfo', 'specialInfo', 'required');
        $this->form_validation->set_rules('material', 'material', 'required');
        $this->form_validation->set_rules('compatibility', 'compatibility', 'required');
        $this->form_validation->set_rules('attachment', 'attachment', 'required');
        $this->form_validation->set_rules('decibel', 'decibel', 'required');
        $this->form_validation->set_rules('speed', 'speed', 'required');
        $this->form_validation->set_rules('airMovement', 'airMovement', 'required');
        $this->form_validation->set_rules('connection', 'connection', 'required');
        $this->form_validation->set_rules('warranty', 'warranty', 'required');
        $this->form_validation->set_rules('cableLength', 'cableLength', 'required');
        $this->form_validation->set_rules('voltage', 'voltage', 'required');
        $this->form_validation->set_rules('mtbf', 'mtbf', 'required');
        $this->form_validation->set_rules('coolant', 'coolant', 'required');
        $this->form_validation->set_rules('radiatorSize', 'radiatorSize', 'required');
        $this->form_validation->set_rules('releasedate', 'releasedate', 'required');
 
        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('additionalCooling/create');
            $this->load->view('templates/footer');
 
        }
        else
        {
            $this->additionalCooling_model->set_additionalCooling();
            $this->load->view('templates/header', $data);
            $this->load->view('additionalCooling/success');
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
        
        $data['title'] = 'Edit an Additional Cooler';        
        $data['additionalCooling_item'] = $this->additionalCooling_model->get_additionalCooling_by_id($id);
        
        $this->form_validation->set_rules('name', 'name', 'required');
        $this->form_validation->set_rules('component', 'component', 'required');
        $this->form_validation->set_rules('designer', 'designer', 'required');
        $this->form_validation->set_rules('color', 'color', 'required');
        $this->form_validation->set_rules('color2', 'color2', 'required');
        $this->form_validation->set_rules('ledColor', 'ledColor', 'required');
        $this->form_validation->set_rules('price', 'price', 'required');
        $this->form_validation->set_rules('type', 'type', 'required');
        $this->form_validation->set_rules('dimensions', 'dimensions', 'required');
        $this->form_validation->set_rules('fanSize', 'fanSize', 'required');
        $this->form_validation->set_rules('fanType', 'fanType', 'required');
        $this->form_validation->set_rules('description', 'description', 'required');
        $this->form_validation->set_rules('specialInfo', 'specialInfo', 'required');
        $this->form_validation->set_rules('material', 'material', 'required');
        $this->form_validation->set_rules('compatibility', 'compatibility', 'required');
        $this->form_validation->set_rules('attachment', 'attachment', 'required');
        $this->form_validation->set_rules('decibel', 'decibel', 'required');
        $this->form_validation->set_rules('speed', 'speed', 'required');
        $this->form_validation->set_rules('airMovement', 'airMovement', 'required');
        $this->form_validation->set_rules('connection', 'connection', 'required');
        $this->form_validation->set_rules('warranty', 'warranty', 'required');
        $this->form_validation->set_rules('cableLength', 'cableLength', 'required');
        $this->form_validation->set_rules('voltage', 'voltage', 'required');
        $this->form_validation->set_rules('mtbf', 'mtbf', 'required');
        $this->form_validation->set_rules('coolant', 'coolant', 'required');
        $this->form_validation->set_rules('radiatorSize', 'radiatorSize', 'required');
        $this->form_validation->set_rules('releasedate', 'releasedate', 'required');
 
        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('additionalCooling/edit', $data);
            $this->load->view('templates/footer');
 
        }
        else
        {
            $this->additionalCooling_model->set_additionalCooling($id);
            $this->load->view('additionalCooling/success');
            redirect( base_url() . 'index.php/additionalCooling/index');
        }
    }
    
    public function delete()
    {
        $id = $this->uri->segment(3);
        
        if (empty($id))
        {
            show_404();
        }
                
        $additionalCooling_item = $this->additionalCooling_model->get_additionalCooling_by_id($id);
        
        $this->additionalCooling_model->delete_additionalCooling($id);        
        redirect( base_url() . 'index.php/additionalCooling/index');        
    }
}