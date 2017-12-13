<?php
class Cases extends CI_Controller {
 
    public function __construct()
    {
        parent::__construct();
        $this->load->model('case_model');
        $this->load->helper('url_helper');
    }
 
    public function index()
    {
        $data['case'] = $this->case_model->get_case();
        $data['title'] = 'List of Cases';
 
        $this->load->view('templates/header', $data);
        $this->load->view('cases/index', $data);
        $this->load->view('templates/footer');
    }
 
    public function view($slug = NULL)
    {
        $data['case_item'] = $this->case_model->get_case($slug);
        
        if (empty($data['case_item']))
        {
            show_404();
        }
 
        $data['id'] = $data['case_item']['id'];
        $data['designer'] = $data['case_item']['designer'];
        $data['description'] = $data['case_item']['description'];
        $data['color'] = $data['case_item']['color'];
        $data['price'] = $data['case_item']['price'];
        $data['type'] = $data['case_item']['type'];
        $data['construction'] = $data['case_item']['construction'];
        $data['motherboardsize'] = $data['case_item']['motherboardsize'];
        $data['lengthgpu'] = $data['case_item']['lengthgpu'];
        $data['heightcooler'] = $data['case_item']['heightcooler'];
        $data['lengthcooler'] = $data['case_item']['lengthcooler'];
        $data['powersupply'] = $data['case_item']['powersupply'];
        $data['extern525'] = $data['case_item']['extern525'];
        $data['toolles525'] = $data['case_item']['toolles525'];
        $data['intern35'] = $data['case_item']['intern35'];
        $data['toolles35'] = $data['case_item']['toolles35'];
        $data['intern25'] = $data['case_item']['intern25'];
        $data['fullsizeslots'] = $data['case_item']['fullsizeslots'];
        $data['watercooling'] = $data['case_item']['watercooling'];
        $data['windowkit'] = $data['case_item']['windowkit'];
        $data['dimensions'] = $data['case_item']['dimensions'];
        $data['releasedate'] = $data['case_item']['releasedate'];
        $data['information'] = $data['case_item']['information'];
        $data['weight'] = $data['case_item']['weight'];
        $data['warranty'] = $data['case_item']['warranty'];
 
        $this->load->view('templates/header', $data);
        $this->load->view('cases/view', $data);
        $this->load->view('templates/footer');
    }
    
    public function create()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');
 
        $data['title'] = 'Create a new case';
 
        $this->form_validation->set_rules('name', 'name', 'required');
        $this->form_validation->set_rules('designer', 'designer', 'required');
        $this->form_validation->set_rules('description', 'description', 'required');
        $this->form_validation->set_rules('color', 'color', 'required');
        $this->form_validation->set_rules('price', 'price', 'required');
        $this->form_validation->set_rules('type', 'type', 'required');
        $this->form_validation->set_rules('construction', 'construction', 'required');
        $this->form_validation->set_rules('motherboardsize', 'motherboardsize', 'required');
        $this->form_validation->set_rules('lengthgpu', 'lengthgpu', 'required');
        $this->form_validation->set_rules('heightcooler', 'heightcooler', 'required');
        $this->form_validation->set_rules('lengthcooler', 'lengthcooler', 'required');
        $this->form_validation->set_rules('powersupply', 'powersupply', 'required');
        $this->form_validation->set_rules('extern525', 'extern525', 'required');
        $this->form_validation->set_rules('toolles525', 'toolles525', 'required');
        $this->form_validation->set_rules('intern35', 'intern35', 'required');
        $this->form_validation->set_rules('toolles35', 'toolles35', 'required');
        $this->form_validation->set_rules('intern25', 'intern25', 'required');
        $this->form_validation->set_rules('fullsizeslots', 'fullsizeslots', 'required');
        $this->form_validation->set_rules('watercooling', 'watercooling', 'required');
        $this->form_validation->set_rules('windowkit', 'windowkit', 'required');
        $this->form_validation->set_rules('dimensions', 'dimensions', 'required');
        $this->form_validation->set_rules('releasedate', 'releasedate', 'required');
        $this->form_validation->set_rules('information', 'information', 'required');
        $this->form_validation->set_rules('weight', 'weight', 'required');
        $this->form_validation->set_rules('warranty', 'warranty', 'required');

 
        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('cases/create');
            $this->load->view('templates/footer');
 
        }
        else
        {
            $this->case_model->set_case();
            $this->load->view('templates/header', $data);
            $this->load->view('cases/success');
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
        
        $data['title'] = 'Edit a case';        
        $data['case_item'] = $this->case_model->get_case_by_id($id);
        
        $this->form_validation->set_rules('name', 'name', 'required');
        $this->form_validation->set_rules('designer', 'designer', 'required');
        $this->form_validation->set_rules('description', 'description', 'required');
        $this->form_validation->set_rules('color', 'color', 'required');
        $this->form_validation->set_rules('price', 'price', 'required');
        $this->form_validation->set_rules('type', 'type', 'required');
        $this->form_validation->set_rules('construction', 'construction', 'required');
        $this->form_validation->set_rules('motherboardsize', 'motherboardsize', 'required');
        $this->form_validation->set_rules('lengthgpu', 'lengthgpu', 'required');
        $this->form_validation->set_rules('heightcooler', 'heightcooler', 'required');
        $this->form_validation->set_rules('lengthcooler', 'lengthcooler', 'required');
        $this->form_validation->set_rules('powersupply', 'powersupply', 'required');
        $this->form_validation->set_rules('extern525', 'extern525', 'required');
        $this->form_validation->set_rules('toolles525', 'toolles525', 'required');
        $this->form_validation->set_rules('intern35', 'intern35', 'required');
        $this->form_validation->set_rules('toolles35', 'toolles35', 'required');
        $this->form_validation->set_rules('intern25', 'intern25', 'required');
        $this->form_validation->set_rules('fullsizeslots', 'fullsizeslots', 'required');
        $this->form_validation->set_rules('watercooling', 'watercooling', 'required');
        $this->form_validation->set_rules('windowkit', 'windowkit', 'required');
        $this->form_validation->set_rules('dimensions', 'dimensions', 'required');
        $this->form_validation->set_rules('releasedate', 'releasedate', 'required');
        $this->form_validation->set_rules('information', 'information', 'required');
        $this->form_validation->set_rules('weight', 'weight', 'required');
        $this->form_validation->set_rules('warranty', 'warranty', 'required');
 
        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('cases/edit', $data);
            $this->load->view('templates/footer');
 
        }
        else
        {
            $this->case_model->set_case($id);
            $this->load->view('cases/success');
            redirect( base_url() . 'index.php/caseS/index');
        }
    }
    
    public function delete()
    {
        $id = $this->uri->segment(3);
        
        if (empty($id))
        {
            show_404();
        }
                
        $case_item = $this->case_model->get_case_by_id($id);
        
        $this->case_model->delete_case($id);        
        redirect( base_url() . 'index.php/cases/index');        
    }
}