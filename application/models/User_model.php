<?php
class User_model extends CI_Model {

   function __construct()
   {
      parent::__construct();
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
   function get_data_by_id($member_id){

      $this->db->select('*');
      $this->db->from('mst_member');           
      $this->db->where('member_id', $member_id);
      return $this->db->get();
   }

   function get_data_by_id_upline($id_anggota){

      $this->db->select('*');
      $this->db->from('mst_member');           
      $this->db->where('upline_id', $id_anggota);
      return $this->db->get();
   }
}