<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends CI_Controller
{
	public function usersignup()
	{
		$this->load->view('register');
	}





	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->model('Emailverify');
	}

	
	
	
	
	/* user Registration function */
    public function userregistration()
	{
				$postdata = $_POST;
				$data['user_fullname'] = $postdata['full_name'];
				$data['user_name'] = $postdata['user_name'];
				$data['email'] = $postdata['email'];
				$data['password'] = md5($postdata['password']);
				

				$insdata  = $this->db->insert('user', $data);

				if ($insdata ) {
						$this->session->set_flashdata('message', "You are Successfully Registered!");
						redirect("registration/usersignup");
				} 
			 else { 
				$this->session->set_flashdata('message', "Somethng Went Wrong!!");
				redirect("registration/usersignup");
			}
	
    }




	public function verify($hash=NULL)
    {
        if ($this->Emailverify->verifyEmailID($hash)){
            $this->session->set_flashdata('verify_msg','<div class="alert alert-success text-center">Your Email Address is successfully verified! Please login to access your account!</div>');
            redirect('registration/signup');

        } else {
            $this->session->set_flashdata('verify_msg','<div class="alert alert-danger text-center">Sorry! There is error verifying your Email Address!</div>');
            redirect('registration/signup');
        }
    }




}  // end class




