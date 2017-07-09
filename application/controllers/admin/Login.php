<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

// back stage login controller
class Login extends CI_Controller{
	

	//default view function
	public function index(){
		if(!file_exists(APPPATH.'views/admin/login.php')){
			show_404();
		}
		
		$data['error'] = '';
		$this->load->view('admin/login.php', $data);
	}
	
	//login function
	public function login_in(){
		if(!isset($_SESSION)){
			session_start();
		}

		$username = $this->input->post('username');
		$this->load->model('user_model', 'user');
		$userData = $this->user->check($username);

		$passwd = $this->input->post('passwd');

		if(!$userData || $userData[0]['password'] != md5($passwd)){
			$data['error'] = '用户名或密码不正确';
			redirect('/admin/', $data);
		} 

		$sessionData = array(
			'username'	=> $username,
			'uid'		=> $userData[0]['id'],
			'logintime' => time()
			);

		$this->session->set_userdata($sessionData);
		
		redirect('/admin/index/');

	}


	//logout function
	public function login_out(){
		$this->session->sess_destroy();
		redirect('/admin/');
	}
}
