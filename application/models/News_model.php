<?php
class News_model extends CI_Model {

   function __construct()
   {
      parent::__construct();
      $this->load->database();
   }
   function m_list_news()
   {
      $this->db->select('*');    
      $this->db->from('mst_news');
      $query = $this->db->get();
      return $query->result();
   }
   function m_list_category()
   {
      $this->db->select('*');    
      $this->db->from('mst_category');
      $query = $this->db->get();
      return $query->result();
   }
   function m_delete_news_data($data,$id)
   {
      $query=$this->db->where('id', $id);
      $query=$this->db->delete('mst_news');
      if ($query) 
      {
         return 1;
      }
      else
      {
         return 0;
      }
      
   }
   function m_insert_news($data)
   {
      print_r($data);
      $this->db->insert('mst_news',$data);
   }

}