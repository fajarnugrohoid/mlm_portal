<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Frontend {

	public function __construct()
	{
		parent::__construct();  
		$this->load->model("news_model");
	}
	public function index()
	{
		$results=$this->news_model->m_home_hot();
    	$data['promo'] = $results['promo'];
		$data['event'] = $results['event'];
		$this->header();
		$this->load->view('frontend_view/home',$data);
		$this->footer();
	}
	public function tai()
	{
		$results=$this->news_model->m_home_hot();
		$data['promo'] = $results['promo'];
		$data['event'] = $results['event'];
		print_r($data);
	}
	public function login()
	{
		$this->header();
		$this->load->view("frontend_view/login");
		$this->footer();
		
	}
	public function forgot_password()
	{
		$this->header();
		$this->load->view("frontend_view/forgot_password");
		$this->footer();
		
	}
}
