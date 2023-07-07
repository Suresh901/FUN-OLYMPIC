<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
         $this->load->helper('form');
          $this->load->model('schedule_model', 'SM');
            $this->load->model('Chat_Model');
	}
 
      public function viewhome()
      {
      	$data ['schedule']= $this->SM->getschedule();
      	$this-> load->view('homepage', $data);
      }

       public function viewgallery()
      {
      	$data ['image']= $this->SM->getphotos();
      	$this-> load->view('gallery', $data);
      }

       public function watchlive()
      {
      	$data ['live']= $this->SM->getlive();
      	$this-> load->view('livevideo', $data);
      }


      public function aboutus()
      {
      	$this-> load->view('aboutus');
      }

        public function contactus()
      {
      	$this-> load->view('contactus');
      }

public function delete_chat() {
  $messageId = $this->input->post('id');

  $numericId = intval(str_replace('message-', '', $messageId));

  $this->db->where('id', $numericId);
  $this->db->delete('chat_messages');

  $response = array(
    'success' => true,
    'message' => 'Chat message deleted successfully'
  );
  echo json_encode($response);
}


       public function logout() {
        $this->session->sess_destroy();
        redirect(base_url().'login');
    }
 public function viewmatch()
      {
        if( $data = $this->session->userdata('user')){
         
              $this-> load->view('livegame');
        }
        else{
          redirect(base_url().'login');
        }
      }


      public function contact()
      {
          $postdata = $_POST;
      
          if (isset($postdata['name'], $postdata['email'], $postdata['message'], $postdata['subject'])) {
              $data['name'] = $postdata['name'];
              $data['email'] = $postdata['email'];
              $data['message'] = $postdata['message'];
              $data['subject'] = $postdata['subject'];
      
              $insdata = $this->db->insert('contact', $data);
     // print_r ($insdata); die;
              if ($insdata) {
                  $this->session->set_flashdata('message', "Your Message Successfully Sent!");
                  redirect(base_url().'home/contactus');
              } else {
                  $this->session->set_flashdata('message', "Something Went Wrong!!");
                  redirect(base_url().'home/contactus');
              }
          } else {
              // Handle missing form fields or display an error message
              $this->session->set_flashdata('message', "Please fill out all the required fields.");
              redirect(base_url().'home/contactus');
          }
      }
      



    public function fetch_messages() {
    $messages = $this->Chat_Model->fetchMessages();

    $response = array(
      'success' => true,
      'resdata' => $messages
    );
    echo json_encode($response);
  }

  public function sendmessage() {
       
        
       $res =   $this->Chat_Model->storeMessage();

       if($res){
          echo "success"; 
       } else {
        echo "Error"; 
       }
        

    }
}