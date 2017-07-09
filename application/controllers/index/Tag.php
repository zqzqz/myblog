<?php if (! defined('BASEPATH')) exit('No direct script access allowed');
class Tag extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('news_model');
		$this->load->model('tag_model');
	}

	public function view($tag) {
		$data['tag_news'] = $this->tag_model->get_tag($tag);
		
		if (empty($data['tag_news'])) {
			show_404();
		}
		$data['title'] = 'blogs about '.$tag;

		$this->load->view('templates/header', $data);		
		$this->load->view('news/tag_view', $data);
		$this->load->view('templates/footer');	
	}
}
