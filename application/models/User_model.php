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

      $query = $this->db->get_where('mst_member', array(
         'name' => $email,
         'password' => md5($password)
         ));
      if($query->num_rows() == 1)
      {
         return $query->row();
      }

   }
// register
   function m_add_account($data)
   {
      $this->db->insert('mst_member',$data);
   }
// user
   function m_list_user()
   {
      $this->db->select('*');    
      $this->db->from('mst_member');
      $query = $this->db->get();
      return $query->result();
   }
}