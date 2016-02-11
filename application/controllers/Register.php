<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends MY_Frontend {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
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
	public function submit(){

		
		$captcha = $this->input->post('captcha');
		/*echo "md5 captcha = ".$captcha;
		echo "<br>keycode = ".$this->session->userdata('keycode');
		// die();
		if($captcha==$this->session->userdata('keycode')){
			$data['captcha']= $captcha;
			$this->session->unset_userdata('keycode');
		}else{
			redirect('register/index/cap_error/1','refresh');
		} */

		$sess_upline_id = $this->session->userdata('sess_upline_id');
		if ($sess_upline_id==''){
			$sess_upline_id = $this->generate_network->gen_sys_referral('12');
		}

		$password = $this->input->post('password');
		$password = md5($password);
		$email=$this->input->post('email');
		$data = array(
			'name' => $this->input->post('username'),
			'email' =>  $email,
			'upline_id' => $sess_upline_id,
			'password' => $password,
			'status' => 1,
			'level' => 1
			);

		$this->form_validation->set_rules('email', 'Email','is_unique[mst_member.email]');
		if ($this->form_validation->run() == true)
		{  
			$id = $this->user_model->m_add_account($data);
			$this->session->set_flashdata('flash_data', 'Your Account Has Been Registered');
			$this->session->unset_userdata('sess_upline_id');
			redirect(base_url().'register/signup');

		}
		else
		{
			$this->session->set_flashdata('flash_data', 'Your Email Already Registered Try With Another Email');
			redirect(base_url().'register/signup');
		}
	}

	public function verification($key)
	{
		$this->load->model('user_model');
		$this->user_model->m_changeActiveState($key);
		echo "<div class='col-md-12 margin50' align='center'><div class='alert alert-success' role='alert'>Congratulation confirmation Successfull</div></div>";
		echo "<div class='col-md-12' align='center'><div class='alert alert-success' role='alert'><a href='".site_url("login_controller/index")."'>Back to login page</a></div></div>";			
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
