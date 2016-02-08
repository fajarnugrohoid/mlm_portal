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
		
		
	}
	public function index()
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
		// echo "md5 captcha = ".$captcha;
		// echo "<br>keycode = ".$this->session->userdata('keycode');
		// die();
		// if($captcha==$this->session->userdata('keycode')){
		// 	$data['captcha']= $captcha;
		// 	$this->session->unset_userdata('keycode');
		// }else{
		// 	redirect('register?cap_error=1','refresh');
		// }

		$password = $this->input->post('password');
		$password = md5($password);
		$email=$this->input->post('email');
		$type_email=$this->input->post('type_email');
		$data = array(
			'name' => $this->input->post('username'),
			'email' =>  $email."@".$type_email,
			'type_email' =>  $type_email,
			'password' => $password,
			'status' => 1,
			'level' => 1
			);
	
		$this->form_validation->set_rules('email', 'Email','is_unique[mst_member.email]');
		if ($this->form_validation->run() == true)
		{  
			$id = $this->user_model->m_add_account($data);
			$this->session->set_flashdata('flash_data', 'Your Account Has Been Registered');
			redirect(base_url().'register');
		}
		else
		{
			$this->session->set_flashdata('flash_data', 'Your Email Already Registered Try With Another Email');
			redirect(base_url().'register');
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
