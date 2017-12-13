<?php
class Case_model extends CI_Model {
 
    public function __construct()
    {
        $this->load->database();
    }
    
    public function get_case($slug = FALSE)
    {
        if ($slug === FALSE)
        {
            $query = $this->db->get('case');
            return $query->result_array();
        }
 
        $query = $this->db->get_where('case', array('slug' => $slug));
        return $query->row_array();
    }
    
    public function get_case_by_id($id = 0)
    {
        if ($id === 0)
        {
            $query = $this->db->get('case');
            return $query->result_array();
        }
 
        $query = $this->db->get_where('case', array('id' => $id));
        return $query->row_array();
    }
    
    public function set_case($id = 0)
    {
        $this->load->helper('url');
 
        $slug = url_title($this->input->post('name'), 'dash', TRUE);
 
        $data = array(
            'name' => $this->input->post('name'),
            'designer' => $this->input->post('designer'),
            'description' => $this->input->post('description'),
            'color' => $this->input->post('color'),
            'price' => $this->input->post('price'),
            'type' => $this->input->post('type'),
            'construction' => $this->input->post('construction'),
            'motherboardsize' => $this->input->post('motherboardsize'),
            'lengthgpu' => $this->input->post('lengthgpu'),
            'heightcooler' => $this->input->post('heightcooler'),
            'lengthcooler' => $this->input->post('lengthcooler'),
            'powersupply' => $this->input->post('powersupply'),
            'extern525' => $this->input->post('extern525'),
            'toolles525' => $this->input->post('toolles525'),
            'intern35' => $this->input->post('intern35'),
            'toolles35' => $this->input->post('toolles35'),
            'intern25' => $this->input->post('intern25'),
            'fullsizeslots' => $this->input->post('fullsizeslots'),
            'watercooling' => $this->input->post('watercooling'),
            'windowkit' => $this->input->post('windowkit'),
            'dimensions' => $this->input->post('dimensions'),
            'releasedate' => $this->input->post('releasedate'),
            'information' => $this->input->post('information'),
            'weight' => $this->input->post('weight'),
            'warranty' => $this->input->post('warranty'),
            'id' => $id,
        );
        
        if ($id == 0) {
            return $this->db->insert('case', $data);
        } else {
            $this->db->where('id', $id);
            return $this->db->update('case', $data);
        }
    }
    
    public function delete_case($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('case');
    }
}