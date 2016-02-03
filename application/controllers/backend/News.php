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
  function edit($id)
  {
    $data=array(
     'id'=>$id,
     );

    $data['data_edit']=$this->product_model->m_edit_shirt($data);
    $this->header();
    $this->load->view('backend_view/new/add',$data);
    $this->footer();
  }
  function insert_data()
  {
    if($this->input->post('save')) 
    {
     $this->form_validation->set_rules('title_product', 'Title_product','is_unique[product.title_product]');
     if ($this->form_validation->run() == true)
     {  
      $config = array(
       'allowed_types' => 'jpg|jpeg|gif|png',
       'max_size' => 2000,
       'file_name' => url_title($this->input->post('file_upload')),
       'upload_path' => './assets/image/product/'
       );
      $this->load->library('upload',$config);

      $data=array(
       'barcode_shirt' => $this->input->post('barcode_shirt'),
       'brand_shirt' => $this->input->post('brand_shirt'),
       'size_shirt' => $this->input->post('size_shirt'),
       'describe_shirt' => $this->input->post('describe_shirt'),
       );
      $data2=array(
       'title_product' => $this->input->post('title_product'),
       'price_product' => $this->input->post('price_product'),
       'date_publish' => $this->input->post('date_publish'),
       'product_type' => 'shirt',
       'slug' =>str_replace(' ', '-', $this->input->post('barcode_shirt')).'-detail',
       );
      if ($_FILES['userfile']['size'] > 0)
      {
       if($this->upload->do_upload())
       {
        $file = $this->upload->file_name;
        $data['image_shirt']=$file;
        $this->product_model->m_insert_shirt($data,$data2); 
        redirect(base_url().'backend_controller/shirt_controller/index');
      }
      else
      {
        $this->session->set_flashdata('flash_data', $this->upload->display_errors());
        redirect(base_url().'backend_controller/shirt_controller/insert');
      }

    }
    else
    {
     $this->product_model->m_insert_shirt($data,$data2);
     redirect(base_url().'backend_controller/shirt_controller/index');
   }
 }
 else
 {
  $this->session->set_flashdata('flash_data', 'Data has been exists');
  redirect(base_url().'backend_controller/shirt_controller/insert');
}
}
else
{

 $this->session->set_flashdata('flash_data', 'Make Sure Your file is an image');
 redirect('backend_controller/shirt_controller/insert');
}
}
function delete_data($id_shirt)
{      
  $data=array(
   'id_shirt' => $id_shirt
   );
  $this->product_model->m_delete_shirt_data($data,$id_shirt);
  $this->header();
  redirect(base_url().'backend_controller/shirt_controller/index');
  $this->footer();
}
function edit_data()
{

}
}
