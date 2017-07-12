<?php if (! defined('BASEPATH')) exit('No direct script access allowed');
class Tag extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('news_model');
		$this->load->model('tag_model');
	}

	public function view($tag) {
		$data['title'] = "有关 ".$tag." 的博客";

		//divide pages
		$this->load->library('pagination');
		$perPage = 5;
		//config of dividing pages
		$config['base_url'] = site_url('index/Tag/view');
		$config['total_rows'] = $this->db->count_all_results('tags');
		$config['per_page'] = $perPage;
		$config['url_segment'] = 4;
		
		$this->pagination->initialize($config);
		$data['links'] = $this->pagination->create_links();
		$offset = $this->uri->segment(4);
		$this->db->limit($perPage, $offset);

		$data['tag_news'] = $this->tag_model->get_tag($tag);
		
		if (empty($data['tag_news'])) {
			show_404();
		}

		$this->load->view('templates/header', $data);		
		$this->load->view('news/tag_view', $data);
		$this->load->view('templates/footer');	
	}
}
