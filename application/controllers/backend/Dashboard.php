<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Backend {

  public function __construct()
  {
    parent::__construct();
  }
  public function index()
  {
    $this->header();
    $this->load->view('backend_view/dashboard/dashboard');
    $this->footer();
  }
}
