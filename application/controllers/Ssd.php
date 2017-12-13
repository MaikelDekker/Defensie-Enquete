<?php
class Ssd extends CI_Controller {
 
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ssd_model');
        $this->load->helper('url_helper');
    }
 
    public function index()
    {
        $data['ssd'] = $this->ssd_model->get_ssd();
        $data['title'] = 'List of SSD';
 
        $this->load->view('templates/header', $data);
        $this->load->view('ssd/index', $data);
        $this->load->view('templates/footer');
    }
 
    public function view($slug = NULL)
    {
        $data['ssd_item'] = $this->ssd_model->get_ssd($slug);
        
        if (empty($data['ssd_item']))
        {
            show_404();
        }
 
        $data['serie'] = $data['ssd_item']['serie'];
        $data['designer'] = $data['ssd_item']['designer'];
        $data['price'] = $data['ssd_item']['price'];
        $data['description'] = $data['ssd_item']['description'];
        $data['component'] = $data['ssd_item']['component'];
        $data['construction'] = $data['ssd_item']['construction'];
        $data['capacity'] = $data['ssd_item']['capacity'];
        $data['interface'] = $data['ssd_item']['interface'];
        $data['read'] = $data['ssd_item']['read'];
        $data['write'] = $data['ssd_item']['write'];
        $data['chiptype'] = $data['ssd_item']['chiptype'];
        $data['cache'] = $data['ssd_item']['cache'];
        $data['powerConnector'] = $data['ssd_item']['powerConnector'];
        $data['powerStart'] = $data['ssd_item']['powerStart'];
        $data['powerStandby'] = $data['ssd_item']['powerStandby'];
        $data['iopsRead'] = $data['ssd_item']['iopsRead'];
        $data['iopsWrite'] = $data['ssd_item']['iopsWrite'];
        $data['mtbf'] = $data['ssd_item']['mtbf'];
        $data['trim'] = $data['ssd_item']['trim'];
        $data['controller'] = $data['ssd_item']['controller'];
        $data['accessoires'] = $data['ssd_item']['accessoires'];
        $data['dimensions'] = $data['ssd_item']['dimensions'];
        $data['releaseDate'] = $data['ssd_item']['releaseDate'];
        $data['information'] = $data['ssd_item']['information'];
        $data['weight'] = $data['ssd_item']['weight'];
        $data['warranty'] = $data['ssd_item']['warranty'];

 
        $this->load->view('templates/header', $data);
        $this->load->view('ssd/view', $data);
        $this->load->view('templates/footer');
    }
    
    public function create()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');
 
        $data['title'] = 'Create new SSD';
 
        $this->form_validation->set_rules('serie', 'serie', 'required');
        $this->form_validation->set_rules('designer', 'designer', 'required');
        $this->form_validation->set_rules('price', 'price', 'required');
        $this->form_validation->set_rules('description', 'description', 'required');
        $this->form_validation->set_rules('construction', 'construction', 'required');
        $this->form_validation->set_rules('component', 'component', 'required');
        $this->form_validation->set_rules('capacity', 'capacity', 'required');
        $this->form_validation->set_rules('interface', 'interface', 'required');
        $this->form_validation->set_rules('read', 'read', 'required');
        $this->form_validation->set_rules('write', 'write', 'required');
        $this->form_validation->set_rules('chiptype', 'chiptype', 'required');
        $this->form_validation->set_rules('cache', 'cache', 'required');
        $this->form_validation->set_rules('powerConnector', 'powerConnector', 'required');
        $this->form_validation->set_rules('powerStart', 'powerStart', 'required');
        $this->form_validation->set_rules('powerStandby', 'powerStandby', 'required');
        $this->form_validation->set_rules('iopsRead', 'iopsRead', 'required');
        $this->form_validation->set_rules('iopsWrite', 'iopsWrite', 'required');
        $this->form_validation->set_rules('mtbf', 'mtbf', 'required');
        $this->form_validation->set_rules('trim', 'trim', 'required');
        $this->form_validation->set_rules('controller', 'controller', 'required');
        $this->form_validation->set_rules('accessoires', 'accessoires', 'required');
        $this->form_validation->set_rules('dimensions', 'dimensions', 'required');
        $this->form_validation->set_rules('releaseDate', 'releaseDate', 'required');
        $this->form_validation->set_rules('information', 'information', 'required');
        $this->form_validation->set_rules('weight', 'weight', 'required');
        $this->form_validation->set_rules('warranty', 'warranty', 'required');
 
        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('ssd/create');
            $this->load->view('templates/footer');
 
        }
        else
        {
            $this->ssd_model->set_ssd();
            $this->load->view('templates/header', $data);
            $this->load->view('ssd/success');
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
        
        $data['title'] = 'Edit SSD';        
        $data['ssd_item'] = $this->ssd_model->get_ssd_by_id($id);
        
        $this->form_validation->set_rules('serie', 'serie', 'required');
        $this->form_validation->set_rules('designer', 'designer', 'required');
        $this->form_validation->set_rules('price', 'price', 'required');
        $this->form_validation->set_rules('description', 'description', 'required');
        $this->form_validation->set_rules('construction', 'construction', 'required');
        $this->form_validation->set_rules('component', 'component', 'required');
        $this->form_validation->set_rules('capacity', 'capacity', 'required');
        $this->form_validation->set_rules('interface', 'interface', 'required');
        $this->form_validation->set_rules('read', 'read', 'required');
        $this->form_validation->set_rules('write', 'write', 'required');
        $this->form_validation->set_rules('chiptype', 'chiptype', 'required');
        $this->form_validation->set_rules('cache', 'cache', 'required');
        $this->form_validation->set_rules('powerConnector', 'powerConnector', 'required');
        $this->form_validation->set_rules('powerStart', 'powerStart', 'required');
        $this->form_validation->set_rules('powerStandby', 'powerStandby', 'required');
        $this->form_validation->set_rules('iopsRead', 'iopsRead', 'required');
        $this->form_validation->set_rules('iopsWrite', 'iopsWrite', 'required');
        $this->form_validation->set_rules('mtbf', 'mtbf', 'required');
        $this->form_validation->set_rules('trim', 'trim', 'required');
        $this->form_validation->set_rules('controller', 'controller', 'required');
        $this->form_validation->set_rules('accessoires', 'accessoires', 'required');
        $this->form_validation->set_rules('dimensions', 'dimensions', 'required');
        $this->form_validation->set_rules('releaseDate', 'releaseDate', 'required');
        $this->form_validation->set_rules('information', 'information', 'required');
        $this->form_validation->set_rules('weight', 'weight', 'required');
        $this->form_validation->set_rules('warranty', 'warranty', 'required');
 
        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('ssd/edit', $data);
            $this->load->view('templates/footer');
 
        }
        else
        {
            $this->ssd_model->set_ssd($id);
            $this->load->view('ssd/success');
            redirect( base_url() . 'index.php/ssd/index');
        }
    }
    
    public function delete()
    {
        $id = $this->uri->segment(3);
        
        if (empty($id))
        {
            show_404();
        }
                
        $ssd_item = $this->ssd_model->get_ssd_by_id($id);
        
        $this->ssd_model->delete_ssd($id);        
        redirect( base_url() . 'index.php/ssd/index');        
    }
}