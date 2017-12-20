<?php
class Participant_model extends CI_Model {
 
    public function __construct()
    {
        $this->load->model("participant_model");
        $this->load->database("");
    }
    
    public function get_participant($slug = FALSE)
    {
        if ($slug === FALSE)
        {
            $query = $this->db->get('participant');
            return $query->result_array();
        }
 
        $query = $this->db->get_where('participant', array('slug' => $slug));
        return $query->row_array();
    }
    
    public function get_participant_by_id($id = 0)
    {
        if ($id === 0)
        {
            $query = $this->db->get('participant');
            return $query->result_array();
        }
 
        $query = $this->db->get_where('participant', array('id' => $id));
        return $query->row_array();
    }
    
    public function set_participant($id = 0)
    {
        $this->load->helper('url');
 
        $slug = url_title($this->input->post('title'), 'dash', TRUE);
 
        $data = array(
            'title' => $this->input->post('title'),
            'slug' => $slug,
            'text' => $this->input->post('text')
        );
        
        if ($id == 0) {
            return $this->db->insert('participant', $data);
        } else {
            $this->db->where('id', $id);
            return $this->db->update('participant', $data);
        }
    }
    
    public function delete_participant($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('participant');
    }

    public function invite_participant($token)
    {
        $dbCon = mysqli_connect("localhost", "root", "", "enquete") or die (mysql_error());
        $query = "INSERT INTO onetimelinks (token, tstamp) VALUES ('$token', '1')";
        mysqli_query($dbCon, $query) or die (mysqli_error($dbCon));
        $result = mysqli_affected_rows($dbCon);
        mysqli_close($dbCon);
    }

    public function get_onetimelinks($token = FALSE)
    {
        if ($token === FALSE)
        {
            $query = $this->db->get('onetimelinks');
            return $query->result_array();
        }
 
        $query = $this->db->get_where('onetimelinks', array('token' => $token));
        return $query->row_array();
    }

    public function clear_tokens()
    {
        $dbCon = mysqli_connect("localhost", "root", "", "enquete") or die (mysql_error());

        mysqli_query($dbCon, "DELETE FROM `onetimelinks` WHERE 1");
    }
}