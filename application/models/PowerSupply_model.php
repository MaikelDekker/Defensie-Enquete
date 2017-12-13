<?php
class PowerSupply_model extends CI_Model {
 
    public function __construct()
    {
        $this->load->database();
    }
    
    public function get_powerSupply($slug = FALSE)
    {
        if ($slug === FALSE)
        {
            $query = $this->db->get('powerSupply');
            return $query->result_array();
        }
 
        $query = $this->db->get_where('powerSupply', array('slug' => $slug));
        return $query->row_array();
    }
    
    public function get_powerSupply_by_id($id = 0)
    {
        if ($id === 0)
        {
            $query = $this->db->get('powerSupply');
            return $query->result_array();
        }
 
        $query = $this->db->get_where('powerSupply', array('id' => $id));
        return $query->row_array();
    }
    
    public function set_powerSupply($id = 0)
    {
        $this->load->helper('url');
 
        $slug = url_title($this->input->post('name'), 'dash', TRUE);
 
        $data = array(
            'name' => $this->input->post('name'),
            'slug' => $slug,
            'designer' => $this->input->post('designer'),
            'description' => $this->input->post('description'),
            'price' => $this->input->post('price'),
            'component' => $this->input->post('component'),
            'color' => $this->input->post('color'),
            'power' => $this->input->post('power'),
            '80plus' => $this->input->post('80plus'),
            'mtbf' => $this->input->post('mtbf'),
            'modular' => $this->input->post('modular'),
            'fanlessMode' => $this->input->post('fanlessMode'),
            'fanType' => $this->input->post('fanType'),
            'continuousTemp' => $this->input->post('continuousTemp'),
            'weight' => $this->input->post('weight'),
            'dimensions' => $this->input->post('dimensions'),
            'sleevedCables' => $this->input->post('sleevedCables'),
            'warranty' => $this->input->post('warranty'),
            'atxConnector' => $this->input->post('atxConnector'),
            'epsConnector' => $this->input->post('epsConnector'),
            'floppyConnector' => $this->input->post('floppyConnector'),
            'fourPinPeripheralConnector' => $this->input->post('fourPinPeripheralConnector'),
            'pcieConnector' => $this->input->post('pcieConnector'),
            'sataConnector' => $this->input->post('sataConnector'),
            'noise' => $this->input->post('noise'),
            'safety' => $this->input->post('safety'),
            'current33V' => $this->input->post('current33V'),
            'current5V' => $this->input->post('current5V'),
            'current5Vsb' => $this->input->post('current5Vsb'),
            'current12V' => $this->input->post('current12V'),
            'current12VJointly' => $this->input->post('current12VJointly'),
            'pfc' => $this->input->post('pfc'),
            'accessories' => $this->input->post('accessories'),
            'switch' => $this->input->post('switch'),
            '12VJointly' => $this->input->post('12VJointly'),
            '335VJointly' => $this->input->post('335VJointly'),
            'efficiency' => $this->input->post('efficiency'),
            'inputVoltageRange' => $this->input->post('inputVoltageRange'),
            'amperage' => $this->input->post('amperage'),
            'releaseDate' => $this->input->post('releaseDate'),
            'information' => $this->input->post('information'),
        );
        
        if ($id == 0) {
            return $this->db->insert('powerSupply', $data);
        } else {
            $this->db->where('id', $id);
            return $this->db->update('powerSupply', $data);
        }
    }
    
    public function delete_powerSupply($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('powerSupply');
    }
}