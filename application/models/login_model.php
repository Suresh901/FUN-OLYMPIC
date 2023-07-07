<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login_Model extends CI_Model
{

    public function login($user_name, $password)
    {
        $this->db->select('user_id, user_name, password, user_fullname, email');
        $this->db->from('user');
        $this->db->where('user_name', $user_name);
        $this->db->where('password', $password);
        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->row();
        } else {
            return false;
        }
    }


 public function adminlogin($ad_username,$ad_password){
$data=array(
    'ad_username'=>$ad_username,
    'ad_password'=>$ad_password,
);
$query=$this->db->where($data);
$login=$this->db->get('admin');
 if($login!= NULL){
    return $login->row();
 }  
}
}


