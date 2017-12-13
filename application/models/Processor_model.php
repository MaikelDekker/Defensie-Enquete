<?php
class Processor_model extends CI_Model {
 
    public function __construct()
    {
        $this->load->database();
    }
    
    public function get_processor($slug = FALSE)
    {
        if ($slug === FALSE)
        {
            $query = $this->db->get('processor');
            return $query->result_array();
        }
 
        $query = $this->db->get_where('processor', array('slug' => $slug));
        return $query->row_array();
    }
    
    public function get_processor_by_id($id = 0)
    {
        if ($id === 0)
        {
            $query = $this->db->get('processor');
            return $query->result_array();
        }
 
        $query = $this->db->get_where('processor', array('id' => $id));
        return $query->row_array();
    }
    
    public function set_processor($id = 0)
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
            'cpuType' => $this->input->post('cpuType'),
            'clockSpeed' => $this->input->post('clockSpeed'),
            'turbomodus' => $this->input->post('turbomodus'),
            'microarchitecture' => $this->input->post('microarchitecture'),
            'cooler' => $this->input->post('cooler'),
            'size' => $this->input->post('size'),
            'memoryChannels' => $this->input->post('memoryChannels'),
            'memoryVoltage' => $this->input->post('memoryVoltage'),
            'supportedMemory' => $this->input->post('supportedMemory'),
            'socket' => $this->input->post('socket'),
            'cores' => $this->input->post('cores'),
            'threads' => $this->input->post('threads'),
            'cache' => $this->input->post('cache'),
            'tdp' => $this->input->post('tdp'),
            'gpu' => $this->input->post('gpu'),
            'multiCpuSystem' => $this->input->post('multiCpuSystem'),
            'gpuClockspeed' => $this->input->post('gpuClockspeed'),
            'busSpeed' => $this->input->post('busSpeed'),
            'releasedate' => $this->input->post('releaseDate'),
            'warranty' => $this->input->post('warranty'),
        );
        
        if ($id == 0) {
            return $this->db->insert('processor', $data);
        } else {
            $this->db->where('id', $id);
            return $this->db->update('processor', $data);
        }
    }
    
    public function delete_processor($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('processor');
    }
}