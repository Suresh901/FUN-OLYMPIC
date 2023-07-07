<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chat_model extends CI_Model {

  public function __construct()
  {
    parent::__construct();
    $this->load->library('session');
  }

 public function fetchMessages() {
    $this->db->select('chat_messages.id, chat_messages.user_id, chat_messages.message, chat_messages.created_at, user.user_name');
    $this->db->from('chat_messages');
    $this->db->join('user', 'user.user_id = chat_messages.user_id', 'left');
    $this->db->order_by('chat_messages.created_at', 'asc');
    $query = $this->db->get();
    return $query->result();
}


 public function storeMessage() {
     $userdata = $this->session->userdata('user');
    $data = array(
        'user_id' => $userdata->user_id,
        'message' =>  $this->input->post('message'),
        'created_at' => date('Y-m-d H:i:s')
    );
  return   $this->db->insert('chat_messages', $data);
}


}



