<?php
class Videocard_model extends CI_Model {
 
    public function __construct()
    {
        $this->load->database();
    }
    
    public function get_videocard($slug = FALSE)
    {
        if ($slug === FALSE)
        {
            $query = $this->db->get('videocard');
            return $query->result_array();
        }
 
        $query = $this->db->get_where('videocard', array('slug' => $slug));
        return $query->row_array();
    }
    
    public function get_videocard_by_id($id = 0)
    {
        if ($id === 0)
        {
            $query = $this->db->get('videocard');
            return $query->result_array();
        }
 
        $query = $this->db->get_where('videocard', array('id' => $id));
        return $query->row_array();
    }
    
    public function set_videocard($id = 0)
    {
        $this->load->helper('url');
 
        $slug = url_title($this->input->post('name'), 'dash', TRUE);
 
        $data = array(
            'name' => $this->input->post('name'),
            'slug' => $slug,
            'designer' => $this->input->post('designer'),
            'series' => $this->input->post('series'),
            'description' => $this->input->post('description'),
            'price' => $this->input->post('price'),
            'clockingSpeed' => $this->input->post('clockingSpeed'),
            'boostSpeed' => $this->input->post('boostSpeed'),
            'streamProcessors' => $this->input->post('streamProcessors'),
            'features' => $this->input->post('features'),
            'directx' => $this->input->post('directx'),
            'opengl' => $this->input->post('opengl'),
            'memoryAmount' => $this->input->post('memoryAmount'),
            'memoryType' => $this->input->post('memoryType'),
            'memoryInterface' => $this->input->post('memoryInterface'),
            'memorySpeed' => $this->input->post('memorySpeed'),
            'displayport' => $this->input->post('displayport'),
            'displayportVer' => $this->input->post('displayportVer'),
            'dviD' => $this->input->post('dviD'),
            'dviDualChannels' => $this->input->post('dviDualChannels'),
            'slotsUsed' => $this->input->post('slotsUsed'),
            'dviHdcp' => $this->input->post('dviHdcp'),
            'hdmi' => $this->input->post('hdmi'),
            'hdmiVer' => $this->input->post('hdmiVer'),
            'multiGpu' => $this->input->post('multiGpu'),
            'tdp' => $this->input->post('tdp'),
            'connection' => $this->input->post('connection'),
            'extra' => $this->input->post('extra'),
            'vrReady' => $this->input->post('vrReady'),
            'gSync' => $this->input->post('gSync'),
            'sli' => $this->input->post('sli'),
            'crossfire' => $this->input->post('crossfire'),
            'releasedate' => $this->input->post('releaseDate'),
            'warranty' => $this->input->post('warranty'),
            'dimensions' => $this->input->post('dimensions'),
        );
        
        if ($id == 0) {
            return $this->db->insert('videocard', $data);
        } else {
            $this->db->where('id', $id);
            return $this->db->update('videocard', $data);
        }
    }
    
    public function delete_videocard($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('videocard');
    }
}