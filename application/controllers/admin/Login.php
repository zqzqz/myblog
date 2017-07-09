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
	
	//login function
	public function login_in(){
		if(!isset($_SESSION)){
			session_start();
		}

		$username = $this->input->post('username');
		$this->load->model('admin_model', 'admin');
		$userData = $this->admin->check($username);

		$passwd = $this->input->post('passwd');

		if(!$userData || $userData[0]['passwd'] != md5($passwd)) error('用户名或者密码不正确');

		$sessionData = array(
			'username'	=> $username,
			'uid'		=> $userData[0]['uid'],
			'logintime' => time()
			);

		$this->session->set_userdata($sessionData);
		
		success('admin/Admin/index', '登陆成功');

	}


	//logout function
	public function login_out(){
		$this->session->sess_destroy();
		success('admin/Login/index','退出成功');
	}
}
