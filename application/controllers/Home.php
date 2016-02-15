<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Frontend {

	public function __construct()
	{
		parent::__construct();  
		$this->load->model("news_model");
	}
	public function index()
	{
    	$data['promo'] = $this->news_model->m_home_hot_promo();
		$data['event'] = $this->news_model->m_home_hot_event();
		$data['news'] = $this->news_model->m_home_hot_news();
		$data['product'] = $this->news_model->m_home_hot_product();
		$this->header();
		$this->load->view('frontend_view/home',$data);
		$this->footer();
	}
	public function json()
	{
		$results=$this->news_model->m_home_hot();
		$data['promo'] = $results['promo'];
		$data['event'] = $results['event'];
		print_r($data);
	}
	public function login()
	{
		$this->header();
		$this->load->view("frontend_view/login");
		$this->footer();
		
	}
	public function forgot_password()
	{
		$this->header();
		$this->load->view("frontend_view/forgot_password");
		$this->footer();
		
	}
	public function all_promo()
	{


		$this->db->from('mst_news');
		$this->db->where("category","1");

		$pagination['base_url'] = base_url().'home/all_promo/';
		$pagination['total_rows'] = $this->db->count_all_results();

		$pagination['full_tag_open'] = '<ul class="pagination" style="color: black !important;background-color:transparent;">';
		$pagination['full_tag_close'] = '</ul>';
		$pagination['first_link'] = 'First';
		$pagination['last_link'] = 'Last';
		$pagination['first_tag_open'] = '<li>';
		$pagination['first_tag_close'] = '</li>';
		$pagination['prev_link'] = '&laquo';
		$pagination['prev_tag_open'] = '<li class="prev">';
		$pagination['prev_tag_close'] = '</li>';
		$pagination['next_link'] = '&raquo';
		$pagination['next_tag_open'] = '<li>';
		$pagination['next_tag_close'] = '</li>';
		$pagination['last_tag_open'] = '<li>';
		$pagination['last_tag_close'] = '</li>';
		$pagination['cur_tag_open'] = '<li class="active"><a href="#">';
		$pagination['cur_tag_close'] = '</a></li>';
		$pagination['num_tag_open'] = '<li>';
		$pagination['num_tag_close'] = '</li>';

		$pagination['per_page'] = "4";
		$pagination['uri_segment'] = 3;
		$pagination['num_links'] = 3;

		$this->pagination->initialize($pagination);

		$data['list_data'] = $this->news_model->m_all_promo($pagination['per_page'],$this->uri->segment(3,0));

		$this->load->vars($data);
		$this->header();
		$this->load->view("frontend_view/all_promo");
		$this->footer();
		
	}

	public function all_event()
	{


		$this->db->from('mst_news');
		$this->db->where("category","2");

		$pagination['base_url'] = base_url().'home/all_event/';
		$pagination['total_rows'] = $this->db->count_all_results();

		$pagination['full_tag_open'] = '<ul class="pagination" style="color: black !important;background-color:transparent;">';
		$pagination['full_tag_close'] = '</ul>';
		$pagination['first_link'] = 'First';
		$pagination['last_link'] = 'Last';
		$pagination['first_tag_open'] = '<li>';
		$pagination['first_tag_close'] = '</li>';
		$pagination['prev_link'] = '&laquo';
		$pagination['prev_tag_open'] = '<li class="prev">';
		$pagination['prev_tag_close'] = '</li>';
		$pagination['next_link'] = '&raquo';
		$pagination['next_tag_open'] = '<li>';
		$pagination['next_tag_close'] = '</li>';
		$pagination['last_tag_open'] = '<li>';
		$pagination['last_tag_close'] = '</li>';
		$pagination['cur_tag_open'] = '<li class="active"><a href="#">';
		$pagination['cur_tag_close'] = '</a></li>';
		$pagination['num_tag_open'] = '<li>';
		$pagination['num_tag_close'] = '</li>';

		$pagination['per_page'] = "4";
		$pagination['uri_segment'] = 3;
		$pagination['num_links'] = 3;

		$this->pagination->initialize($pagination);

		$data['list_data'] = $this->news_model->m_all_event($pagination['per_page'],$this->uri->segment(3,0));

		$this->load->vars($data);
		$this->header();
		$this->load->view("frontend_view/all_event");
		$this->footer();
		
	}

	public function all_product()
	{


		$this->db->from('mst_news');
		$this->db->where("category","3");

		$pagination['base_url'] = base_url().'home/all_product/';
		$pagination['total_rows'] = $this->db->count_all_results();

		$pagination['full_tag_open'] = '<ul class="pagination" style="color: black !important;background-color:transparent;">';
		$pagination['full_tag_close'] = '</ul>';
		$pagination['first_link'] = 'First';
		$pagination['last_link'] = 'Last';
		$pagination['first_tag_open'] = '<li>';
		$pagination['first_tag_close'] = '</li>';
		$pagination['prev_link'] = '&laquo';
		$pagination['prev_tag_open'] = '<li class="prev">';
		$pagination['prev_tag_close'] = '</li>';
		$pagination['next_link'] = '&raquo';
		$pagination['next_tag_open'] = '<li>';
		$pagination['next_tag_close'] = '</li>';
		$pagination['last_tag_open'] = '<li>';
		$pagination['last_tag_close'] = '</li>';
		$pagination['cur_tag_open'] = '<li class="active"><a href="#">';
		$pagination['cur_tag_close'] = '</a></li>';
		$pagination['num_tag_open'] = '<li>';
		$pagination['num_tag_close'] = '</li>';

		$pagination['per_page'] = "4";
		$pagination['uri_segment'] = 3;
		$pagination['num_links'] = 3;

		$this->pagination->initialize($pagination);

		$data['list_data'] = $this->news_model->m_all_product($pagination['per_page'],$this->uri->segment(3,0));

		$this->load->vars($data);
		$this->header();
		$this->load->view("frontend_view/all_product");
		$this->footer();
		
	}

	public function all_news()
	{


		$this->db->from('mst_news');
		$this->db->where("category","4");

		$pagination['base_url'] = base_url().'home/all_news/';
		$pagination['total_rows'] = $this->db->count_all_results();

		$pagination['full_tag_open'] = '<ul class="pagination" style="color: black !important;background-color:transparent;">';
		$pagination['full_tag_close'] = '</ul>';
		$pagination['first_link'] = 'First';
		$pagination['last_link'] = 'Last';
		$pagination['first_tag_open'] = '<li>';
		$pagination['first_tag_close'] = '</li>';
		$pagination['prev_link'] = '&laquo';
		$pagination['prev_tag_open'] = '<li class="prev">';
		$pagination['prev_tag_close'] = '</li>';
		$pagination['next_link'] = '&raquo';
		$pagination['next_tag_open'] = '<li>';
		$pagination['next_tag_close'] = '</li>';
		$pagination['last_tag_open'] = '<li>';
		$pagination['last_tag_close'] = '</li>';
		$pagination['cur_tag_open'] = '<li class="active"><a href="#">';
		$pagination['cur_tag_close'] = '</a></li>';
		$pagination['num_tag_open'] = '<li>';
		$pagination['num_tag_close'] = '</li>';

		$pagination['per_page'] = "4";
		$pagination['uri_segment'] = 3;
		$pagination['num_links'] = 3;

		$this->pagination->initialize($pagination);

		$data['list_data'] = $this->news_model->m_all_news($pagination['per_page'],$this->uri->segment(3,0));

		$this->load->vars($data);
		$this->header();
		$this->load->view("frontend_view/all_news");
		$this->footer();
		
	}
	function detail_promo($id)
	{
		$this->header();
		$data['list_data'] = $this->news_model->m_detail_promo($id);
		$this->load->view("frontend_view/detail_page",$data);
		$this->footer();
	}
	function detail_event($id)
	{
		$this->header();
		$data['list_data'] = $this->news_model->m_detail_event($id);
		$this->load->view("frontend_view/detail_page",$data);
		$this->footer();
	}
	function detail_news($id)
	{
		$this->header();
		$data['list_data'] = $this->news_model->m_detail_news($id);
		$this->load->view("frontend_view/detail_page",$data);
		$this->footer();
	}
	function detail_product($id)
	{
		$this->header();
		$data['list_data'] = $this->news_model->m_detail_product($id);
		$this->load->view("frontend_view/detail_page",$data);
		$this->footer();
	}
	function detail_search($id)
	{
		$this->header();
		$data['list_data'] = $this->news_model->m_detail_search($id);
		$this->load->view("frontend_view/detail_page",$data);
		$this->footer();
	}
}
