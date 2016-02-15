<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Search extends MY_Frontend {

	public function __construct()
	{
		
		parent::__construct();
		$this->load->model('news_model');        

	}
	public function index()
	{
		if (isset($_POST['search'])) 
		{
			$data['search_keyword'] = $this->input->post('keywords');
			$this->session->set_userdata('sess_search_keyword', $data['search_keyword']);
		}
		else 
		{
			$data['search_keyword'] = $this->session->userdata('sess_search_keyword');
		}


		$this->db->from('mst_news');
		$this->db->like('title', $data['search_keyword']);
		$this->db->where("status","1");

		$pagination['base_url'] = base_url().'search/index/';
		$pagination['total_rows'] = $this->db->count_all_results();

		$pagination['full_tag_open'] = '<ul class="pagination" style="background-color:transparent;">';
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

		$pagination['per_page'] = "8";
		$pagination['uri_segment'] = 3;
		$pagination['num_links'] = 3;

		$this->pagination->initialize($pagination);

		$data['list_data'] = $this->news_model->m_search($pagination['per_page'],$this->uri->segment(3,0),$data['search_keyword']);
		
		$this->load->vars($data);
		$this->header();
		$this->load->view('frontend_view/search',$data);
		$this->footer();

	}
}

