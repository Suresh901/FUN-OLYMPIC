<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Schedule_Model extends CI_Model{
public function getschedule(){
    $this->db->select('id, team1, logo1, team2, logo2, time, date, venue');
    $query = $this->db->get('schedule');
       return $query->result();
}


public function getphotos(){
    $this->db->select('id, image, description');
    $query = $this->db->get('gallery');
       return $query->result();
}
public function getlive(){
    $this->db->select('id, team1, logo1, team2, logo2');
    $query = $this->db->get('livegames');
       return $query->result();
}

 public function deleteschedule($id){
      $this->db->where('id', $id);
        $this->db->delete('schedule');
}

public function getusers($id=false){
    $this->db->select('user_id, user_fullname, user_name, email');
    $query = $this->db->get('user');

    if($id){
      $this->db->where(array('id'=> $id));
    }
 
       return $query->result();
}

      public function deleteuser($id){
      $this->db->where('user_id', $id);
        $this->db->delete('user');
}


public function getimages(){
    $this->db->select('id, image, description');
    $query = $this->db->get('gallery');
       return $query->result();
}
    

     public function deletephotos($id)
     {

         $this->db->where('id', $id);
        $this->db->delete('gallery');
     }

     public function gethighlights(){
    $this->db->select('id, video, title, description');
    $query = $this->db->get('highlights');
       return $query->result();
}

 public function deletehighlight($id)
     {

         $this->db->where('id', $id);
        $this->db->delete('highlights');
     }


     public function getmessages(){
    $this->db->select('id, name, email, subject, message');
    $query = $this->db->get('contact');
       return $query->result();
}


   public function delete_message($id){
      $this->db->where('id', $id);
        $this->db->delete('contact');
}

      public function deletelive($id){
      $this->db->where('id', $id);
        $this->db->delete('livegames');
}

}