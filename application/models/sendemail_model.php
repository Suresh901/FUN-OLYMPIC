<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Sendemail_model extends CI_Model{
public function sendemail($to_email){
    $from_email = 'sureshshrestha915@gmail.com';
        $subject = 'Change Password';
        $message = 'Dear User,<br /><br />Please click on the below activation link to Change your Password.<br /><br /> http://localhost/FunOlympic2/changepassword/changepass/' .md5($to_email) . '<br /><br /><br />Thanks<br />';
        
        //configure email settings
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'ssl://smtp.gmail.com'; //smtp host name
        $config['smtp_port'] = '465'; //smtp port number
        $config['smtp_user'] = $from_email;
        $config['smtp_pass'] = 'ggrdpwqmsfvnsxjl'; //$from_email password
        $config['mailtype'] = 'html';
        $config['charset'] = 'iso-8859-1';
        $config['wordwrap'] = TRUE;
        $config['newline'] = "\r\n"; //use double quotes
        $this->email->initialize($config);
        
        //send mail
        $this->email->from($from_email, 'Change Your Password');
        $this->email->to($to_email);
        $this->email->subject($subject);
        $this->email->message($message);
        $return =$this->email->send();
        return $return ;
}
public function verifyemail($email){
    $data=array(
        'email'=>$email,
    );

   $email = $this->db->query("Select email from user where email = '$email'")->row();
   return $email;

    // $query=$this->db->where($data);
    // $email=$this->db->get('users');
    //     return $email->row(); 

}
}