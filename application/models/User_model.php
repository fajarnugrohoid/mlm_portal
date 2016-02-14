<?php
class User_model extends CI_Model {

   function __construct()
   {
      parent::__construct();
   }
   
// login
   function m_auth($username,$password)
   {

      $query = $this->db->get_where('mst_member', array(
         'username' => $username,
         'password' => md5($password)
         ));
      // echo $this->db->last_query();
      // die();
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
      $this->db->flush_cache();
      $this->db->select('*');
      $this->db->from('mst_member');           
      $this->db->where('member_id', $member_id);
      return $this->db->get();
   }

   function get_data_by_id_upline($id_anggota){
      $this->db->flush_cache();
      $this->db->select('*');
      $this->db->from('mst_member');           
      $this->db->where('upline_id', $id_anggota);
      return $this->db->get();
   }

   function get_data_member_id($id){
      $this->db->flush_cache();
      $this->db->select('*');
      $this->db->from('mst_member');           
      $this->db->where('id', $id);
      return $this->db->get();
   } 

   function get_max_member_id(){
      $query = $this->db->query('SELECT max(right(member_id,5)) AS maxid FROM mst_member');
      $row = $query->row();
      $max_id = $row->maxid;
      return $max_id;
   }
   function m_edit_user($data)
   {
      $this->db->select('*');    
      $this->db->from('mst_member');
      $this->db->where($data);
      $query = $this->db->get();
      return $query->result();

   }
   function m_edit_user_data($data,$id)
   {
      $this->db->where('id', $id);
      $query = $this->db->get('mst_member');
      $count = $this->db->count_all_results();
      
      if ($this->upload->file_name == "") 
      {
         foreach ($query->result() as $row){}
            unlink("./assets/images/member/".$row->photo);
      }  

      $this->db->where('id', $id);
      $this->db->update('mst_member',$data);
   }

}