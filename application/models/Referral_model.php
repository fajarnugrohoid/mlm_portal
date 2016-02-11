<?php
class Referral_model extends CI_Model {

   function __construct()
   {
      parent::__construct();
   }
   
// update ref
   function update_upline($data)
   {

      $this->db->flush_cache();
      $this->db->set('upline_id', $data['upline_id']);
      $this->db->where('id', $data['id']);
      
      $result = $this->db->update('mst_member');
      if($result) {
         return TRUE;
      }else {
         return FALSE;
      }

   }

   function get_sys_referral($userid){
      $this->db->flush_cache();
      $this->db->select('*');
      $this->db->from('sys_referral');
      //$this->db->where('userid', $userid);
      return $this->db->get();
   }

}