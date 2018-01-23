<?php
class admin_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    
    public function get_admin($slug = FALSE)
    {
        if ($slug === FALSE)
        {
            $query = $this->db->get('admin');
            return $query->result_array();
        }
 
        $query = $this->db->get_where('admin', array('slug' => $slug));
        return $query->row_array();
    }
    
    public function get_admin_by_id($id = 0)
    {
        if ($id === 0)
        {
            $query = $this->db->get('admin');
            return $query->result_array();
        }
 
        $query = $this->db->get_where('admin', array('id' => $id));
        return $query->row_array();
    }

    public function register_user($user){
   
   
    $this->db->insert('admin', $user);
   
    }
   
    public function login_user($email,$pass){
       
        $this->db->select('*');
        $this->db->from('admin');
        $this->db->where('user_email',$email);
        $this->db->where('user_password',$pass);
        
        if($query=$this->db->get())
        {
            return $query->row_array();
        }
        else{
          return false;
        }
    }
      
    public function email_check($email){
       
        $this->db->select('*');
        $this->db->from('admin');
        $this->db->where('user_email',$email);
        $query=$this->db->get();
                if($query->num_rows()>0){
          return false;
        }else{
          return true;
        }
    }
}