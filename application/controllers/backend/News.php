<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends MY_Backend {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('news_model');
  }
  public function index()
  {
    $this->header();
    $this->load->view('backend_view/news/index');
    $this->footer();
  }
  public function list_data()
  {

    $data['data'] =$this->news_model->m_list_news();
    echo json_encode( $data );
    
  }
  public function list_data_category()
  {

    $data=$this->news_model->m_list_category();
    echo json_encode( $data );
    
  }
  function insert()
  {
    $this->header();
    $this->load->view('backend_view/news/add');
    $this->footer();
  }
  function delete_news_data($id)
  {      
    $data=array(
     'id' => $id
     );

    
    $param=$this->news_model->m_delete_news_data($data,$id);
    if($param == 1)
    {
      $out= array(
       'isSuccess' => 1,
       'message' => "Success Delete Data"
       );
      echo json_encode( $out );
    }
    else
    {
      $out= array(
       'isSuccess' => 0,
       'message' => "Failed Delete Data"
       );
      echo json_encode( $out );
    }

  }
}
