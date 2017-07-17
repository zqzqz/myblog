<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

//back stage controller
class AdminNews extends MY_Controller{
	
	public function __construct() {
		parent::__construct();
		$this->load->model('news_model');
		$this->load->model('tag_model');
		$this->load->model('comment_model');
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
			$this->load->view('admin/welcome');
		}
	}
			
	
	public function delete($slug){
		$this->comment_model->del_comment($slug);
		$this->tag_model->del_tag($slug);
		$this->news_model->del_news($slug);
		redirect('/admin/AdminNews/index');
	}
		

	//edit news(article)
	public function edit($slug){

		$this->load->helper('form');
		$this->load->library('form_validation');
		if(!file_exists(APPPATH.'views/admin/edit.php')){
			show_404();
		}
		$data['title']="修改文章";
		$data['news_item']=$this->news_model->get_news($slug);

		if ($this->form_validation->run('edit_news') === FALSE) {
			$this->load->view('admin/edit', $data);
	
		}
		else {
			$this->news_model->edit_news($slug);
			$this->tag_model->edit_tag($slug);
			redirect('/admin/AdminNews/index');
		}
	}

	//arrange comments
	public function comment(){
		$data['title'] = "查看评论";

		//divide pages
		$this->load->library('pagination');
		$perPage = 8;
		//config of dividing pages
		$config['base_url'] = site_url('admin/AdminNews/comment');
		$config['total_rows'] = $this->db->count_all_results('comment');
		$config['per_page'] = $perPage;
		$config['url_segment'] = 4;
		
		$this->pagination->initialize($config);
		$data['links'] = $this->pagination->create_links();
		$offset = $this->uri->segment(4);
		$this->db->limit($perPage, $offset);

		$data['comments'] = $this->comment_model->get_comment();
	
		$this->load->view('admin/comment', $data);
	}
}
