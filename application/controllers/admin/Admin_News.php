<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

//back stage controller
class AdminNews extends CI_Controller{

	//publish news(article)
	public function publish(){
		if(!file_exists(APPPATH.'views/admin/publish.php')){
			show_404();
		}
		$this->load->view('admin/publish.php');
	}

}
