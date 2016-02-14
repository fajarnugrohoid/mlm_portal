<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Backend {

  public function __construct()
  {
    parent::__construct();
    if(!isset($_COOKIE['remember_me_cookie'])) 
    {
      session_destroy();
      redirect('home/login');
    }
  }
  public function index()
  {
    $this->header();
    $this->load->view('backend_view/dashboard/dashboard');
    // if ($_SESSION['level']=='1')
    // {
    //   $this->load->view('backend_view/dashboard/dashboard');
    // }
    // else if ($_SESSION['level']=='2')
    // {
    //   $this->load->view('backend_view/dashboard/dashboard_user');
    // }
    $this->footer();
  }
}
