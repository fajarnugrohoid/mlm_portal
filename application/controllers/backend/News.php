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
  function insert_data()
  {

    $this->form_validation->set_rules('title', 'Title','is_unique[mst_news.title]');
    if ($this->form_validation->run() == true)
    {  
      $config = array(
        'allowed_types' => 'jpg|jpeg|gif|png',
        'max_size' => 2000,
        'file_name' => url_title($this->input->post('userfile')),
        'upload_path' => './assets/images/news/'
        );
      $this->load->library('upload',$config);
      $this->upload->initialize($config);
      $data=array(
        'title' => $this->input->post('title'),
        'description' => $this->input->post('description'),
        'category' => $this->input->post('category'),
        'link' => $this->input->post('link')
        );
      if ($this->input->post('userfile') !="")
      {
        if($this->upload->do_upload())
        {
          $file = $this->upload->file_name;
          $data['photo']=$file;
          $this->news_model->m_insert_news($data); 
          $out= array(
            'isSuccess' => 1,
            'message' => "File Has Been Save"
            );
          echo json_encode( $out );
        }
        else
        {
          $out= array(
            'isSuccess' => 0,
            'message' => $this->upload->display_errors()
            );
          echo json_encode( $out );
        }

      }
      else
      {
        $this->news_model->m_insert_news($data); 
        $out= array(
            'isSuccess' => 1,
            'message' => "File Has Been Save Without Image"
            );
        echo json_encode( $out );
      }
    }
    else
    {
      $out= array(
        'isSuccess' => 0,
        'message' => "Data With That Title Has been Exist!"
        );
      echo json_encode( $out );
    }
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
  function uploadImage()
  {
    $status = "";
    $msg = "";
    $file_element_name = 'userfile';
     
    if ($status != "error")
    {
        $config['upload_path'] = './assets/images/news/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 1024 * 8;
        $config['encrypt_name'] = FALSE;
 
        $this->load->library('upload', $config);
 
        if (!$this->upload->do_upload($file_element_name))
        {
            $status = 'error';
            $msg = $this->upload->display_errors('', '');
        }
        else
        {
            $data = $this->upload->data();
            $file_id = $this->files_model->insert_file($data['file_name'], $_POST['title']);
            if($file_id)
            {
                $status = "success";
                $msg = "File successfully uploaded";
            }
            else
            {
                unlink($data['full_path']);
                $status = "error";
                $msg = "Something went wrong when saving the file, please try again.";
            }
        }
        @unlink($_FILES[$file_element_name]);
    }
    echo json_encode(array('status' => $status, 'msg' => $msg));
  }
}
