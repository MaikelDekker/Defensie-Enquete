<?php
class Motherboard extends CI_Controller {
 
    public function __construct()
    {
        parent::__construct();
        $this->load->model('motherboard_model');
        $this->load->helper('url_helper');
    }
 
    public function index()
    {
        $data['motherboard'] = $this->motherboard_model->get_motherboard();
        $data['title'] = 'List of Motherboards';
 
        $this->load->view('templates/header', $data);
        $this->load->view('motherboard/index', $data);
        $this->load->view('templates/footer');
    }
 
    public function view($slug = NULL)
    {
        $data['motherboard_item'] = $this->motherboard_model->get_motherboard($slug);
        
        if (empty($data['motherboard_item']))
        {
            show_404();
        }
 
        $data['name'] = $data['motherboard_item']['name'];
        $data['designer'] = $data['motherboard_item']['designer'];
        $data['description'] = $data['motherboard_item']['description'];
        $data['price'] = $data['motherboard_item']['price'];
        $data['formfactor'] = $data['motherboard_item']['formfactor'];
        $data['socket'] = $data['motherboard_item']['socket'];
        $data['chipset'] = $data['motherboard_item']['chipset'];
        $data['pciex1'] = $data['motherboard_item']['pciex1'];
        $data['pciex16'] = $data['motherboard_item']['pciex16'];
        $data['uefibios'] = $data['motherboard_item']['uefibios'];
        $data['use'] = $data['motherboard_item']['use'];
        $data['power'] = $data['motherboard_item']['power'];
        $data['maxmemory'] = $data['motherboard_item']['maxmemory'];
        $data['memoryslots'] = $data['motherboard_item']['memoryslots'];
        $data['memoryranks'] = $data['motherboard_item']['memoryranks'];
        $data['memorycontroller'] = $data['motherboard_item']['memorycontroller'];
        $data['satacontroller'] = $data['motherboard_item']['satacontroller'];
        $data['usbcontroller'] = $data['motherboard_item']['usbcontroller'];
        $data['supportedtype'] = $data['motherboard_item']['supportedtype'];
        $data['supportedstandard'] = $data['motherboard_item']['supportedstandard'];
        $data['supportedcpu'] = $data['motherboard_item']['supportedcpu'];
        $data['channels'] = $data['motherboard_item']['channels'];
        $data['maxdatadensity'] = $data['motherboard_item']['maxdatadensity'];
        $data['keyboard'] = $data['motherboard_item']['keyboard'];
        $data['mice'] = $data['motherboard_item']['mice'];
        $data['usb3'] = $data['motherboard_item']['usb3'];
        $data['usb3c'] = $data['motherboard_item']['usb3c'];
        $data['usb2'] = $data['motherboard_item']['usb2'];
        $data['vga'] = $data['motherboard_item']['vga'];
        $data['dvid'] = $data['motherboard_item']['dvid'];
        $data['hdmi'] = $data['motherboard_item']['hdmi'];
        $data['microphone'] = $data['motherboard_item']['microphone'];
        $data['linein'] = $data['motherboard_item']['linein'];
        $data['lineout'] = $data['motherboard_item']['lineout'];
        $data['rj45'] = $data['motherboard_item']['rj45'];
        $data['m2'] = $data['motherboard_item']['m2'];
        $data['m2key'] = $data['motherboard_item']['m2key'];
        $data['m2interface'] = $data['motherboard_item']['m2interface'];
        $data['m2length'] = $data['motherboard_item']['m2length'];
        $data['pwmfan'] = $data['motherboard_item']['pwmfan'];
        $data['sounds'] = $data['motherboard_item']['sounds'];
        $data['lan'] = $data['motherboard_item']['lan'];
        $data['features'] = $data['motherboard_item']['features'];
        $data['releasedate'] = $data['motherboard_item']['releasedate'];

        $data['information'] = $data['motherboard_item']['information'];
        $data['warranty'] = $data['motherboard_item']['warranty'];


 
        $this->load->view('templates/header', $data);
        $this->load->view('motherboard/view', $data);
        $this->load->view('templates/footer');
    }
    
    public function create()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');
 
        $data['title'] = 'Create a new motherboard';
 
        $this->form_validation->set_rules('name', 'name', 'required');
        $this->form_validation->set_rules('designer', 'designer', 'required');
        $this->form_validation->set_rules('description', 'description', 'required');
        $this->form_validation->set_rules('price', 'price', 'required');
        $this->form_validation->set_rules('formfactor', 'formfactor', 'required');
        $this->form_validation->set_rules('socket', 'socket', 'required');
        $this->form_validation->set_rules('chipset', 'chipset', 'required');
        $this->form_validation->set_rules('pciex1', 'pciex1', 'required');
        $this->form_validation->set_rules('pciex16', 'pciex16', 'required');
        $this->form_validation->set_rules('uefibios', 'uefibios', 'required');
        $this->form_validation->set_rules('use', 'use', 'required');
        $this->form_validation->set_rules('power', 'power', 'required');
        $this->form_validation->set_rules('maxmemory', 'maxmemory', 'required');
        $this->form_validation->set_rules('memoryslots', 'memoryslots', 'required');
        $this->form_validation->set_rules('memoryranks', 'memoryranks', 'required');
        $this->form_validation->set_rules('memorycontroller', 'memorycontroller', 'required');
        $this->form_validation->set_rules('usbcontroller', 'usbcontroller', 'required');
        $this->form_validation->set_rules('satacontroller', 'satacontroller', 'required');
        $this->form_validation->set_rules('supportedtype', '', 'required');
        $this->form_validation->set_rules('supportedstandard', 'supportedstandard', 'required');
        $this->form_validation->set_rules('supportedcpu', 'supportedcpu', 'required');
        $this->form_validation->set_rules('channels', 'channels', 'required');
        $this->form_validation->set_rules('maxdatadensity', 'maxdatadensity', 'required');
        $this->form_validation->set_rules('keyboard', 'keyboard', 'required');
        $this->form_validation->set_rules('mice', 'mice', 'required');
        $this->form_validation->set_rules('usb3', 'usb3', 'required');
        $this->form_validation->set_rules('usb3c', 'usb3c', 'required');
        $this->form_validation->set_rules('usb2', 'usb2', 'required');
        $this->form_validation->set_rules('vga', 'vga', 'required');
        $this->form_validation->set_rules('dvid', 'dvid', 'required');
        $this->form_validation->set_rules('hdmi', 'hdmi', 'required');
        $this->form_validation->set_rules('microphone', 'microphone', 'required');
        $this->form_validation->set_rules('linein', 'linein', 'required');
        $this->form_validation->set_rules('lineout', 'lineout', 'required');
        $this->form_validation->set_rules('rj45', 'rj45', 'required');
        $this->form_validation->set_rules('m2', 'm2', 'required');
        $this->form_validation->set_rules('m2key', 'm2key', 'required');
        $this->form_validation->set_rules('m2interface', 'm2interface', 'required');
        $this->form_validation->set_rules('m2length', 'm2length', 'required');
        $this->form_validation->set_rules('pwmfan', 'pwmfan', 'required');
        $this->form_validation->set_rules('sounds', 'sounds', 'required');
        $this->form_validation->set_rules('lan', 'lan', 'required');
        $this->form_validation->set_rules('features', 'features', 'required');
        $this->form_validation->set_rules('releasedate', 'releasedate', 'required');
        $this->form_validation->set_rules('information', 'information', 'required');
        $this->form_validation->set_rules('warranty', 'warranty', 'required');

 
        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('motherboard/create');
            $this->load->view('templates/footer');
 
        }
        else
        {
            $this->motherboard_model->set_motherboard();
            $this->load->view('templates/header', $data);
            $this->load->view('motherboard/success');
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
        
        $data['title'] = 'Edit a motherboard item';        
        $data['motherboard_item'] = $this->motherboard_model->get_motherboard_by_id($id);
        
        $this->form_validation->set_rules('name', 'name', 'required');
        $this->form_validation->set_rules('designer', 'designer', 'required');
        $this->form_validation->set_rules('description', 'description', 'required');
        $this->form_validation->set_rules('price', 'price', 'required');
        $this->form_validation->set_rules('formfactor', 'formfactor', 'required');
        $this->form_validation->set_rules('socket', 'socket', 'required');
        $this->form_validation->set_rules('chipset', 'chipset', 'required');
        $this->form_validation->set_rules('pciex1', 'pciex1', 'required');
        $this->form_validation->set_rules('pciex16', 'pciex16', 'required');
        $this->form_validation->set_rules('uefibios', 'uefibios', 'required');
        $this->form_validation->set_rules('use', 'use', 'required');
        $this->form_validation->set_rules('power', 'power', 'required');
        $this->form_validation->set_rules('maxmemory', 'maxmemory', 'required');
        $this->form_validation->set_rules('memoryslots', 'memoryslots', 'required');
        $this->form_validation->set_rules('memoryranks', 'memoryranks', 'required');
        $this->form_validation->set_rules('memorycontroller', 'memorycontroller', 'required');
        $this->form_validation->set_rules('usbcontroller', 'usbcontroller', 'required');
        $this->form_validation->set_rules('satacontroller', 'satacontroller', 'required');
        $this->form_validation->set_rules('supportedtype', '', 'required');
        $this->form_validation->set_rules('supportedstandard', 'supportedstandard', 'required');
        $this->form_validation->set_rules('supportedcpu', 'supportedcpu', 'required');
        $this->form_validation->set_rules('channels', 'channels', 'required');
        $this->form_validation->set_rules('maxdatadensity', 'maxdatadensity', 'required');
        $this->form_validation->set_rules('keyboard', 'keyboard', 'required');
        $this->form_validation->set_rules('mice', 'mice', 'required');
        $this->form_validation->set_rules('usb3', 'usb3', 'required');
        $this->form_validation->set_rules('usb3c', 'usb3c', 'required');
        $this->form_validation->set_rules('usb2', 'usb2', 'required');
        $this->form_validation->set_rules('vga', 'vga', 'required');
        $this->form_validation->set_rules('dvid', 'dvid', 'required');
        $this->form_validation->set_rules('hdmi', 'hdmi', 'required');
        $this->form_validation->set_rules('microphone', 'microphone', 'required');
        $this->form_validation->set_rules('linein', 'linein', 'required');
        $this->form_validation->set_rules('lineout', 'lineout', 'required');
        $this->form_validation->set_rules('rj45', 'rj45', 'required');
        $this->form_validation->set_rules('m2', 'm2', 'required');
        $this->form_validation->set_rules('m2key', 'm2key', 'required');
        $this->form_validation->set_rules('m2interface', 'm2interface', 'required');
        $this->form_validation->set_rules('m2length', 'm2length', 'required');
        $this->form_validation->set_rules('pwmfan', 'pwmfan', 'required');
        $this->form_validation->set_rules('sounds', 'sounds', 'required');
        $this->form_validation->set_rules('lan', 'lan', 'required');
        $this->form_validation->set_rules('features', 'features', 'required');
        $this->form_validation->set_rules('releasedate', 'releasedate', 'required');
        $this->form_validation->set_rules('information', 'information', 'required');
        $this->form_validation->set_rules('warranty', 'warranty', 'required');
 
        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('motherboard/edit', $data);
            $this->load->view('templates/footer');
 
        }
        else
        {
            $this->motherboard_model->set_motherboard($id);
            $this->load->view('motherboard/success');
            redirect( base_url() . 'index.php/motherboard/index');
        }
    }
    
    public function delete()
    {
        $id = $this->uri->segment(3);
        
        if (empty($id))
        {
            show_404();
        }
                
        $motherboard_item = $this->motherboard_model->get_motherboard_by_id($id);
        
        $this->motherboard_model->delete_motherboard($id);        
        redirect( base_url() . 'index.php/motherboard/index');        
    }
}