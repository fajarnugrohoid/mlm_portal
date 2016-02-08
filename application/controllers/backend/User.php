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
}
