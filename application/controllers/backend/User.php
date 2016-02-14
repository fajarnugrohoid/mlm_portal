<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends MY_Backend {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('user_model');
    if(!isset($_COOKIE['remember_me_cookie'])) 
    {
      session_destroy();
      redirect('home/login');
    }
  }
  public function index()
  {
    $this->header();
    if ($_SESSION['level']=='1')
    {
      $this->load->view('backend_view/user/index');
    }
    else 
    {
      redirect('home/login');
    }
    $this->footer();
  }
  public function list_data()
  {

    $data['data'] =$this->user_model->m_list_user();
    echo json_encode( $data );

  }
  public function change_status()
  {

    $out = array('isSuccess' => 1,'message' => 'On Progress' );
    echo json_encode( $out );

  }
  function edit_user($id)
  {
    $data=array(
      'id'=>$id,
      );

    $data['data_edit']=$this->user_model->m_edit_user($data);
    $this->header();
    $this->load->view('backend_view/user/edit',$data);
    $this->footer();
  }
  function edit_user_data()
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
