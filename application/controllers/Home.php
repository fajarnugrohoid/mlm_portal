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
		$data_hot_promo['list_data_hot_promo'] =$this->news_model->m_home_hot_promo();
		$data_hot_news['list_data_hot_news'] =$this->news_model->m_home_hot_promo();
		$this->header();
		$this->load->view('frontend_view/home',$data_hot_promo,$data_hot_news);
		$this->footer();
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
