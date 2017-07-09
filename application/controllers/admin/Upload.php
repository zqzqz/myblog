<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

//uploading files controller
class Upload extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->helper('form');
	}	
	
	public function index(){
		if(!file_exists(APPPATH.'views/admin/index.php')){
			show_404();
		}
		
		$data['error'] = ' ';
		$this->load->view('admin/upload'.$data);
	}


	public function do_upload(){
		
		$title = $this->input->post('title');
		$config['upload_path'] = './uploads/'.$title."/";
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size'] = 10000;
		$config['max_width'] = '1920';
		$config['max_height'] = '1024';
		if(!file_exists('/var/www/html/uploads/'.$title))
			mkdir('/var/www/html/uploads/'.$title, 0777, TRUE);
		
		$this->load->library('upload', $config);
		$data['title'] = "上传图片";
		
		if(! $this->upload->do_upload('userfile')){
			$data['error'] = $this->upload->display_errors();
			$data['upload_data'] = FALSE;
			$this->load->view('admin/upload', $data);
		}
		else{
			$data['upload_data'] = $this->upload->data();
			$data['error'] = '';
			$this->load->view('admin/upload', $data);
		}	
	}

}
?>
