<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
         $this->load->helper('form');
         $this->load->model('schedule_model','SM');
	}


	public function image()
	{
			$data ['images']= $this->SM->getimages();
						$this->load->view('managegallery', $data);
	}


	public function insertimage()
	{
			if($this->input->post()){
  	$postdata = $this->input->post();
  	//print_r($postdata); die;
				$data['description'] = $postdata['description'];
			    $config['upload_path'] = 'assets/teamimages/';
		        $config['allowed_types'] = 'gif|jpg|png';
        // $config['max_size'] = 2000;
        // $config['max_width'] = 1500;
        // $config['max_height'] = 1500;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('image')) 
		{
            $error = array('error' => $this->upload->display_errors());
           echo  print_r($error); die;
        } 


          else 
		{
            $img =  $this->upload->data();
             $data['image'] = $img['file_name'];

            //print_r($img); die;
        }

           $insdata  = $this->db->insert('gallery', $data);
			  //$this->db->last_query(); die;
				
			   if ($insdata) {
					$this->session->set_flashdata('message', "Image Uploaded Sucessfully!");
					redirect(base_url().'gallery/image');

				} else { 
					$this->session->set_flashdata('message', "Somethng Went Wrong!!");
					redirect(base_url().'gallery/image');
				}
	    }
   }
   
								   public function deleteimages($id)
								   {
								                                $this->SM->deletephotos($id);
														        redirect(base_url().'gallery/image');
								   	
								   }



}