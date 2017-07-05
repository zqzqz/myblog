
<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

//default controller
class Pages extends CI_Controller{

	//default view function
	public function view($page = 'home'){
		if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
			show_404();
		}
		$data['title'] = ucfirst($page);
	
		$this->load->view('templates/header', $data);
		$this->load->view('pages/'.$page, $data);
		$this->load->view('templates/footer', $data);
	}

}
