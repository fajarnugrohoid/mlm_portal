<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Frontend {

	public function __construct()
	{
		parent::__construct();  
	}
	public function index()
	{
		$this->header();
		$this->load->view('frontend_view/home');
		$this->footer();
	}
	public function login()
	{
		$this->header();
		$this->load->view("frontend_view/login");
		$this->footer();
		
	}

	public function referral(){
		$this->header();
		$user_referral = $this->uri->segment(3);
		$data['user_referral']  = $user_referral;
		echo 'name:' . $user_referral;
		$this->load->view('frontend_view/referral', $data);
		$this->footer();
	}
}
