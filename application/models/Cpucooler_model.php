<?php
class Cpucooler_model extends CI_Model {
 
    public function __construct()
    {
        $this->load->database();
    }
    
    public function get_cpucooler($slug = FALSE)
    {
        if ($slug === FALSE)
        {
            $query = $this->db->get('cpucooler');
            return $query->result_array();
        }
 
        $query = $this->db->get_where('cpucooler', array('slug' => $slug));
        return $query->row_array();
    }
    
    public function get_cpucooler_by_id($id = 0)
    {
        if ($id === 0)
        {
            $query = $this->db->get('cpucooler');
            return $query->result_array();
        }
 
        $query = $this->db->get_where('cpucooler', array('id' => $id));
        return $query->row_array();
    }
    
    public function set_cpucooler($id = 0)
    {
        $this->load->helper('url');
 
        $slug = url_title($this->input->post('name'), 'dash', TRUE);
 
        $data = array(
            'name' => $this->input->post('name'),
            'slug' => $slug,
            'designer' => $this->input->post('designer'),
            'price' => $this->input->post('price'),
            'description' => $this->input->post('description'),
            'component' => $this->input->post('component'),
            'sockets' => $this->input->post('sockets'),
            'attachment' => $this->input->post('attachment'),
            'soundlevel' => $this->input->post('soundlevel'),
            'cpu' => $this->input->post('cpu'),
            'equipment' => $this->input->post('equipment'),
            'ledcolors' => $this->input->post('ledcolors'),
            'rpm' => $this->input->post('rpm'),
            'material' => $this->input->post('material'),
            'heatpipeconnections' => $this->input->post('heatpipeconnections'),
            'airflow' => $this->input->post('airflow'),
            'staticpressure' => $this->input->post('staticpressure'),
            'powerconnector' => $this->input->post('powerconnector'),
            'accessoires' => $this->input->post('accessoires'),
            'leds' => $this->input->post('leds'),
            'bearings' => $this->input->post('bearings'),
            'impeller' => $this->input->post('impeller'),
            'heatpipes' => $this->input->post('heatpipes'),
            'dimensions' => $this->input->post('dimensions'),
            'weight' => $this->input->post('weight'),
            'information' => $this->input->post('information'),
            'releasedate' => $this->input->post('releasedate'),
            'warranty' => $this->input->post('warranty')
        );
        
        if ($id == 0) {
            return $this->db->insert('cpucooler', $data);
        } else {
            $this->db->where('id', $id);
            return $this->db->update('cpucooler', $data);
        }
    }
    
    public function delete_cpucooler($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('cpucooler');
    }
}