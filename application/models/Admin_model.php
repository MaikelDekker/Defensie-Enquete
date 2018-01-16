<?php
class admin_model extends CI_Model {
 
    public function __construct()
    {
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
    
    public function set_admin($id = 0)
    {
        $this->load->helper('url');
 
        $slug = url_title($this->input->post('title'), 'dash', TRUE);
 
        $data = array(
            'title' => $this->input->post('title'),
            'slug' => $slug,
            'text' => $this->input->post('text')
        );
        
        if ($id == 0) {
            return $this->db->insert('admin', $data);
        } else {
            $this->db->where('id', $id);
            return $this->db->update('admin', $data);
        }
    }
    
    public function delete_admin($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('admin');
    }
}