<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends MY_Frontend {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
		$this->load->library('generate_network');
	}
	public function signup()
	{

		$vals = array(
			'img_path' => './assets/capimg/',
			'img_url' => base_url()."assets/capimg",
			'img_width' => 415,
			'img_height' => 35,
			'expiration' => 10
			);
		$cap = create_captcha($vals);
		$this->session->set_userdata('keycode',$cap['word']);
		$data['captcha_img'] = $cap['image'];
		$this->header();
		$this->load->view("frontend_view/register",$data);
		$this->footer();

	}
	public function submit()
	{

		$captcha = $this->input->post('captcha');

		if($captcha==$this->session->userdata('keycode'))
		{
			$data['captcha']= $captcha;
			$this->session->unset_userdata('keycode');
		}
		else
		{
			redirect('register/index/cap_error/1','refresh');
		} 

		$sess_upline_id = $this->session->userdata('sess_upline_id');
		if ($sess_upline_id=='')
		{
			$sess_upline_id = $this->generate_network->gen_sys_referral('12');
		}

		$password = $this->input->post('password');
		$password = md5($password);
		$email=$this->input->post('email');

		$config = array(
			'allowed_types' => 'jpg|jpeg|gif|png',
			'max_size' => 2000,
			'file_name' => url_title($this->input->post('userfile')),
			'upload_path' => 'assets/images/member/'
			);
		$this->load->library('upload',$config);

		$data = array
		(

			'sponsor_id' => 'MMS20141',
			'sponsor_name' => $this->input->post('sponsor_name'),
			'sponsor_email' => $this->input->post('sponsor_email'),


			'member_id' => 'MMS20141',
			'upline_id' => $sess_upline_id,


			'username' => $this->input->post('username'),
			'password' => $password,


			'name' =>  $this->input->post('name'),
			'birthday_place' =>  $this->input->post('birthday_place'),
			'birthday' =>  $this->input->post('birthday'),
			'status' => $this->input->post('status'),
			'sex' => $this->input->post('sex'),
			'child_count' => '',
			'handphone' =>  $this->input->post('handphone'),
			'phone' =>  $this->input->post('phone'),
			'email' =>  $email,
			'nationality' =>  $this->input->post('nationality'),
			'no_ktp' =>  $this->input->post('no_ktp'),
			'no_sim' =>  $this->input->post('no_sim'),
			'job' =>  $this->input->post('job'),
			'bank' =>  $this->input->post('bank'),
			'bank_an' =>  $this->input->post('bank_an'),
			'no_rek' =>  $this->input->post('no_rek'),
			'bank_branch' =>  $this->input->post('bank_branch'),
			'bank_city' =>  $this->input->post('bank_city'),
			'plan' =>  'A',
			'level' => 1,
			'value' =>  $this->input->post('value'),
			'mothers_name' =>  $this->input->post('mothers_name'),
			'status_barang' =>  $this->input->post('status_barang'),
			'is_active' => 0,
			'position' => '',
			'downline_count' => '',


			'ktp_address' =>  $this->input->post('ktp_address'),
			'ktp_districts' =>  $this->input->post('ktp_district'),
			'ktp_subdistricts' =>  $this->input->post('ktp_subdistrict'),
			'ktp_city' =>  $this->input->post('ktp_city'),
			'ktp_province' =>  $this->input->post('ktp_province'),
			'shipment_address' =>  $this->input->post('shipment_address'),
			'shipment_districts' =>  $this->input->post('shipment_district'),
			'shipment_subdistricts' =>  $this->input->post('shipment_subdistricts'),
			'shipment_city' =>  $this->input->post('shipment_city'),
			'shipment_province' =>  $this->input->post('shipment_province'),


			'date' =>  date('Y-m-d'),
			'time' =>  date('HH:mm:ss')
		);

		$this->form_validation->set_rules('email', 'Email','is_unique[mst_member.email]');
		if ($this->form_validation->run() == true)
		{  

			if ($_FILES['userfile']['size'] > 0)
			{	

				if($this->upload->do_upload())
				{
					$file = $this->upload->file_name;
					$data['photo']=$file;
					$this->user_model->m_add_account($data);
					$this->session->set_flashdata('flash_data', 'Your Account Has Been Registered');
					$this->session->unset_userdata('sess_upline_id');
					redirect(base_url().'register/signup');
				}
				else
				{
					$this->session->set_flashdata('flash_data', $this->upload->display_errors());
					redirect(base_url().'register/signup');
				}
			}
			else
			{

				$this->user_model->m_add_account($data);
				$this->session->set_flashdata('flash_data', 'Data Has Been Saved Without Photo Profile');
				redirect(base_url().'register/signup');
			}

		}
		else
		{
			$this->session->set_flashdata('flash_data', 'Your Email Already Registered Try With Another Email');
			redirect(base_url().'register/signup');
		}
	}
	public function captcha_refresh(){

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
		echo $cap['image'];

	}
}
