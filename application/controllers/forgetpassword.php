<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forgetpassword extends CI_Controller
{
    function __construct(){
    parent::__construct();
    $this->load->model('sendemail_model');
    }
     public function forgetpassword(){
     $this->load->view('forgetpassword');
    }

    public function sendemail(){
        $this->load->view('forgetpassword');
        $email = $_POST['email'];
        $this->load->model('sendemail_model');
        $data= $this->load->sendemail_model->verifyemail($email);
        //echo $this->db->last_query();die;
        //print_r($data); die; 
        if (!empty($data)){
            $sendemail =   $this->sendemail_model->sendemail($this->input->post('email'));
            


            if ($sendemail){

                $retmessage = json_encode(array('eremail'=>'Reset password link sent Successfully!','type'=>'success'));
                $this->session->set_flashdata('msg',$retmessage);
                redirect("forgetpassword/forgetpassword");
            } else  {
                $retmessage = json_encode(array('eremail'=>'Please! Enter Registered Email','type'=>'error'));
                $this->session->set_flashdata( 'msg',$retmessage );
                redirect("forgetpassword/forgetpassword");	
            }
        
    }	
     else
    {
        $retmessage = json_encode(array('eremail'=>'Something Went Wrong!','type'=>'error'));
        $this->session->set_flashdata('msg', $retmessage );
        redirect("forgetpassword/forgetpassword");	
    }
    }
}
