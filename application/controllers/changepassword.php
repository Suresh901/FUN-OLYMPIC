<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Changepassword extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
         $this->load->helper('form');
           $this->load->model('changepassword_model');
    }


    public function changepass()
    {
        $this->load->view('change_password');
    }


    public function changeoldpassword()
    {
        $this->load->view('changeoldpassword');
    }


    
    public function changepassword()
    {
         $data = $this->session->userdata('user');
           //print_r($data); die();
            $userid = $data->user_id;
            $password = md5($_POST['password']);
            $this->load->model('changepassword_model');
            $data = $this->changepassword_model->updatepass($password, $userid);
             //echo $this->db->last_query();die;
            if ($data == true) {
                //echo 'Here'; die();
                $this->session->set_flashdata('message', "Your Password Change Sucessfully! Please Go to Login");
                redirect("changepassword/changepass");
            }
            else {
                $this->session->set_flashdata('message', "Something Went Wrong!");
                redirect("changepassword/changepass");
            }

        }




 public function change() {
$userdata=$this->session->userdata('user');
$userId = $userdata->user_id;

    
$oldPassword = $this->input->post('oldpassword');
$newPassword = $this->input->post('password');


$currentPassword = $this->changepassword_model->fetchCurrentPassword($userId);
  
if (md5($oldPassword) !== $currentPassword) {
    $this->session->set_flashdata('error', "Old Password doesn't match");
                redirect("changepassword/changeoldpassword");
}
else{
    $newHashedPassword = md5($newPassword);
$this->changepassword_model->updatePassword($userId, $newHashedPassword);
//echo $this->db->last_query();die;
 $this->session->set_flashdata('msg', "Password Changed Sucessfully....! Please Login");
                redirect("home/logout");
}

    }
    

}



