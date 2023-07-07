<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{
	public function index()
	{
		$this->load->view('loginaccount');
	}
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
	}
	public function userlogin()
	{
		$captcha_response = trim($this->input->post('g-recaptcha-response'));

		if($captcha_response != '')
		{
			$keySecret = '6LeFsuEkAAAAAEsDhugz9ZNa7ZzhOyjKsUUvdWvX';

			$check = array(
				'secret'		=>	$keySecret,
				'response'		=>	$this->input->post('g-recaptcha-response')
			);

			$startProcess = curl_init();

			curl_setopt($startProcess, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");

			curl_setopt($startProcess, CURLOPT_POST, true);

			curl_setopt($startProcess, CURLOPT_POSTFIELDS, http_build_query($check));

			curl_setopt($startProcess, CURLOPT_SSL_VERIFYPEER, false);

			curl_setopt($startProcess, CURLOPT_RETURNTRANSFER, true);

			$receiveData = curl_exec($startProcess);

			$finalResponse = json_decode($receiveData, true);

			if($finalResponse['success'])
			{
		$user_name = $_POST['user_name'];
		$password = md5($_POST['password']);
		$this->load->model('login_model');
		$data = $this->login_model->login($user_name, $password);
	//echo $this->db->last_query();die;
		//print_r($data); die; 
		if ($data) 
		   {
			$this->session->set_userdata('user', $data);

			redirect('home/viewhome');
		}
		else {
			$this->session->set_flashdata('error', 'Incorrect Username or Password');
			redirect(base_url().'login');
		}
	} 
	}
		else {
			$this->session->set_flashdata('er', 'Please Verify the captcha');
			redirect(base_url().'login');
		}

	}
	
}


