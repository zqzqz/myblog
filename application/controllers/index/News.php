<?php if (! defined('BASEPATH')) exit('No direct script access allowed');
class News extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('news_model');
		$this->load->model('comment_model');
		$this->load->model('tag_model');
	}
		
	public function index() {
		
		$this->load->helper('form');
		$this->load->library('form_validation');

		//divide pages
		$this->load->library('pagination');
		$perPage = 5;
		//config of dividing pages
		$config['base_url'] = site_url('index/News/index');
		$config['total_rows'] = $this->db->count_all_results('news');
		$config['per_page'] = $perPage;
		$config['url_segment'] = 4;
		
		$this->pagination->initialize($config);
		$data['links'] = $this->pagination->create_links();
		$offset = $this->uri->segment(4);
		$this->db->limit($perPage, $offset);

		//search key word from title/summary/text
		$search = $this->input->post('search');
		if($search){
			$this->db->like('title', $search);
			$this->db->or_like('summary', $search);
			$this->db->or_like('text', $search);
			$data['title'] = "搜索关键字 ".$search." 的博客文章";
		}
		else{
			$data['title'] = "博客文章列表";
		}

		$data['news'] = $this->news_model->get_news();
		$data['all_tags'] = $this->tag_model->get_all_tags();

		$this->load->view('templates/header', $data);		
		$this->load->view('news/index', $data);
		$this->load->view('templates/footer');
	}
	
	public function view($slug) {
		$this->load->helper('form');
		$this->load->library('form_validation');
		$data['news'] = $this->news_model->get_news($slug);
		
		if (empty($data['news'])) {
			show_404();
		}
		//$data['title'] = $data['news'][0]['title'];
		

		
		if ($this->form_validation->run('comment') === FALSE) {
			$data['comments'] = $this->comment_model->get_comment($slug);
			$this->load->view('templates/header', $data);			
			$this->load->view('news/view', $data);	
			$this->load->view('templates/footer');
		}
		else{
			$this->comment_model->set_comment($slug);
			$data['comments'] = $this->comment_model->get_comment($slug);	
			$this->load->view('templates/header', $data);	
			$this->load->view('news/view', $data);
			$this->load->view('templates/footer');
		}
			
	}

	
}
