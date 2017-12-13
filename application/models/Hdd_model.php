<?php
class Hdd_model extends CI_Model {
 
    public function __construct()
    {
        $this->load->database();
    }
    
    public function get_hdd($slug = FALSE)
    {
        if ($slug === FALSE)
        {
            $query = $this->db->get('hdd');
            return $query->result_array();
        }
 
        $query = $this->db->get_where('hdd', array('slug' => $slug));
        return $query->row_array();
    }
    
    public function get_hdd_by_id($id = 0)
    {
        if ($id === 0)
        {
            $query = $this->db->get('hdd');
            return $query->result_array();
        }
 
        $query = $this->db->get_where('hdd', array('id' => $id));
        return $query->row_array();
    }
    
    public function set_hdd($id = 0)
    {
        $this->load->helper('url');
 
        $slug = url_title($this->input->post('name'), 'dash', TRUE);
 
        $data = array(
            'name' => $this->input->post('name'),
            'slug' => $slug,
            'designer' => $this->input->post('designer'),
            'description' => $this->input->post('description'),
            'price' => $this->input->post('price'),
            'construction' => $this->input->post('construction'),
            'component' => $this->input->post('component'),
            'capacity' => $this->input->post('capacity'),
            'interface' => $this->input->post('interface'),
            'read' => $this->input->post('read'),
            'rpm' => $this->input->post('rpm'),
            'cache' => $this->input->post('cache'),
            'volumeuse' => $this->input->post('volumeuse'),
            'volumestandby' => $this->input->post('volumestandby'),
            'powerread' => $this->input->post('powerread'),
            'powerstandby' => $this->input->post('powerstandby'),
            'powersleep' => $this->input->post('powersleep'),
            'poweridle' => $this->input->post('poweridle'),
            'dimensions' => $this->input->post('dimensions'),
            'information' => $this->input->post('information'),
            'weight' => $this->input->post('weight'),
            'warranty' => $this->input->post('warranty')
        );
        
        if ($id == 0) {
            return $this->db->insert('hdd', $data);
        } else {
            $this->db->where('id', $id);
            return $this->db->update('hdd', $data);
        }
    }
    
    public function delete_hdd($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('hdd');
    }
}