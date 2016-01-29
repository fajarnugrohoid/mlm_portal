<?php
class User_model extends CI_Model {

   function __construct()
   {
      parent::__construct();
      $this->load->database();
   }
   
// login
   function m_auth($email,$password)
   {

      $query = $this->db->get_where('user', array(
         'email' => $email,
         'password' => base64_encode($password)
         ));
      if($query->num_rows() == 1)
      {
         return $query->row();
      }

   }
}