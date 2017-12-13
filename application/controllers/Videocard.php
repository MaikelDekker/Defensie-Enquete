<?php
class Videocard extends CI_Controller {
 
    public function __construct()
    {
        parent::__construct();
        $this->load->model('videocard_model');
        $this->load->helper('url_helper');
    }
 
    public function index()
    {
        $data['videocard'] = $this->videocard_model->get_videocard();
        $data['name'] = 'Videocard';
 
        $this->load->view('templates/header', $data);
        $this->load->view('videocard/index', $data);
        $this->load->view('templates/footer');
    }
 
    public function view($slug = NULL)
    {
        $data['videocard_item'] = $this->videocard_model->get_videocard($slug);
        
        if (empty($data['videocard_item']))
        {
            show_404();
        }
 
        $data['name'] = $data['videocard_item']['name'];
        $data['designer'] = $data['videocard_item']['designer'];
        $data['series'] = $data['videocard_item']['series'];
        $data['price'] = $data['videocard_item']['price'];
        $data['description'] = $data['videocard_item']['description'];
        $data['description'] = $data['videocard_item']['description'];
        $data['clockingSpeed'] = $data['videocard_item']['clockingSpeed'];
        $data['boostSpeed'] = $data['videocard_item']['boostSpeed'];
        $data['streamProcessors'] = $data['videocard_item']['streamProcessors'];
        $data['features'] = $data['videocard_item']['features'];
        $data['directx'] = $data['videocard_item']['directx'];
        $data['opengl'] = $data['videocard_item']['opengl'];
        $data['memoryAmount'] = $data['videocard_item']['memoryAmount'];
        $data['memoryType'] = $data['videocard_item']['memoryType'];
        $data['memoryInterface'] = $data['videocard_item']['memoryInterface'];
        $data['memorySpeed'] = $data['videocard_item']['memorySpeed'];
        $data['displayport'] = $data['videocard_item']['displayport'];
        $data['displayportVer'] = $data['videocard_item']['displayportVer'];
        $data['dviD'] = $data['videocard_item']['dviD'];
        $data['dviDualChannels'] = $data['videocard_item']['dviDualChannels'];
        $data['slotsUsed'] = $data['videocard_item']['slotsUsed'];
        $data['dviHdcp'] = $data['videocard_item']['dviHdcp'];
        $data['hdmi'] = $data['videocard_item']['hdmi'];
        $data['hdmiVer'] = $data['videocard_item']['hdmiVer'];
        $data['multiGpu'] = $data['videocard_item']['multiGpu'];
        $data['tdp'] = $data['videocard_item']['tdp'];
        $data['connection'] = $data['videocard_item']['connection'];
        $data['extra'] = $data['videocard_item']['extra'];
        $data['vrReady'] = $data['videocard_item']['vrReady'];
        $data['gSync'] = $data['videocard_item']['gSync'];
        $data['sli'] = $data['videocard_item']['sli'];
        $data['crossfire'] = $data['videocard_item']['crossfire'];
        $data['warranty'] = $data['videocard_item']['warranty'];
        $data['dimensions'] = $data['videocard_item']['dimensions'];
 
        $this->load->view('templates/header', $data);
        $this->load->view('videocard/view', $data);
        $this->load->view('templates/footer');
    }
    
    public function create()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');
 
        $data['title'] = 'Create a videocard item';
 
        $this->form_validation->set_rules('name', 'name', 'required');
        $this->form_validation->set_rules('designer', 'designer', 'required');
        $this->form_validation->set_rules('series', 'series', 'required');
        $this->form_validation->set_rules('price', 'price', 'required');
        $this->form_validation->set_rules('description', 'description', 'required');
        $this->form_validation->set_rules('clockingSpeed', 'clockingSpeed', 'required');
        $this->form_validation->set_rules('boostSpeed', 'boostSpeed', 'required');
        $this->form_validation->set_rules('streamProcessors', 'streamProcessors', 'required');
        $this->form_validation->set_rules('features', 'features', 'required');
        $this->form_validation->set_rules('directx', 'directx', 'required');
        $this->form_validation->set_rules('opengl', 'opengl', 'required');
        $this->form_validation->set_rules('memoryAmount', 'memoryAmount', 'required');
        $this->form_validation->set_rules('memoryType', 'memoryType', 'required');
        $this->form_validation->set_rules('memoryInterface', 'memoryInterface', 'required');
        $this->form_validation->set_rules('memorySpeed', 'memorySpeed', 'required');
        $this->form_validation->set_rules('displayport', 'displayport', 'required');
        $this->form_validation->set_rules('displayportVer', 'displayportVer', 'required');
        $this->form_validation->set_rules('dviD', 'dviD', 'required');
        $this->form_validation->set_rules('dviDualChannels', 'dviDualChannels', 'required');
        $this->form_validation->set_rules('slotsUsed', 'slotsUsed', 'required');
        $this->form_validation->set_rules('dviHdcp', 'dviHdcp', 'required');
        $this->form_validation->set_rules('hdmi', 'hdmi', 'required');
        $this->form_validation->set_rules('hdmiVer', 'hdmiVer', 'required');
        $this->form_validation->set_rules('multiGpu', 'multiGpu', 'required');
        $this->form_validation->set_rules('tdp', 'tdp', 'required');
        $this->form_validation->set_rules('connection', 'connection', 'required');
        $this->form_validation->set_rules('extra', 'extra', 'required');
        $this->form_validation->set_rules('vrReady', 'vrReady', 'required');
        $this->form_validation->set_rules('gSync', 'gSync', 'required');
        $this->form_validation->set_rules('sli', 'sli', 'required');
        $this->form_validation->set_rules('crossfire', 'crossfire', 'required');  
        $this->form_validation->set_rules('releaseDate', 'releaseDate', 'required');
        $this->form_validation->set_rules('warranty', 'warranty', 'required');
        $this->form_validation->set_rules('dimensions', 'dimensions', 'required');
 
        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('videocard/create');
            $this->load->view('templates/footer');
 
        }
        else
        {
            $this->videocard_model->set_videocard();
            $this->load->view('templates/header', $data);
            $this->load->view('videocard/success');
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
        
        $data['title'] = 'Edit a videocard item';        
        $data['videocard_item'] = $this->videocard_model->get_videocard_by_id($id);
        
        $this->form_validation->set_rules('name', 'name', 'required');
        $this->form_validation->set_rules('designer', 'designer', 'required');
        $this->form_validation->set_rules('series', 'series', 'required');
        $this->form_validation->set_rules('price', 'price', 'required');
        $this->form_validation->set_rules('description', 'description', 'required');
        $this->form_validation->set_rules('clockingSpeed', 'clockingSpeed', 'required');
        $this->form_validation->set_rules('boostSpeed', 'boostSpeed', 'required');
        $this->form_validation->set_rules('streamProcessors', 'streamProcessors', 'required');
        $this->form_validation->set_rules('features', 'features', 'required');
        $this->form_validation->set_rules('directx', 'directx', 'required');
        $this->form_validation->set_rules('opengl', 'opengl', 'required');
        $this->form_validation->set_rules('memoryAmount', 'memoryAmount', 'required');
        $this->form_validation->set_rules('memoryType', 'memoryType', 'required');
        $this->form_validation->set_rules('memoryInterface', 'memoryInterface', 'required');
        $this->form_validation->set_rules('memorySpeed', 'memorySpeed', 'required');
        $this->form_validation->set_rules('displayport', 'displayport', 'required');
        $this->form_validation->set_rules('displayportVer', 'displayportVer', 'required');
        $this->form_validation->set_rules('dviD', 'dviD', 'required');
        $this->form_validation->set_rules('dviDualChannels', 'dviDualChannels', 'required');
        $this->form_validation->set_rules('slotsUsed', 'slotsUsed', 'required');
        $this->form_validation->set_rules('dviHdcp', 'dviHdcp', 'required');
        $this->form_validation->set_rules('hdmi', 'hdmi', 'required');
        $this->form_validation->set_rules('hdmiVer', 'hdmiVer', 'required');
        $this->form_validation->set_rules('multiGpu', 'multiGpu', 'required');
        $this->form_validation->set_rules('tdp', 'tdp', 'required');
        $this->form_validation->set_rules('connection', 'connection', 'required');
        $this->form_validation->set_rules('extra', 'extra', 'required');
        $this->form_validation->set_rules('vrReady', 'vrReady', 'required');
        $this->form_validation->set_rules('gSync', 'gSync', 'required');
        $this->form_validation->set_rules('sli', 'sli', 'required');
        $this->form_validation->set_rules('crossfire', 'crossfire', 'required');  
        $this->form_validation->set_rules('releaseDate', 'releaseDate', 'required');
        $this->form_validation->set_rules('warranty', 'warranty', 'required');
        $this->form_validation->set_rules('dimensions', 'dimensions', 'required');
 
        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('videocard/edit', $data);
            $this->load->view('templates/footer');
 
        }
        else
        {
            $this->videocard_model->set_videocard($id);
            //$this->load->view('videocard/success');
            redirect( base_url() . 'index.php/videocard/index');
        }
    }
    
    public function delete()
    {
        $id = $this->uri->segment(3);
        
        if (empty($id))
        {
            show_404();
        }
                
        $videocard_item = $this->videocard_model->get_videocard_by_id($id);
        
        $this->videocard_model->delete_videocard($id);        
        redirect( base_url() . 'index.php/videocard/index');        
    }
}