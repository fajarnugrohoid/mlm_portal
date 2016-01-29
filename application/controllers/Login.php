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

			$email=$this->input->post('email');
			$password=$this->input->post('password');
			$result = $this->user_model->m_auth($email,$password);

			if($result) {
				$data=array(
					'id_user' => $result->id_user,
					'email' => $result->email,
					);
				$data2=array(					
					'active'=>$result->active,
					'level'=>$result->level,
					);

				$this->session->set_userdata($data2);
				if ($_SESSION['active']=='1') 
				{

					if ($_SESSION['level']=='admin')
					{

						$this->session->set_userdata($data);
						redirect('backend/dashboard');
					}
					else if ($_SESSION['level']=='guest')
					{
						$this->session->set_userdata($data);
						redirect('backend/dashboard_user');
					}
				}
				else if($_SESSION['active']=='0'){
					$this->session->set_flashdata('flash_data', 'Your account not activated yet! please contact your administrator');
					redirect('home/login');
				}	
			}
			else 
			{
				$this->session->set_flashdata('flash_data', 'email or password is wrong!');
				redirect('home/login');
			}			
	}
}
