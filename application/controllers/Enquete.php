<?php
class Enquete extends CI_Controller {

        public function __construct()
        {
            parent::__construct();
            $this->load->model('Enquete_model');
            $this->load->helper('url_helper');
        }

        public function index()
        {
            $url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            $id = substr($url, strrpos($url, '/') + 1);

            $dbCon = mysqli_connect("localhost", "root", "", "enquete_marine") or die (mysql_error());
            $query = "SELECT token FROM onetimelinks WHERE token = '$id'";
            $result = mysqli_query($dbCon, $query) or die (mysqli_error($dbCon));

            if ($result=mysqli_query($dbCon,$query ))
            {
              $numrows =mysqli_num_rows($result);      
            }

            if($numrows > 0)
            {
                //Formulier
                $this->load->helper('form');
                $this->load->library('form_validation');

                $this->form_validation->set_rules('enqueteFullname', 'Volledige naam', 'required|trim|regex_match[/^[a-zA-Z ]+$/]');
                $this->form_validation->set_rules('enqueteEducation', 'Opleiding/blok', 'required');
                $this->form_validation->set_rules('enqueteClass', 'Klas', 'required|trim|regex_match[/^[a-zA-Z0-9]+$/]');
                $this->form_validation->set_rules('enquetePsoftnr', 'Psoft nummer', 'required');

                //Overige
                $data['educationEMV'] = $this->Enquete_model->get_educationBlocks('EMV Blok');
                $data['educationPotom'] = $this->Enquete_model->get_educationBlocks('POTOM');
                $data['questions'] = $this->Enquete_model->get_questions();
                //$data['questionsOpen'] = $this->Enquete_model->get_questionsOpen();
                $data['title'] = 'Enqu&ecirc;te';

                if ($this->form_validation->run() == FALSE)
                {
                    $this->load->view('templates/enquete_header', $data);
                    $this->load->view('enquete/index', $data);
                    $this->load->view('templates/enquete_footer');
                }
                else
                {
                    $query = "DELETE onetimelinks FROM onetimelinks WHERE token = '$id'";
                    mysqli_query($dbCon, $query) or die (mysqli_error($dbCon));
                    $this->Enquete_model->create_surveyAnswers();
                    $this->load->view('templates/enquete_header', $data);
                    $this->load->view('enquete/success');
                    $this->load->view('templates/enquete_footer');
                }

                /*$query = "DELETE onetimelinks FROM onetimelinks WHERE token = '$id'";
                mysqli_query($dbCon, $query) or die (mysqli_error($dbCon));*/

                if($numrows > 1)
                {
                    echo "dubbele link";
                }
            } else
            {
                echo 'False Token';
         
                /*$this->load->view('templates/header', $data);
                $this->load->view('templates/footer');*/
            }
            mysqli_close($dbCon);
        }
}