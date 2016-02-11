<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Backend {

	public function __construct()
	{
		parent::__construct();  
		$this->load->model('user_model');          
	}
	public function auth()
	{
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		$result = $this->user_model->m_auth($username,$password);

		if($result) {

			$remember_me=$this->input->post('remember_me_checkbox');
			if ($remember_me) 
			{
				setcookie('remember_me_cookie','remember_checked',time()+3600,'/');

			}
			else
			{
				setcookie('remember_me_cookie','remember_checked',-1,'/');				
			}


			$data=array(
				'id' => $result->id,
				'member_id' => $result->member_id,
				'sponsor_id' => $result->sponsor_id,
				'upline_id' => $result->upline_id,
				'photo' => $result->photo,
				'no_hp' => $result->no_hp,
				'name' => $result->name,
				'plan' => $result->plan,
				'downline_count' => $result->downline_count,
				'mothers_name' => $result->mothers_name,
				);
			$data2=array(					
				'status'=>$result->status,
				'position'=>$result->status,
				'level'=>$result->level,
				);

			$this->session->set_userdata($data2);
			if ($_SESSION['status']=='1') 
			{
				$this->session->set_userdata('sess_login', $data);
				redirect('backend/dashboard/index');
			}
			else if($_SESSION['status']=='0'){

				setcookie('remember_me_cookie','',time()-3600,'/');
				$this->session->set_flashdata('flash_data', 'Your account not activated yet!');
				redirect('home/login');
			}	

		}
		else {
			$this->session->set_flashdata('flash_data', 'Login Failed!, Please verify Your email or password');
			redirect('home/login');
		}				
	}
	public function logout() {
		$data =array('id_user', 'email','active','level');
		$this->session->unset_userdata($data);
		setcookie('remember_me_cookie','',time()-3600,'/');
		session_destroy();
		redirect('home/index');

	} 
}
