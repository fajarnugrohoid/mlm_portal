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

    if($this->input->post('save')) 
    {
      $this->form_validation->set_rules('title', 'Title','is_unique[mst_news.title]');
      if ($this->form_validation->run() == true)
      {  
        $config = array(
          'allowed_types' => 'jpg|jpeg|gif|png',
          'max_size' => 2000,
          'file_name' => url_title($this->input->post('file_upload')),
          'upload_path' => './assets/images/news/'
          );
        $this->load->library('upload',$config);

        $data=array(
          'title' => $this->input->post('title'),
          'description' => $this->input->post('description'),
          'link' => $this->input->post('link'),
          'category' => $this->input->post('category'),
          'author' => $this->session->userdata('sess_login')['username'],
          'author_date' => date('Y-m-d')
          );
        if ($_FILES['userfile']['size'] > 0)
        {
          if($this->upload->do_upload())
          {
            $file = $this->upload->file_name;
            $data['image']=$file;
            $this->news_model->m_insert_news($data);
            $this->session->set_flashdata('flash_data', 'Data Has Been Save');
            redirect(base_url().'backend/news/insert');
          }
          else
          {
            $this->session->set_flashdata('flash_data', $this->upload->display_errors());
            redirect(base_url().'backend/news/insert');
          }

        }
        else
        {
          $this->news_model->m_insert_news($data);
          $this->session->set_flashdata('flash_data', 'Data Has Been Saved');
          redirect(base_url().'backend/news/insert');
        }
      }
      else
      {
        $this->session->set_flashdata('flash_data', 'Data has been exists');
        redirect(base_url().'backend/news/insert');
      }
    }
    else
    {

      $this->session->set_flashdata('flash_data', 'Make Sure Your file is an image');
      redirect(base_url().'backend/news/insert');
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
  function edit_news($id)
  {
    $data=array(
      'id'=>$id,
      );

    $data['data_edit']=$this->news_model->m_edit_news($data);
    $this->header();
    $this->load->view('backend_view/news/edit',$data);
    $this->footer();
  }
  function edit_news_data()
  {
    if($this->input->post('save')) 
    {

      $id=$this->input->post('id');
      $title =$this->input->post('title');
      $original_value = $this->db->query("SELECT title FROM mst_news WHERE id = ".$id)->row()->title;
      if($title != $original_value) 
      {
        // $this->form_validation->set_rules('title_product', 'Title_product','is_unique[product.title_product]');
        $this->form_validation->set_rules('title', 'title','is_unique[mst_news.title]');
      } 
      else
      {
        $this->form_validation->set_rules('title', 'title', 'required');
      }

     if ($this->form_validation->run()==TRUE)
     {  
      $config = array(
        'allowed_types' => 'jpg|jpeg|gif|png',
        'max_size' => 2000,
        'file_name' => url_title($this->input->post('file_upload')),
        'upload_path' => './assets/images/news/'
        );
      $this->load->library('upload',$config);


      $data=array(
        'title' => $this->input->post('title'),
        'description' => $this->input->post('description'),
        'link' => $this->input->post('link'),
        'category' => $this->input->post('category'),
        'author' => $this->session->userdata('sess_login')['username'],
        'author_date' => date('Y-m-d')
        );
      if ($_FILES['userfile']['size'] > 0)
      {
        if($this->upload->do_upload())
        {

          $file = $this->upload->file_name;
          $data['image']=$file;
          $this->news_model->m_edit_news_data($data,$id); 
          $this->session->set_flashdata('flash_data', 'Data Has Been Edited');
          redirect($this->agent->referrer());
        }
        else
        {
          $this->session->set_flashdata('flash_data', $this->upload->display_errors());
          redirect($this->agent->referrer());
        }

      }
      else
      {
        $data['image']="";
        $this->news_model->m_edit_news_data($data,$id); 
        $this->session->set_flashdata('flash_data', 'Data Has Been Edited Without Photo');
        redirect($this->agent->referrer());
      }
    }
    else
    {
      $this->session->set_flashdata('flash_data', 'Data has been exists');
      redirect($this->agent->referrer());
    }
  }
  else
  {
    $this->session->set_flashdata('flash_data', 'Make Sure Your file is an image');
    redirect($this->agent->referrer());
  }
}
}
