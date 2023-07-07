<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Schedule extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		 $this->load->model('schedule_model', 'SM');
         $this->load->helper('form');
	}


	public function viewschedule()
	{
		
						$data ['schedule']= $this->SM->getschedule();
						$this->load->view('manageschedule', $data);

					
					
	}


	 public function viewlive()
      {
      	$data ['livematch']= $this->SM->getlive();
      	$this-> load->view('managelive', $data);
      }


	public function addschedule()
  {

  	if($this->input->post()){
  	$postdata = $this->input->post();
  	//print_r($postdata); die;
				$data['team1'] = $postdata['team1'];
				$data['team2'] = $postdata['team2'];
				$data['time'] = $postdata['time'];
				$data['date'] = $postdata['date'];
				$data['venue'] = $postdata['venue'];



			    $config['upload_path'] = 'assets/teamimages/';
		        $config['allowed_types'] = 'gif|jpg|png';
        // $config['max_size'] = 2000;
        // $config['max_width'] = 1500;
        // $config['max_height'] = 1500;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('logo1')) 
		{
            $error = array('error' => $this->upload->display_errors());
           echo  print_r($error); die;
        } 


          else 
		{
            $img =  $this->upload->data();
             $data['logo1'] = $img['file_name'];

            //print_r($img); die;
        }

         $config['upload_path'] = 'assets/teamimages/';
		        $config['allowed_types'] = 'gif|jpg|png';
        // $config['max_size'] = 2000;
        // $config['max_width'] = 1500;
        // $config['max_height'] = 1500;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('logo2')) 
		{
            $error = array('error' => $this->upload->display_errors());
           echo  print_r($error); die;
        } 


          else 
		{
            $img =  $this->upload->data();
             $data['logo2'] = $img['file_name'];

            //print_r($img); die;
        }

			     
			   $insdata  = $this->db->insert('schedule', $data);
			  //$this->db->last_query(); die;
				
			   if ($insdata) {
					$this->session->set_flashdata('message', "Schedule Created Sucessfully!");
					redirect(base_url().'schedule/viewschedule');

				} else { 
					$this->session->set_flashdata('message', "Somethng Went Wrong!!");
					redirect(base_url().'schedule/viewschedule');
				}

		}
	}


	public function deleteschedule($id)
						         {
						        $this->SM->deleteschedule($id);
						        redirect(base_url().'schedule/viewschedule');

							}




public function updateschedule()
					{
					    if($this->input->post()){
  	$postdata = $this->input->post();
  	//print_r($postdata); die;
				$data['team1'] = $postdata['team1'];
				$data['team2'] = $postdata['team2'];
				$data['time'] = $postdata['time'];
				$data['date'] = $postdata['date'];
				$data['venue'] = $postdata['venue'];
			    $config['upload_path'] = 'assets/teamimages/';
		        $config['allowed_types'] = 'gif|jpg|png';
        // $config['max_size'] = 2000;
        // $config['max_width'] = 1500;
        // $config['max_height'] = 1500;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('logo1')) 
		{
            $error = array('error' => $this->upload->display_errors());
           echo  print_r($error); die;
        } 


          else 
		{
            $img =  $this->upload->data();
             $data['logo1'] = $img['file_name'];

            //print_r($img); die;
        }

         $config['upload_path'] = 'assets/teamimages/';
		        $config['allowed_types'] = 'gif|jpg|png';
        // $config['max_size'] = 2000;
        // $config['max_width'] = 1500;
        // $config['max_height'] = 1500;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('logo2')) 
		{
            $error = array('error' => $this->upload->display_errors());
           echo  print_r($error); die;
        } 


          else 
		{
            $img =  $this->upload->data();
             $data['logo2'] = $img['file_name'];

            //print_r($img); die;
        }
					        $this->db->where('id', $postdata['id']);
					        $update = $this->db->update('schedule', $data);
					       //$this->db->last_query(); die;
					       //print_r($update); die;

					        if ($update) {
					            $this->session->set_flashdata('message', "Schedule updated successfully!");
					        } else {
					            $this->session->set_flashdata('message', "Something went wrong while updating the product.");
					        }

					        redirect(base_url() . 'schedule/viewschedule');
					    }
					}



					public function addlive()
  {

  	if($this->input->post()){
  	$postdata = $this->input->post();
  	//print_r($postdata); die;
				$data['team1'] = $postdata['team1'];
				$data['team2'] = $postdata['team2'];



			    $config['upload_path'] = 'assets/teamimages/';
		        $config['allowed_types'] = 'gif|jpg|png';
        // $config['max_size'] = 2000;
        // $config['max_width'] = 1500;
        // $config['max_height'] = 1500;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('logo1')) 
		{
            $error = array('error' => $this->upload->display_errors());
           echo  print_r($error); die;
        } 


          else 
		{
            $img =  $this->upload->data();
             $data['logo1'] = $img['file_name'];

            //print_r($img); die;
        }

         $config['upload_path'] = 'assets/teamimages/';
		        $config['allowed_types'] = 'gif|jpg|png';
        // $config['max_size'] = 2000;
        // $config['max_width'] = 1500;
        // $config['max_height'] = 1500;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('logo2')) 
		{
            $error = array('error' => $this->upload->display_errors());
           echo  print_r($error); die;
        } 


          else 
		{
            $img =  $this->upload->data();
             $data['logo2'] = $img['file_name'];

            //print_r($img); die;
        }

			     
			   $insdata  = $this->db->insert('livegames', $data);
			  //$this->db->last_query(); die;
				
			   if ($insdata) {
					$this->session->set_flashdata('message', "Live Added Sucessfully!");
					redirect(base_url().'schedule/viewlive');

				} else { 
					$this->session->set_flashdata('message', "Somethng Went Wrong!!");
					redirect(base_url().'schedule/viewlive');
				}

		}
	}



public function updatelive()
					{
					    if($this->input->post()){
  	$postdata = $this->input->post();
  	//print_r($postdata); die;
				$data['team1'] = $postdata['team1'];
				$data['team2'] = $postdata['team2'];
			    $config['upload_path'] = 'assets/teamimages/';
		        $config['allowed_types'] = 'gif|jpg|png';
        // $config['max_size'] = 2000;
        // $config['max_width'] = 1500;
        // $config['max_height'] = 1500;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('logo1')) 
		{
            $error = array('error' => $this->upload->display_errors());
           echo  print_r($error); die;
        } 


          else 
		{
            $img =  $this->upload->data();
             $data['logo1'] = $img['file_name'];

            //print_r($img); die;
        }

         $config['upload_path'] = 'assets/teamimages/';
		        $config['allowed_types'] = 'gif|jpg|png';
        // $config['max_size'] = 2000;
        // $config['max_width'] = 1500;
        // $config['max_height'] = 1500;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('logo2')) 
		{
            $error = array('error' => $this->upload->display_errors());
           echo  print_r($error); die;
        } 


          else 
		{
            $img =  $this->upload->data();
             $data['logo2'] = $img['file_name'];

            //print_r($img); die;
        }
					        $this->db->where('id', $postdata['id']);
					        $update = $this->db->update('livegames', $data);
					       //$this->db->last_query(); die;
					       //print_r($update); die;

					        if ($update) {
					            $this->session->set_flashdata('message', "Live updated successfully!");
					        } else {
					            $this->session->set_flashdata('message', "Something went wrong while updating the product.");
					        }

					        redirect(base_url() . 'schedule/viewlive');
					    }
					}

public function deletelive($id)
						         {
						        $this->SM->deletelive($id);
						        redirect(base_url().'schedule/viewlive');

							}

}