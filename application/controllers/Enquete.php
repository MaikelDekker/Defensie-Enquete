<?php
class Enquete extends CI_Controller {
 
    public function __construct()
    {
        parent::__construct();
        $this->load->model('enquete_model');
        $this->load->helper('url_helper');
    }
 
    public function index()
    {
        $url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        $id = substr($url, strrpos($url, '/') + 1);

        $dbCon = mysqli_connect("localhost", "root", "", "enquete") or die (mysql_error());
        $query = "SELECT token FROM onetimelinks WHERE token = '$id'";
        $result = mysqli_query($dbCon, $query) or die (mysqli_error($dbCon));

        if ($result=mysqli_query($dbCon,$query ))
        {
          $numrows =mysqli_num_rows($result);      
        }

        if($numrows > 0)
        {
            $data['enquete'] = $this->enquete_model->get_enquete();
            $data['title'] = 'View of enquete';
     
            $this->load->view('templates/header', $data);
            $this->load->view('enquete/index', $data);
            $this->load->view('templates/footer');
            
            $query = "DELETE onetimelinks FROM onetimelinks WHERE token = '$id'";
            mysqli_query($dbCon, $query) or die (mysqli_error($dbCon));

            if($numrows > 1)
            {
                echo "dubbele link";
            }
        } else
        {
            echo 'False Token';
            $data['enquete'] = $this->enquete_model->get_enquete();
     
            $this->load->view('templates/header', $data);
            $this->load->view('templates/footer');
        }
        mysqli_close($dbCon);
    }
 
    public function view($slug = NULL)
    {
        $data['enquete_item'] = $this->enquete_model->get_enquete($slug);
        
        if (empty($data['enquete_item']))
        {
            show_404();
        }
 
        $data['title'] = $data['enquete_item']['title'];
 
        $this->load->view('templates/header', $data);
        $this->load->view('enquete/view', $data);
        $this->load->view('templates/footer');
    }
    
    public function create()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');
 
        $data['title'] = 'Create a enquete item';
 
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('text', 'Text', 'required');
 
        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('enquete/create');
            $this->load->view('templates/footer');
 
        }
        else
        {
            $this->enquete_model->set_enquete();
            $this->load->view('templates/header', $data);
            $this->load->view('enquete/success');
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
        
        $data['title'] = 'Edit a enquete item';        
        $data['enquete_item'] = $this->enquete_model->get_enquete_by_id($id);
        
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('text', 'Text', 'required');
 
        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('enquete/edit', $data);
            $this->load->view('templates/footer');
 
        }
        else
        {
            $this->enquete_model->set_enquete($id);
            //$this->load->view('enquete/success');
            redirect( base_url() . 'index.php/enquete/index');
        }
    }
    
    public function delete()
    {
        $id = $this->uri->segment(3);
        
        if (empty($id))
        {
            show_404();
        }
                
        $enquete_item = $this->enquete_model->get_enquete_by_id($id);
        
        $this->enquete_model->delete_enquete($id);        
        redirect( base_url() . 'index.php/enquete/index');        
    }
}