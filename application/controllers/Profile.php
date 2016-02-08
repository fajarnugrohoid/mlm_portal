<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends MY_Frontend {

	public function __construct()
	{
		parent::__construct();  
		$this->load->model('user_model');       
	}
	public function index()
	{
		$this->header();
		$user_referral = $this->uri->segment(3);
		$user_referral2 = $this->uri->segment(2);
		$user_referral1 = $this->uri->segment(1);
		$data['user_referral']  = $user_referral . '-' . $user_referral2 . '-' . $user_referral1;
		echo 'name:' . $user_referral;
		$this->load->view('frontend_view/profile', $data);
		$this->footer();
	}

	public function user()
	{
		$this->header();
		$user_referral = $this->uri->segment(3);
		$user_referral2 = $this->uri->segment(2);
		$user_referral1 = $this->uri->segment(1);
		$user_referral0 = $this->uri->segment(0);
		$data['user_referral']  = $user_referral . '-' . $user_referral2 . '-' . $user_referral1 . '-' . $user_referral0;
		echo 'name:' . $user_referral . '-' . $user_referral2 . '-' . $user_referral1 . '-'. $user_referral0;


		//$id_anggota=$this->session->userdata('id_anggota');
		$id_anggota=$user_referral1;
		$res_by_id=$this->user_model->get_data_by_id($id_anggota);
		$data['id_anggota']=$res_by_id->row()->member_id;
		echo $data['id_anggota'] . '----';
		$data['nama']=$res_by_id->row()->name;
		$data['bank_an']=$res_by_id->row()->bank_an;
		$data['bank']=$res_by_id->row()->bank;
		$data['no_rek']=$res_by_id->row()->no_rek;
		$data['tanggal']=$res_by_id->row()->date;
		$data['kota']=$res_by_id->row()->city;
		$data['no_hp']=$res_by_id->row()->no_hp;
		$data['nama_ibu']=$res_by_id->row()->mothers_name;
		$data['id_upline']=$res_by_id->row()->upline_id;
		$data['id_sponsor']=$res_by_id->row()->sponsor_id;
		$data['plan']=$res_by_id->row()->plan;
		$data['nilai']=$res_by_id->row()->value;
		

		//==============



		$data['login_id_anggota']=$this->session->userdata('id_anggota');
		$login_results=$this->user_model->get_data_by_id($data['login_id_anggota']);
		$data['login_id_anggota'] = $login_results->row()->member_id;
		$data['login_id_upline'] = $login_results->row()->upline_id;
		$data['login_nama'] = $login_results->row()->name;
		$data['login_photo'] = $login_results->row()->photo;
		
		$results=$this->user_model->get_data_by_id($data['login_id_anggota']);
		$data['id_anggota'] = $results->row()->member_id;
		$data['id_upline'] = $results->row()->upline_id;
		$data['nama'] = $results->row()->name;
		$data['photo'] = $results->row()->photo;
		//echo '<br/>';
		//echo '<br/>';
		$data['res_level2']=$this->user_model->get_data_by_id_upline($data['id_anggota']);
		
		
		//exit;


		$this->load->view('frontend_view/profile', $data);
		$this->footer();
	}
	
}
