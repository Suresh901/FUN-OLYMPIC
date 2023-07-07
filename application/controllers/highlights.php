<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Highlights extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		 $this->load->model('schedule_model', 'SM');
         $this->load->helper('form');
	}

	public function viewhighlight()
	{
		$data['highlight']=$this->SM->gethighlights();
		$this->load->view('managehighlight',$data);

	}


	public function addvideos()
	{
		if ($this->input->post()) {
    $postdata = $this->input->post();
    // print_r($postdata); die;

    $data['description'] = $postdata['description'];
    $data['title'] = $postdata['title'];

    $config['upload_path'] = 'assets/highlights/';
    $config['allowed_types'] = 'mp4|mov';
    // $config['max_size'] = 2000;

    $this->load->library('upload', $config);

    if (!$this->upload->do_upload('video')) {
      $error = array('error' => $this->upload->display_errors());
      echo print_r($error);
      die;
    } else {
      $video = $this->upload->data();
      $data['video'] = $video['file_name'];
       //print_r($video); die;
    }

    $insdata = $this->db->insert('highlights', $data);
    // $this->db->last_query(); die;

    if ($insdata) {
      $this->session->set_flashdata('message', "Video Uploaded Successfully!");
      redirect(base_url().'highlights/viewhighlight');
    } else {
      $this->session->set_flashdata('message', "Something Went Wrong!");
      redirect(base_url().'highlights/viewhighlight');
    }

	}

    }

public function deletevideo($id)
{
	$this->SM->deletehighlight($id);
	redirect(base_url().'highlights/viewhighlight');
}

  public function highlight()
  {
    $data['video']=$this->SM->gethighlights();
    $this->load->view('highlight',$data);

  }

}