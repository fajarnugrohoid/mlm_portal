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
   function m_insert_news($data)
   {
      $this->db->insert('mst_news',$data);
   }
   function m_get_when_edit_news($data)
   {
      $this->db->select('*');    
      $this->db->from('mst_news');
      $this->db->where($data);
      $query = $this->db->get();
      return $query->result();

   }
   function m_edit_news_data($data,$id)
   {
      // $this->db->where('id_shirt', $id_shirt);
      // $query = $this->db->get('shirt');
      // if (!empty($this->upload->file_name)) 
      // {
      //    foreach ($query->result() as $row){}
      //       unlink("./assets/image/product/".$row->image_shirt);
      // }  

      $this->db->where('id', $id);
      $this->db->update('mst_news',$data);
   }
   function m_delete_news_data($data,$id)
   {
      $this->db->where('mst_news', $id);
      // $query = $this->db->get('mst_news');

      // foreach ($query->result() as $row){}
      //    unlink("./assets/image/product/".$row->image_shirt);
      $this->db->delete('mst_news',$data);
   }

}