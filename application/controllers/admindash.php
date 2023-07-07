<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admindash extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		 $this->load->model('dashboard_model');
          $this->load->model('schedule_model', 'SM');
         $this->load->helper('form');
	}

 public function adminlogout() {
        $this->session->sess_destroy();
        redirect(base_url().'adminlogin/adlogin');
    }

	public function admin()
	{
		$this->load->view('adminpanel');

	}
public function managechat()
    {
        $this->load->view('managechat');

    }

public function users()
    {
        $data ['user']= $this->SM->getusers();
        $this->load->view('usermain', $data);	
    }

    public function live()
    {
        $data ['getlive']= $this->SM->getlive();
        $this->load->view('livegames', $data);  
    }


    public function messages()
    {
        $data ['message']= $this->SM->getmessages();
        $this->load->view('managemessage', $data);  
    }

    public function deleteuser($id)
         {
        $this->SM->deleteuser($id);
        redirect(base_url().'admindash/users');

	}


    public function updateuser()
    {
                        if ($this->input->post()) {
                            $postdata = $this->input->post();

                            $data['user_fullname'] = $postdata['user_fullname'];
                            $data['user_name'] = $postdata['user_name'];
                            $data['email'] = $postdata['email'];
                

                            $this->db->where('user_id', $postdata['user_id']);
                            $update = $this->db->update('user', $data);
                           //$this->db->last_query(); die;
                           //print_r($update); die;

                            if ($update) {
                                $this->session->set_flashdata('message', "Users updated successfully!");
                            } else {
                                $this->session->set_flashdata('message', "Something went wrong while updating the product.");
                            }

                            redirect(base_url() . 'admindash/users');
                        }
                    }


  public function deletemessage($id)
         {
                    $this->SM->delete_message($id);
                    redirect(base_url().'admindash/messages');

    }



}