<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Referral extends MY_Frontend {

	public function __construct()
	{
		parent::__construct();  
		$this->load->model('user_model');    
		$this->load->model('referral_model');  
	}
	

	public function user()
	{
		$this->header();
		$user_referral = $this->uri->segment(3);
		$user_referral2 = $this->uri->segment(2);
		$user_referral1 = $this->uri->segment(1);
		$user_referral0 = $this->uri->segment(0);
		//$data['user_referral']  = $user_referral . '-' . $user_referral2 . '-' . $user_referral1 . '-' . $user_referral0;
		//echo 'name:' . $user_referral . '-' . $user_referral2 . '-' . $user_referral1 . '-'. $user_referral0;
		
		$this->session->set_userdata('sess_upline_id', $user_referral);
		redirect('register/signup');
		/*$arr_sess_login = $this->session->userdata('sess_login');
		
		$data['id'] = $arr_sess_login['id'];
		$data['upline_id'] = $user_referral;
		$res=$this->referral_model->update_upline($data);
		if ($res){
			echo 'berhasil';
		}else{
			echo 'gagal';
		} */
		$this->footer();
	}

	



}
