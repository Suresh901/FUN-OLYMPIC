<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Changepassword_model extends CI_Model{
    
public function updatepass($new_password, $userid){
  $data = array(
        'password'=> $new_password
        );
        return $this->db->where('user_id', $userid)
                        ->update('user', $data); 
}

public function get_password_by_id($userid) {
    return $this->db->get_where('user', array('id' => $userid))->row()->password;
}


     public function fetchCurrentPassword($userId) {
        $this->db->select('password');
        $this->db->from('user');
        $this->db->where('user_id', $userId);
        $query = $this->db->get();
        
        if ($query->num_rows() === 1) {
            $row = $query->row();
            return $row->password;
        }
        
        return null;
    }
    

      public function updatePassword($userId, $newPassword) {
        $this->db->set('password', $newPassword);
        $this->db->where('user_id', $userId);
        $this->db->update('user');

    }
}

  


 