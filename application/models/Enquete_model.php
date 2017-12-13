<?php
class Enquete_model extends CI_Model {
 
    public function __construct()
    {
        $this->load->database();
    }
    
    public function get_enquete($slug = FALSE)
    {
        if ($slug === FALSE)
        {
            $query = $this->db->get('enquete');
            return $query->result_array();
        }
 
        $query = $this->db->get_where('enquete', array('slug' => $slug));
        return $query->row_array();
    }
    
    public function get_enquete_by_id($id = 0)
    {
        if ($id === 0)
        {
            $query = $this->db->get('enquete');
            return $query->result_array();
        }
 
        $query = $this->db->get_where('enquete', array('id' => $id));
        return $query->row_array();
    }
    
    public function set_enquete($id = 0)
    {
        $this->load->helper('url');
 
        $slug = url_title($this->input->post('title'), 'dash', TRUE);
 
        $data = array(
            'title' => $this->input->post('title'),
            'slug' => $slug,
            'text' => $this->input->post('text')
        );
        
        if ($id == 0) {
            return $this->db->insert('enquete', $data);
        } else {
            $this->db->where('id', $id);
            return $this->db->update('enquete', $data);
        }
    }
    
    public function delete_enquete($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('enquete');
    }
}