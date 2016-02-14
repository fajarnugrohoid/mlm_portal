<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Send extends MY_Frontend {

	public function __construct()
	{
		parent::__construct();  
		$this->load->model('user_model');    
		$this->load->model('referral_model');  
	}
	

	public function link(){
		$this->header();	

		$data['sess_member_id']  = $sess_member_id=$this->session->userdata('sess_login')['member_id'];;
		$this->load->view('frontend_view/referral',$data);
		$this->footer();	
	}
	



}
