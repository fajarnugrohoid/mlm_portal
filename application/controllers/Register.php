<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register_controller extends CI_Controller {

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
	public function submit(){

		
		$captcha = $this->input->post('captcha');
		if(md5($captcha)==$this->session->userdata('keycode')){
			$data['captcha']= $captcha;
			$this->session->unset_userdata('keycode');
		}else{
			redirect('register?cap_error=1','refresh');
		}

		$password = $this->input->post('password');
		$password = md5($password);
		$email=$this->input->post('email');
		$data = array(
			'username' => $this->input->post('username'),
			'email' =>  $email,
			'password' => $password,
			'active' => 1,
			'level' => 1
			);
		
		$this->form_validation->set_rules('username', 'Username','is_unique[mst_member.username]');
		$this->form_validation->set_rules('email', 'Email','is_unique[mst_member.email]');
		if ($this->form_validation->run() == true)
		{  
			
			$smptppass='FKcfAZ4mwocOdnJk/hDsGfgIpV9iYr0yjSAbp6PSS/Jownljpmg0JglylXNSB9R7a/J8zem0XdyQPq21JTsRAw==';
			$id = $this->user_model->m_add_account($data);
			$encrypted_id =md5($id);

			$this->load->library('email');
			$config = array();
			$config['charset'] = 'utf-8';
			$config['useragent'] = 'Codeigniter';
			$config['protocol']= "smtp";
			$config['mailtype']= "html";
			$config['smtp_host']= "ssl://smtp.gmail.com";
			$config['smtp_port']= "465";
			$config['smtp_timeout']= "400";
			$config['smtp_user']= "93israj.alwan.haliri@gmail.com";
			$config['smtp_pass']= $this->encrypt->decode($smptppass);
			$config['crlf']="\r\n"; 
			$config['newline']="\r\n"; 
			$config['wordwrap'] = TRUE;


			$this->email->initialize($config);
			$this->email->from($config['smtp_user']);
			$this->email->to($email);
			$this->email->subject("Account verification");
			$this->email->message(
				"Thank you for signing up, Open this link for verification<br><br>".
				site_url("register_controller/verification/$encrypted_id")
				);

			error_reporting(0);

			if($this->email->send())
			{
				echo "<div class='col-md-12 margin50' align='center'><div class='alert alert-success' role='alert'>Registration Successfull,Please cek your email</div></div>";
				echo "<div class='col-md-12' align='center'><div class='alert alert-success' role='alert'><a href='".site_url("login_controller/index")."'>Back to login page</a></div></div>";			

			}
			else
			{
				$this->user_model->m_rollback_account($data,$id);
				echo "<div class='col-md-12 margin50' align='center'><div class='alert alert-warning' role='alert'>Failed for sending email,Make sure email is valid or check your internet connection </div>";
				echo "<div class='col-md-12' align='center'><div class='alert alert-success' role='alert'><a href='".site_url("register_controller/index")."'>Back to rergister page</a></div></div>";

			// echo $this->email->print_debugger(); 
			}
		}
		else
		{
			$this->session->set_flashdata('flash_data', 'Your Username or Email already exists');
			redirect(base_url().'register_controller/index');
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
