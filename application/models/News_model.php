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
      $query = $this->db->get('mst_news');
      $count = $this->db->count_all_results();
      foreach ($query->result() as $row){}
      unlink("./assets/images/news/".$row->image);
      if($this->db->delete('mst_news',$data))
      {
         return 1;
      }
      
   }
   function m_insert_news($data)
   {
      print_r($data);
      $this->db->insert('mst_news',$data);
   }
   function m_edit_news($data)
   {
      $this->db->select('*');    
      $this->db->from('mst_news');
      $this->db->where($data);
      $query = $this->db->get();
      return $query->result();

   }
   function m_edit_news_data($data,$id)
   {
      $this->db->where('id', $id);
      $query = $this->db->get('mst_news');
      $count = $this->db->count_all_results();
      
      if ($this->upload->file_name == "") 
      {
         foreach ($query->result() as $row){}
            unlink("./assets/images/news/".$row->image);
      }  

      $this->db->where('id', $id);
      $this->db->update('mst_news',$data);
   }

   // FRONTS
   function m_home_hot()
   {
      $query1 = $this->db->query("SELECT * FROM mst_news WHERE category='1' LIMIT 4");
      $query2 = $this->db->query("SELECT * FROM mst_news WHERE category='4' LIMIT 4");
      return array('promo' => $query1, 'event' => $query2);
   }
   function m_home_hot_news()
   {
      $this->db->select('*');    
      $this->db->from('mst_news');
      $this->db->where("category","4");
      $this->db->limit("4");
      $query = $this->db->get();
      return $query->result();
   }
   function m_home_hot_product()
   {
      $this->db->select('*');    
      $this->db->from('mst_news');
      $this->db->where('category = "3" LIMIT 4');
      $query = $this->db->get();
      return $query->result();
   }
   function m_home_hot_event()
   {
      $this->db->select('*');    
      $this->db->from('mst_news');
      $this->db->where('category = "2" LIMIT 4');
      $query = $this->db->get();
      return $query;
   }
   function m_home_hot_testimonial()
   {
      $this->db->select('*');    
      $this->db->from('mst_news');
      $this->db->where('category = "4" LIMIT 4');
      $query = $this->db->get();
      return $query->result();
   }
}