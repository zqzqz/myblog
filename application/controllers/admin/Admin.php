<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

//default back stage controller
class Admin extends CI_Controller{

	//default view function
	public function index(){
		if(!file_exists(APPPATH.'views/admin/index.php')){
			show_404();
		}
		$this->load->view('admin/index');
	}


	public function welcome(){
		$this->load->view('admin/welcome');
	}

}
