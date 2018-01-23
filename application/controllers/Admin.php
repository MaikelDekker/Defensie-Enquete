<?php
class admin extends CI_Controller {
 
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin_model');
        $this->load->helper('url_helper');
        $this->load->library(array('session'));
        $this->load->helper(array('url'));
    }

    public function results()
    {
        $data['admin'] = $this->admin_model->get_admin();
        $data['title'] = 'Results';
 
        $this->load->view('templates/header', $data);
        $this->load->view('admin/results', $data);
        $this->load->view('templates/footer');
    }

    public function register_view(){
 
        $this->load->view("admin/register.php");
     
    }

    public function register_user(){
     
          $user=array(
          'user_name'=>$this->input->post('user_name'),
          'user_email'=>$this->input->post('user_email'),
          'user_password'=>md5($this->input->post('user_password'))
            );
            print_r($user);
     
    $email_check=$this->admin_model->email_check($user['user_email']);
     
    if($email_check){
      $this->admin_model->register_user($user);
      $this->session->set_flashdata('success_msg', 'Account succesvol aangemaakt! U kunt nu inloggen.');
      redirect('admin/login_view');
     
    }
    else{
     
      $this->session->set_flashdata('error_msg', 'Error occured,Try again.');
      redirect('admin');
     
     
    }
     
    }
     
    public function login_view(){
     
        $this->load->view("admin/login.php");
     
    }
     
    function login_user(){
      $user_login=array(
     
      'user_email'=>$this->input->post('user_email'),
      'user_password'=>md5($this->input->post('user_password'))
     
        );
     
        $data=$this->admin_model->login_user($user_login['user_email'],$user_login['user_password']);
          if($data)
          {
            $this->session->set_userdata('user_id',$data['user_id']);
            $this->session->set_userdata('user_email',$data['user_email']);
            $this->session->set_userdata('user_name',$data['user_name']);
     
            $data['title'] = 'Homepage';
            $this->load->view('admin/index.php', $data);     
          }
          else{
            $this->session->set_flashdata('error_msg', 'Error, probeer het nog eens.');
            $this->load->view("admin/login.php");     
          }
     
     
    }
     
    function user_profile(){
     
    $this->load->view('admin/user_profile.php');
     
    }
    public function user_logout(){
     
      $this->session->sess_destroy();
      redirect('admin/login_view', 'refresh');
    }
}