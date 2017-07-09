<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

//default controller
class Pages extends CI_Controller{

	//default view function
	public function index(){
		if(!file_exists(APPPATH.'views/pages/home.php')){
			show_404();
		}
		$data['title'] = "我的博客主页";
	
		$this->load->view('templates/header', $data);
		$this->load->view('pages/home', $data);
		$this->load->view('templates/footer', $data);
	}

}
