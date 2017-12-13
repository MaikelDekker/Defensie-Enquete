<?php
class Processor extends CI_Controller {
 
    public function __construct()
    {
        parent::__construct();
        $this->load->model('processor_model');
        $this->load->helper('url_helper');
    }
 
    public function index()
    {
        $data['processor'] = $this->processor_model->get_processor();
        $data['title'] = 'List of Processors';
 
        $this->load->view('templates/header', $data);
        $this->load->view('processor/index', $data);
        $this->load->view('templates/footer');
    }
 
    public function view($slug = NULL)
    {
        $data['processor_item'] = $this->processor_model->get_processor($slug);
        
        if (empty($data['processor_item']))
        {
            show_404();
        }
 
        $data['name'] = $data['processor_item']['name'];
        $data['designer'] = $data['processor_item']['designer'];
        $data['price'] = $data['processor_item']['price'];
        $data['description'] = $data['processor_item']['description'];
        $data['component'] = $data['processor_item']['component'];
        $data['cpuType'] = $data['processor_item']['cpuType'];
        $data['clockSpeed'] = $data['processor_item']['clockSpeed'];
        $data['turbomodus'] = $data['processor_item']['turbomodus'];
        $data['microarchitecture'] = $data['processor_item']['microarchitecture'];
        $data['cooler'] = $data['processor_item']['cooler'];
        $data['size'] = $data['processor_item']['size'];
        $data['memoryChannels'] = $data['processor_item']['memoryChannels'];
        $data['memoryVoltage'] = $data['processor_item']['memoryVoltage'];
        $data['supportedMemory'] = $data['processor_item']['supportedMemory'];
        $data['socket'] = $data['processor_item']['socket'];
        $data['cores'] = $data['processor_item']['cores'];
        $data['threads'] = $data['processor_item']['threads'];
        $data['cache'] = $data['processor_item']['cache'];
        $data['tdp'] = $data['processor_item']['tdp'];
        $data['gpu'] = $data['processor_item']['gpu'];
        $data['multiCpuSystem'] = $data['processor_item']['multiCpuSystem'];
        $data['gpuClockspeed'] = $data['processor_item']['gpuClockspeed'];
        $data['busSpeed'] = $data['processor_item']['busSpeed'];
        $data['releaseDate'] = $data['_item']['releaseDate'];
        $data['warranty'] = $data['processor_item']['warranty'];
 
        $this->load->view('templates/header', $data);
        $this->load->view('processor/view', $data);
        $this->load->view('templates/footer');
    }
    
    public function create()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');
 
        $data['title'] = 'Create a new Processor';
 
        $this->form_validation->set_rules('name', 'name', 'required');
        $this->form_validation->set_rules('designer', 'designer', 'required');
        $this->form_validation->set_rules('price', 'price', 'required');
        $this->form_validation->set_rules('description', 'description', 'required');
        $this->form_validation->set_rules('component', 'component', 'required');
        $this->form_validation->set_rules('cpuType', 'cpuType', 'required');
        $this->form_validation->set_rules('clockSpeed', 'clockSpeed', 'required');
        $this->form_validation->set_rules('turbomodus', 'turbomodus', 'required');
        $this->form_validation->set_rules('microarchitecture', 'microarchitecture', 'required');
        $this->form_validation->set_rules('cooler', 'cooler', 'required');
        $this->form_validation->set_rules('size', 'size', 'required');
        $this->form_validation->set_rules('memoryChannels', 'memoryChannels', 'required');
        $this->form_validation->set_rules('memoryVoltage', 'memoryVoltage', 'required');
        $this->form_validation->set_rules('supportedMemory', 'supportedMemory', 'required');
        $this->form_validation->set_rules('socket', 'socket', 'required');
        $this->form_validation->set_rules('cores', 'cores', 'required');
        $this->form_validation->set_rules('threads', 'threads', 'required');
        $this->form_validation->set_rules('cache', 'cache', 'required');
        $this->form_validation->set_rules('tdp', 'tdp', 'required');
        $this->form_validation->set_rules('gpu', 'gpu', 'required');
        $this->form_validation->set_rules('multiCpuSystem', 'multiCpuSystem', 'required');
        $this->form_validation->set_rules('gpuClockspeed', 'gpuClockspeed', 'required');
        $this->form_validation->set_rules('busSpeed', 'busSpeed', 'required');
        $this->form_validation->set_rules('releaseDate', 'releaseDate', 'required');
        $this->form_validation->set_rules('warranty', 'warranty', 'required');
 
        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('processor/create');
            $this->load->view('templates/footer');
 
        }
        else
        {
            $this->processor_model->set_processor();
            $this->load->view('templates/header', $data);
            $this->load->view('processor/success');
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
        
        $data['title'] = 'Edit a processor item';        
        $data['processor_item'] = $this->processor_model->get_processor_by_id($id);
        
        $this->form_validation->set_rules('name', 'name', 'required');
        $this->form_validation->set_rules('designer', 'designer', 'required');
        $this->form_validation->set_rules('price', 'price', 'required');
        $this->form_validation->set_rules('description', 'description', 'required');
        $this->form_validation->set_rules('component', 'component', 'required');
        $this->form_validation->set_rules('cpuType', 'cpuType', 'required');
        $this->form_validation->set_rules('clockSpeed', 'clockSpeed', 'required');
        $this->form_validation->set_rules('turbomodus', 'turbomodus', 'required');
        $this->form_validation->set_rules('microarchitecture', 'microarchitecture', 'required');
        $this->form_validation->set_rules('cooler', 'cooler', 'required');
        $this->form_validation->set_rules('size', 'size', 'required');
        $this->form_validation->set_rules('memoryChannels', 'memoryChannels', 'required');
        $this->form_validation->set_rules('memoryVoltage', 'memoryVoltage', 'required');
        $this->form_validation->set_rules('supportedMemory', 'supportedMemory', 'required');
        $this->form_validation->set_rules('socket', 'socket', 'required');
        $this->form_validation->set_rules('cores', 'cores', 'required');
        $this->form_validation->set_rules('threads', 'threads', 'required');
        $this->form_validation->set_rules('cache', 'cache', 'required');
        $this->form_validation->set_rules('tdp', 'tdp', 'required');
        $this->form_validation->set_rules('gpu', 'gpu', 'required');
        $this->form_validation->set_rules('multiCpuSystem', 'multiCpuSystem', 'required');
        $this->form_validation->set_rules('gpuClockspeed', 'gpuClockspeed', 'required');
        $this->form_validation->set_rules('busSpeed', 'busSpeed', 'required');
        $this->form_validation->set_rules('releaseDate', 'releaseDate', 'required');
        $this->form_validation->set_rules('warranty', 'warranty', 'required');
 
        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('processor/edit', $data);
            $this->load->view('templates/footer');
 
        }
        else
        {
            $this->processor_model->set_processor($id);
            $this->load->view('processor/success');
            redirect( base_url() . 'index.php/processor/index');
        }
    }
    
    public function delete()
    {
        $id = $this->uri->segment(3);
        
        if (empty($id))
        {
            show_404();
        }
                
        $processor_item = $this->processor_model->get_processor_by_id($id);
        
        $this->processor_model->delete_processor($id);        
        redirect( base_url() . 'index.php/processor/index');        
    }
}