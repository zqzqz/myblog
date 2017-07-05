<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

// back stage login controller
class Login extends CI_Controller{

	//default view function
	public function index(){
		if(!file_exists(APPPATH.'views/admin/login.php')){
			show_404();
		}
		$this->load->view('admin/login.php');
	}

}
