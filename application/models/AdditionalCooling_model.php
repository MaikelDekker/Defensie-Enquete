<?php
class AdditionalCooling_model extends CI_Model {
 
    public function __construct()
    {
        $this->load->database();
    }
    
    public function get_additionalCooling($slug = FALSE)
    {
        if ($slug === FALSE)
        {
            $query = $this->db->get('additionalCooling');
            return $query->result_array();
        }
 
        $query = $this->db->get_where('additionalCooling', array('slug' => $slug));
        return $query->row_array();
    }
    
    public function get_additionalCooling_by_id($id = 0)
    {
        if ($id === 0)
        {
            $query = $this->db->get('additionalCooling');
            return $query->result_array();
        }
 
        $query = $this->db->get_where('additionalCooling', array('id' => $id));
        return $query->row_array();
    }
    
    public function set_additionalCooling($id = 0)
    {
        $this->load->helper('url');
 
        $slug = url_title($this->input->post('name'), 'dash', TRUE);
 
        $data = array(
            'name' => $this->input->post('name'),
            'component' => $this->input->post('component'),
            'slug' => $slug,
            'designer' => $this->input->post('designer'),
            'color' => $this->input->post('color'),
            'color2' => $this->input->post('color2'),
            'ledColor' => $this->input->post('ledColor'),
            'price' => $this->input->post('price'),
            'type' => $this->input->post('type'),
            'dimensions' => $this->input->post('dimensions'),
            'fanSize' => $this->input->post('fanSize'),
            'fanType' => $this->input->post('fanType'),
            'description' => $this->input->post('description'),
            'specialInfo' => $this->input->post('specialInfo'),
            'material' => $this->input->post('material'),
            'compatibility' => $this->input->post('compatibility'),
            'attachment' => $this->input->post('attachment'),
            'decibel' => $this->input->post('decibel'),
            'speed' => $this->input->post('speed'),
            'airMovement' => $this->input->post('airMovement'),
            'connection' => $this->input->post('connection'),
            'warranty' => $this->input->post('warranty'),
            'cableLength' => $this->input->post('cableLength'),
            'voltage' => $this->input->post('voltage'),
            'mtbf' => $this->input->post('mtbf'),
            'coolant' => $this->input->post('coolant'),
            'radiatorSize' => $this->input->post('radiatorSize'),
            'releasedate' => $this->input->post('releasedate'),
        );
        
        if ($id == 0) {
            return $this->db->insert('additionalCooling', $data);
        } else {
            $this->db->where('id', $id);
            return $this->db->update('additionalCooling', $data);
        }
    }
    
    public function delete_additionalCooling($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('additionalCooling');
    }
}