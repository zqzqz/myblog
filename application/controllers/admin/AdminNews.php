<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

//back stage controller
class AdminNews extends CI_Controller{

	//publish news(article)
	public function publish(){
		$this->load->helper('form');
		$this->load->library('form_validation');
		if(!file_exists(APPPATH.'views/admin/publish.php')){
			show_404();
		}
		$data['title']="写文章";
		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('text', 'Text', 'required');
	
		if ($this->form_validation->run() === FALSE) {
			$this->load->view('admin/publish', $data);
	
		}
		else {
			$this->news_model->set_news();
			$this->load->view('news/success');
		}
	}

}
