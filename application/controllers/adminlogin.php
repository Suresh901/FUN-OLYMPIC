<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminlogin extends CI_Controller
{
	public function adlogin()
	{
		$this->load->view('loginadmin');

	}

	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
	}

	public function adminlogin()
	{

		$ad_username = $_POST['adminname'];
		$ad_password = $_POST['adminpassword'];
		$this->load->model('login_model');
		$data = $this->login_model->adminlogin($ad_username, $ad_password);
	//echo $this->db->last_query();die;
		//print_r($data); die; 
		if ($data) {
			$this->session->set_userdata('admin', $data);
			redirect(base_url().'admindash/admin');
		}
		else {
			$this->session->set_flashdata('error', 'Incorrect Username or Password');
			redirect(base_url().'adminlogin/adlogin');
		} 
		
	}
}


	
