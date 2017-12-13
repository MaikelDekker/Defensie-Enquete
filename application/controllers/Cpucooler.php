<?php
class Cpucooler extends CI_Controller {
 
    public function __construct()
    {
        parent::__construct();
        $this->load->model('cpucooler_model');
        $this->load->helper('url_helper');
    }
 
    public function index()
    {
        $data['cpucooler'] = $this->cpucooler_model->get_cpucooler();
        $data['title'] = 'List of CPU Coolers';
 
        $this->load->view('templates/header', $data);
        $this->load->view('cpucooler/index', $data);
        $this->load->view('templates/footer');
    }
 
    public function view($slug = NULL)
    {
        $data['cpucooler_item'] = $this->cpucooler_model->get_cpucooler($slug);
        
        if (empty($data['cpucooler_item']))
        {
            show_404();
        }
 
        $data['name'] = $data['cpucooler_item']['name'];
        $data['designer'] = $data['cpucooler_item']['designer'];
        $data['price'] = $data['cpucooler_item']['price'];
        $data['description'] = $data['cpucooler_item']['description'];
        $data['component'] = $data['cpucooler_item']['component'];
        $data['sockets'] = $data['cpucooler_item']['sockets'];
        $data['attachment'] = $data['cpucooler_item']['attachment'];
        $data['soundlevel'] = $data['cpucooler_item']['soundlevel'];
        $data['cpu'] = $data['cpucooler_item']['cpu'];
        $data['equipment'] = $data['cpucooler_item']['equipment'];
        $data['ledcolors'] = $data['cpucooler_item']['ledcolors'];
        $data['rpm'] = $data['cpucooler_item']['rpm'];
        $data['material'] = $data['cpucooler_item']['material'];
        $data['heatpipeconnections'] = $data['cpucooler_item']['heatpipeconnections'];
        $data['airflow'] = $data['cpucooler_item']['airflow'];
        $data['staticpressure'] = $data['cpucooler_item']['staticpressure'];
        $data['powerconnector'] = $data['cpucooler_item']['powerconnector'];
        $data['accessoires'] = $data['cpucooler_item']['accessoires'];
        $data['leds'] = $data['cpucooler_item']['leds'];
        $data['bearings'] = $data['cpucooler_item']['bearings'];
        $data['impeller'] = $data['cpucooler_item']['impeller'];
        $data['heatpipes'] = $data['cpucooler_item']['heatpipes'];
        $data['dimensions'] = $data['cpucooler_item']['dimensions'];
        $data['weight'] = $data['cpucooler_item']['weight'];
        $data['information'] = $data['cpucooler_item']['information'];
        $data['releasedate'] = $data['cpucooler_item']['releasedate'];
        $data['warranty'] = $data['cpucooler_item']['warranty'];
 
        $this->load->view('templates/header', $data);
        $this->load->view('cpucooler/view', $data);
        $this->load->view('templates/footer');
    }
    
    public function create()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');
 
        $data['title'] = 'Create a new CPU Cooler';
 
        $this->form_validation->set_rules('name', 'name', 'required');
        $this->form_validation->set_rules('designer', 'designer', 'required');
        $this->form_validation->set_rules('price', 'price', 'required');
        $this->form_validation->set_rules('description', 'description', 'required');
        $this->form_validation->set_rules('component', 'component', 'required');
        $this->form_validation->set_rules('sockets', 'sockets', 'required');
        $this->form_validation->set_rules('attachment', 'attachment', 'required');
        $this->form_validation->set_rules('soundlevel', 'soundlevel', 'required');
        $this->form_validation->set_rules('cpu', 'cpu', 'required');
        $this->form_validation->set_rules('equipment', 'equipment', 'required');
        $this->form_validation->set_rules('ledcolors', 'ledcolors', 'required');
        $this->form_validation->set_rules('rpm', 'rpm', 'required');
        $this->form_validation->set_rules('material', 'material', 'required');
        $this->form_validation->set_rules('heatpipeconnections', 'heatpipeconnections', 'required');
        $this->form_validation->set_rules('airflow', 'airflow', 'required');
        $this->form_validation->set_rules('staticpressure', 'staticpressure', 'required');
        $this->form_validation->set_rules('powerconnector', 'powerconnector', 'required');
        $this->form_validation->set_rules('accessoires', 'accessoires', 'required');
        $this->form_validation->set_rules('leds', 'leds', 'required');
        $this->form_validation->set_rules('bearings', 'bearings', 'required');
        $this->form_validation->set_rules('impeller', 'impeller', 'required');
        $this->form_validation->set_rules('heatpipes', 'heatpipes', 'required');
        $this->form_validation->set_rules('dimensions', 'dimensions', 'required');
        $this->form_validation->set_rules('weight', 'weight', 'required');
        $this->form_validation->set_rules('information', 'information', 'required');
        $this->form_validation->set_rules('releasedate', 'releasedate', 'required');
        $this->form_validation->set_rules('warranty', 'warranty', 'required');
 
        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('cpucooler/create');
            $this->load->view('templates/footer');
 
        }
        else
        {
            $this->cpucooler_model->set_cpucooler();
            $this->load->view('templates/header', $data);
            $this->load->view('cpucooler/success');
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
        
        $data['title'] = 'Edit CPU Cooler item';        
        $data['cpucooler_item'] = $this->cpucooler_model->get_cpucooler_by_id($id);
        
        $this->form_validation->set_rules('name', 'name', 'required');
        $this->form_validation->set_rules('designer', 'designer', 'required');
        $this->form_validation->set_rules('price', 'price', 'required');
        $this->form_validation->set_rules('description', 'description', 'required');
        $this->form_validation->set_rules('component', 'component', 'required');
        $this->form_validation->set_rules('sockets', 'sockets', 'required');
        $this->form_validation->set_rules('attachment', 'attachment', 'required');
        $this->form_validation->set_rules('soundlevel', 'soundlevel', 'required');
        $this->form_validation->set_rules('cpu', 'cpu', 'required');
        $this->form_validation->set_rules('equipment', 'equipment', 'required');
        $this->form_validation->set_rules('ledcolors', 'ledcolors', 'required');
        $this->form_validation->set_rules('rpm', 'rpm', 'required');
        $this->form_validation->set_rules('material', 'material', 'required');
        $this->form_validation->set_rules('heatpipeconnections', 'heatpipeconnections', 'required');
        $this->form_validation->set_rules('airflow', 'airflow', 'required');
        $this->form_validation->set_rules('staticpressure', 'staticpressure', 'required');
        $this->form_validation->set_rules('powerconnector', 'powerconnector', 'required');
        $this->form_validation->set_rules('accessoires', 'accessoires', 'required');
        $this->form_validation->set_rules('leds', 'leds', 'required');
        $this->form_validation->set_rules('bearings', 'bearings', 'required');
        $this->form_validation->set_rules('impeller', 'impeller', 'required');
        $this->form_validation->set_rules('heatpipes', 'heatpipes', 'required');
        $this->form_validation->set_rules('dimensions', 'dimensions', 'required');
        $this->form_validation->set_rules('weight', 'weight', 'required');
        $this->form_validation->set_rules('information', 'information', 'required');
        $this->form_validation->set_rules('releasedate', 'releasedate', 'required');
        $this->form_validation->set_rules('warranty', 'warranty', 'required');
 
        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('cpucooler/edit', $data);
            $this->load->view('templates/footer');
 
        }
        else
        {
            $this->cpucooler_model->set_cpucooler($id);
            $this->load->view('cpucooler/success');
            redirect( base_url() . 'index.php/cpucooler/index');
        }
    }
    
    public function delete()
    {
        $id = $this->uri->segment(3);
        
        if (empty($id))
        {
            show_404();
        }
                
        $cpucooler_item = $this->cpucooler_model->get_cpucooler_by_id($id);
        
        $this->cpucooler_model->delete_cpucooler($id);        
        redirect( base_url() . 'index.php/cpucooler/index');        
    }
}