<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

//back stage controller
class AdminNews extends MY_Controller{
	
	public function __construct() {
		parent::__construct();
		$this->load->model('news_model');
		$this->load->model('tag_model');
	}

	public function index(){
		$data['title'] = "查看文章";

		//divide pages
		$this->load->library('pagination');
		$perPage = 5;
		//config of dividing pages
		$config['base_url'] = site_url('admin/AdminNews/index');
		$config['total_rows'] = $this->db->count_all_results('news');
		$config['per_page'] = $perPage;
		$config['url_segment'] = 4;
		
		$this->pagination->initialize($config);
		$data['links'] = $this->pagination->create_links();
		$offset = $this->uri->segment(4);
		$this->db->limit($perPage, $offset);

		$data['news'] = $this->news_model->get_news();
	
		$this->load->view('admin/check', $data);
	}

	//publish news(article)
	public function publish(){

		$this->load->helper('form');
		$this->load->library('form_validation');
		if(!file_exists(APPPATH.'views/admin/publish.php')){
			show_404();
		}
		$data['title']="写文章";

		if ($this->form_validation->run('news') === FALSE) {
			$this->load->view('admin/publish', $data);
	
		}
		else {
			$this->news_model->set_news();
			$this->tag_model->set_tag();
			$this->load->view('admin/index');
		}
	}
			

	public function edit(){
		$this->load->helper('form');
		$this->load->library('form_validation');
		if(!file_exists(APPPATH.'views/admin/edit.php')){
			show_404();
		}
		$data['title']="修改文章";

		if ($this->form_validation->run('news') === FALSE) {
			$this->load->view('admin/edit', $data);
	
		}
		else {
			$this->news_model->set_news();
			$this->load->view('admin/edit');
		}
	}
}
