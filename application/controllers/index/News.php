<?php if (! defined('BASEPATH')) exit('No direct script access allowed');
class News extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('news_model');
	}
		
	public function index() {
		$data['title'] = "博客文章列表";

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

		$data['news'] = $this->news_model->get_news();
	
		$this->load->view('templates/header', $data);		
		$this->load->view('news/index', $data);
		$this->load->view('templates/footer');
	}
	
	public function view($slug = NULL) {
		$data['news'] = $this->news_model->get_news($slug);
		
		if (empty($data['news'])) {
			show_404();
		}
		//$data['title'] = $data['news'][0]['title'];

		$this->load->view('templates/header', $data);		
		$this->load->view('news/view', $data);
		$this->load->view('templates/footer');	
	}

	
}
