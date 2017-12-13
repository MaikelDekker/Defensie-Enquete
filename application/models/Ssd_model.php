<?php
class Ssd_model extends CI_Model {
 
    public function __construct()
    {
        $this->load->database();
    }
    
    public function get_ssd($slug = FALSE)
    {
        if ($slug === FALSE)
        {
            $query = $this->db->get('ssd');
            return $query->result_array();
        }
 
        $query = $this->db->get_where('ssd', array('slug' => $slug));
        return $query->row_array();
    }
    
    public function get_ssd_by_id($id = 0)
    {
        if ($id === 0)
        {
            $query = $this->db->get('ssd');
            return $query->result_array();
        }
 
        $query = $this->db->get_where('ssd', array('id' => $id));
        return $query->row_array();
    }
    
    public function set_ssd($id = 0)
    {
        $this->load->helper('url');
 
        $slug = url_title($this->input->post('serie'), 'dash', TRUE);
 
        $data = array(
            'serie' => $this->input->post('serie'),
            'slug' => $slug,
            'designer' => $this->input->post('designer'),
            'price' => $this->input->post('price'),
            'description' => $this->input->post('description'),
            'construction' => $this->input->post('construction'),
            'component' => $this->input->post('component'),
            'capacity' => $this->input->post('capacity'),
            'interface' => $this->input->post('interface'),
            'read' => $this->input->post('read'),
            'write' => $this->input->post('write'),
            'chiptype' => $this->input->post('chiptype'),
            'cache' => $this->input->post('cache'),
            'powerConnector' => $this->input->post('powerConnector'),
            'powerStart' => $this->input->post('powerStart'),
            'powerStandby' => $this->input->post('powerStandby'),
            'iopsRead' => $this->input->post('iopsRead'),
            'iopsWrite' => $this->input->post('iopsWrite'),
            'mtbf' => $this->input->post('mtbf'),
            'trim' => $this->input->post('trim'),
            'controller' => $this->input->post('controller'),
            'accessoires' => $this->input->post('accessoires'),
            'dimensions' => $this->input->post('dimensions'),
            'releaseDate' => $this->input->post('releaseDate'),
            'information' => $this->input->post('information'),
            'weight' => $this->input->post('weight'),
            'warranty' => $this->input->post('warranty')
        );
        
        if ($id == 0) {
            return $this->db->insert('ssd', $data);
        } else {
            $this->db->where('id', $id);
            return $this->db->update('ssd', $data);
        }
    }
    
    public function delete_ssd($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('ssd');
    }
}