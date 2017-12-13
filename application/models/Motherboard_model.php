<?php
class Motherboard_model extends CI_Model {
 
    public function __construct()
    {
        $this->load->database();
    }
    
    public function get_motherboard($slug = FALSE)
    {
        if ($slug === FALSE)
        {
            $query = $this->db->get('motherboard');
            return $query->result_array();
        }
 
        $query = $this->db->get_where('motherboard', array('slug' => $slug));
        return $query->row_array();
    }
    
    public function get_motherboard_by_id($id = 0)
    {
        if ($id === 0)
        {
            $query = $this->db->get('motherboard');
            return $query->result_array();
        }
 
        $query = $this->db->get_where('motherboard', array('id' => $id));
        return $query->row_array();
    }
    
    public function set_motherboard($id = 0)
    {
        $this->load->helper('url');
 
        $slug = url_title($this->input->post('name'), 'dash', TRUE);
 
        $data = array(
            'name' => $this->input->post('name'),
            'slug' => $slug,
            'designer' => $this->input->post('designer'),
            'description' => $this->input->post('description'),
            'price' => $this->input->post('price'),
            'formfactor' => $this->input->post('formfactor'),
            'socket' => $this->input->post('socket'),
            'chipset' => $this->input->post('chipset'),
            'pciex1' => $this->input->post('pciex1'),
            'pciex16' => $this->input->post('pciex16'),
            'uefibios' => $this->input->post('uefibios'),
            'use' => $this->input->post('use'),
            'power' => $this->input->post('power'),
            'maxmemory' => $this->input->post('maxmemory'),
            'memoryslots' => $this->input->post('memoryslots'),
            'memoryranks' => $this->input->post('memoryranks'),
            'memorycontroller' => $this->input->post('memorycontroller'),
            'satacontroller' => $this->input->post('satacontroller'),
            'usbcontroller' => $this->input->post('usbcontroller'),
            'supportedcpu' => $this->input->post('supportedcpu'),
            'supportedtype' => $this->input->post('supportedtype'),
            'supportedstandard' => $this->input->post('supportedstandard'),
            'channels' => $this->input->post('channels'),
            'maxdatadensity' => $this->input->post('maxdatadensity'),
            'keyboard' => $this->input->post('keyboard'),
            'mice' => $this->input->post('mice'),
            'usb3' => $this->input->post('usb3'),
            'usb3c' => $this->input->post('usb3c'),
            'usb2' => $this->input->post('usb2'),
            'vga' => $this->input->post('vga'),
            'dvid' => $this->input->post('dvid'),
            'hdmi' => $this->input->post('hdmi'),
            'microphone' => $this->input->post('microphone'),
            'linein' => $this->input->post('linein'),
            'lineout' => $this->input->post('lineout'),
            'rj45' => $this->input->post('rj45'),
            'm2' => $this->input->post('m2'),
            'm2key' => $this->input->post('m2key'),
            'm2interface' => $this->input->post('m2interface'),
            'm2length' => $this->input->post('m2length'),
            'pwmfan' => $this->input->post('pwmfan'),
            'sounds' => $this->input->post('sounds'),
            'lan' => $this->input->post('lan'),
            'features' => $this->input->post('features'),
            'releasedate' => $this->input->post('releasedate'),
            'information' => $this->input->post('information'),
            'warranty' => $this->input->post('warranty'),


        );
        
        if ($id == 0) {
            return $this->db->insert('motherboard', $data);
        } else {
            $this->db->where('id', $id);
            return $this->db->update('motherboard', $data);
        }
    }
    
    public function delete_motherboard($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('motherboard');
    }
}