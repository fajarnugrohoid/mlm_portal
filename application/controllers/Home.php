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
	public function all_event()
	{
		$data['list_data'] = $this->news_model->m_all_event();
		$this->header();
		$this->load->view("frontend_view/all_event",$data);
		$this->footer();
		
	}
	public function all_news()
	{
		$data['list_data'] = $this->news_model->m_all_news();
		$this->header();
		$this->load->view("frontend_view/all_news",$data);
		$this->footer();
		
	}
	public function all_product()
	{
		$data['list_data'] = $this->news_model->m_all_product();
		$this->header();
		$this->load->view("frontend_view/all_product",$data);
		$this->footer();
		
	}
	public function all_promo()
	{
		$data['list_data'] = $this->news_model->m_all_promo();
		$this->header();
		$this->load->view("frontend_view/all_promo",$data);
		$this->footer();
		
	}
}
