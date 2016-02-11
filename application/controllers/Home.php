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
    	$data['promo'] = $this->news_model->m_home_hot_promo();
		$data['event'] = $this->news_model->m_home_hot_event();
		$data['news'] = $this->news_model->m_home_hot_news();
		$data['product'] = $this->news_model->m_home_hot_product();
		// echo "=================================";
		// print_r($data['promo']);
		// echo "=================================";
		// echo "=================================";
		// echo "=================================";
		// echo "=================================";
		// print_r($data['event']);
		// echo "=================================";
		// die();
		$this->header();
		$this->load->view('frontend_view/home',$data);
		$this->footer();
	}
	public function json()
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
