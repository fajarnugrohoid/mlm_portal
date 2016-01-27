<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_controller extends CI_Controller {

   public function __construct()
   {
      parent::__construct();
   }
   public function index()
   {
      $this->load->view('backend_view/layout/header');
     $this->load->view('backend_view/dashboard');
     $this->load->view('backend_view/layout/footer');
  }
}
