<?php
class Enquetenieuw_model extends CI_Model {

    public function __construct()
    {
            $this->load->database();
    }

	public function get_questions()
	{
	        $query = $this->db->get('survey_questions');
			return $query->result_array();
	}

	public function get_questionsOpen()
	{
	        $query = $this->db->get('survey_questions_open');
			return $query->result_array();
	}

	public function get_educationBlocks($type)
	{
	        $query = $this->db->query("SELECT `id`,`educationBlocks`,`type` FROM `educationBlocks` WHERE `type` = ? ORDER BY `id` DESC", array($type));
	        return $query->result_array();
	}

    public function create_surveyAnswers()
    {
        $this->load->helper('url');

        /* $dataParticipant = array(
            'fullName' => $this->input->post('enqueteFullname'),
            'education' => $this->input->post('enqueteEducation'),
            'class' => $this->input->post('enqueteClass'),
            'psoftnr' => $this->input->post('enquetePsoftnr')
        );
        $this->db->insert('participants', $dataParticipant); */

        $dataAnswers = array(
            'fullName' => $this->input->post('enqueteFullname'),
            'education' => $this->input->post('enqueteEducation'),
            'class' => $this->input->post('enqueteClass'),
            'psoftNr' => $this->input->post('enquetePsoftnr'),
            'answerQ1' => $this->input->post('question1'),
            'answerQ2' => $this->input->post('question2'),
            'answerQ3' => $this->input->post('question3'),
            'answerQ4' => $this->input->post('question4'),
            'answerQ5' => $this->input->post('question5'),
            'answerQ6' => $this->input->post('question6'),
            'answerQ7' => $this->input->post('question7'),
            'answerQ8' => $this->input->post('question8'),
            'answerQ9' => $this->input->post('question9'),
            'answerQ10' => $this->input->post('question10'),
            'answerQ11' => $this->input->post('question11'),
            'answerQ12' => $this->input->post('question12'),
            'answerQ13' => $this->input->post('question13'),
            'answerQ14' => $this->input->post('question14'),
            'answerQ15' => $this->input->post('question15'),
            'answerQ16' => $this->input->post('question16'),
            'answerQ17' => $this->input->post('question17'),
            'answerQopen' => $this->input->post('question18')
        );
        $this->db->set('weekNr', date("W"), FALSE);
        $this->db->set('answerTimestamp', 'UNIX_TIMESTAMP()', FALSE);

        return $this->db->insert('survey_answers', $dataAnswers);
    }
}