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
		$this->header();
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
		
		$this->load->view("frontend_view/register",$data);
		$this->footer();

	}
	public function submit()
	{
		$this->header();

		$sess_upline_id = $this->session->userdata('sess_upline_id');
		if ($sess_upline_id=='')
		{
			$sess_upline_id = $this->generate_network->gen_sys_referral('12');
		}


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
		$captcha = $this->input->post('captcha');


		$password = $this->input->post('password');
		$password = md5($password);
		$email=$this->input->post('email');


		$data['sponsor_id']= 'MMS20141';
		$data['sponsor_name']= $this->input->post('sponsor_name');
		$data['sponsor_email']= $this->input->post('sponsor_email');
		$data['member_id']= 'MMS20141';
		$data['upline_id']= $sess_upline_id;
		$data['username']= $this->input->post('username');
		$data['name']= $this->input->post('name');
		$data['password']= $password;
		$data['birthday_place']= $this->input->post('birthday_place');
		$data['birthday']= $this->input->post('birthday');
		$data['status']= $this->input->post('status');
		$data['child_count']= '';
		$data['handphone']= $this->input->post('handphone');
		$data['phone']= $this->input->post('phone');
		$data['email']= $email;
		$data['nationality']= $this->input->post('nationality');
		$data['no_ktp']= $this->input->post('no_ktp');
		$data['no_sim']= $this->input->post('no_sim');
		$data['job']= $this->input->post('job');
		$data['bank']= $this->input->post('bank');
		$data['bank_an']= $this->input->post('bank_an');
		$data['no_rek']= $this->input->post('no_rek');
		$data['bank_branch']= $this->input->post('bank_branch');
		$data['bank_city']= $this->input->post('bank_city');
		$data['plan']= 'A';
		$data['level']= 1;
		$data['value']= $this->input->post('value');
		$data['mothers_name']= $this->input->post('mothers_name');
		$data['status_barang']= $this->input->post('status_barang');
		$data['is_active']= 0;
		$data['downline_count']= '';
		$data['position']= '';
		$data['ktp_address']= $this->input->post('ktp_address');
		$data['ktp_districts']= $this->input->post('ktp_districts');
		$data['ktp_subdistricts']= $this->input->post('ktp_subdistricts');
		$data['ktp_city']= $this->input->post('ktp_city');
		$data['ktp_province']= $this->input->post('ktp_province');
		$data['shipment_address']= $this->input->post('shipment_address');
		$data['shipment_districts']= $this->input->post('shipment_districts');
		$data['shipment_subdistricts']= $this->input->post('shipment_subdistricts');
		$data['shipment_city']= $this->input->post('shipment_city');
		$data['shipment_province']= $this->input->post('shipment_province');
		$data['date']= date('Y-m-d');
		$data['time']= date('HH:mm:ss');
		
		if($captcha==$this->session->userdata('keycode'))
		{
			$data['captcha']= $captcha;
			$this->session->unset_userdata('keycode');

			$config = array(
				'allowed_types' => 'jpg|jpeg|gif|png',
				'max_size' => 2000,
				'file_name' => url_title($this->input->post('userfile')),
				'upload_path' => 'assets/images/member/'
				);
			$this->load->library('upload',$config);

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
						$this->load->view("frontend_view/register",$data);
					}
					else
					{
						$this->session->set_flashdata('flash_data', $this->upload->display_errors());
						$this->load->view("frontend_view/register",$data);
					}
				}
				else
				{

					$this->user_model->m_add_account($data);
					$this->session->set_flashdata('flash_data', 'Data Has Been Saved Without Photo Profile');
					$this->load->view("frontend_view/register",$data);
				}

			}
			else
			{
				$this->session->set_flashdata('flash_data', 'Your Email Already Registered Try With Another Email');
				$this->load->view("frontend_view/register",$data);
			}
		}
		else
		{
			$this->session->set_flashdata('flash_data', 'Wrong Input Captcha');
			$this->load->view("frontend_view/register",$data);
		} 
		$this->footer();
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
