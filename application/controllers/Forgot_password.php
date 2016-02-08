<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forgot_password extends MY_Frontend {

	public function __construct()
	{
		parent::__construct();  
		$this->load->model('user_model'); 
	}
	public function submit()
	{
		$email= $this->input->post('email');	
		$password= random_string('alnum', 16);
		$cek_email=$this->user_model->m_forgot_email($email);
		if ($cek_email)
		{

			$data=array('password' => base64_encode($password));
			$this->user_model->m_forgot_password($email,$data);

			$smptppass='FKcfAZ4mwocOdnJk/hDsGfgIpV9iYr0yjSAbp6PSS/Jownljpmg0JglylXNSB9R7a/J8zem0XdyQPq21JTsRAw==';
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
			$this->email->subject("Forgoten password");
			$this->email->message("this is your new password, enjoy!<br><br>".$password);

			if($this->email->send())
			{
				echo "<div class='col-md-12 margin50' align='center'><div class='alert alert-success' role='alert'>New Password has been send successfully,Please cek your email</div></div>";
				echo "<div class='col-md-12' align='center'><div class='alert alert-success' role='alert'><a href='".site_url("login_controller/index")."'>Back to login page</a></div></div>";			

			}
			else
			{
				echo "<div class='col-md-12 margin50' align='center'><div class='alert alert-warning' role='alert'>Failed for sending email,Make sure email is valid or check your internet connection </div>";
				echo "<div class='col-md-12' align='center'><div class='alert alert-success' role='alert'><a href='".site_url("Forgot_password_controller/index")."'>Back</a></div></div>";

			// echo $this->email->print_debugger(); 
			}
		}
		else
		{
			echo "<div class='col-md-12 margin50' align='center'><div class='alert alert-warning' role='alert'>Email Doest exist,Make sure email is registered </div>";
			echo "<div class='col-md-12' align='center'><div class='alert alert-success' role='alert'><a href='".site_url("Forgot_password_controller/index")."'>Back</a></div></div>";
		}
	}
}
