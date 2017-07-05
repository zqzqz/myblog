<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

//back stage controller
class AdminNews extends CI_Controller{
	
	public function __construct() {
		parent::__construct();
		$this->load->model('news_model');
		$this->load->model('tag_model');
	}

	//publish news(article)
	public function publish(){
		$this->load->helper('form');
		$this->load->library('form_validation');
		if(!file_exists(APPPATH.'views/admin/publish.php')){
			show_404();
		}
		$data['title']="写文章";
		//verify the form of news(article)
		/*
		$this->form_validation->set_rules('title', 'Title', 'required|min_length[5]');
		$this->form_validation->set_rules('summary', 'Summary', 'required|min_length[5]');
		$this->form_validation->set_rules('text', 'Text', 'required|min_length[10]');
		*/

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
			$this->load->view('admin/index');
		}
	}
}
