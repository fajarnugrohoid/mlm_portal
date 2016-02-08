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


	public function register()
	{

		$vals = array(
			'img_path' => './assets/capimg/',
			'img_url' => base_url()."assets/capimg",
			'img_width' => 415,
			'img_height' => 35,
			'expiration' => 10
			);
		$cap = create_captcha($vals);
		$this->session->set_userdata('keycode',md5($cap['word']));
		$data['captcha_img'] = $cap['image'];
		$this->header();
		$this->load->view("frontend_view/register",$data);
		$this->footer();
		
	}
	public function forgot_password()
	{
		$this->header();
		$this->load->view("frontend_view/forgot_password");
		$this->footer();
		
	}
}
