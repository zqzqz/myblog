<?php

/*
	create table news(
	id int(11) not null auto_increment,
	slug varchar(128) not null,
	title varchar(128) not null,
	summary text not null,
	text text not null,
	time date noy null,
	primary key id (id),
	key slug (slug)
	);
*/

class News_model extends CI_Model {
	public function __construct() {
		$this->load->database();
	}

	//get news information
	public function get_news($slug = False) {
                //select news with tags
		if ($slug === FALSE) {
			$sqlquery = $this->db->select('*')->from('news')->order_by('time')->get()->result_array();
			$result=array();
			foreach($sqlquery as $query){
				$sql_tag = $this->db->select('tag')->from('tags')->where('slug',$query['slug'])->get()->result_array();
				$result[] = array($query, $sql_tag);
			}			

			return $result;
		}
		
		$sqlquery = $this->db->select('*')->from('news')->where('slug', $slug)->get()->result_array();
		$sql_tag = $this->db->select('tag')->from('tags')->where('slug', $slug)->get()->result_array();
		$sqlquery[] = $sql_tag;
		return $sqlquery;
	}

	//add news object
	public function set_news() {
		//$this->load->helper('url');
                //get current time
                $this->load->helper('date');
		$time = time();		
		$edit_time = date('y-m-d', $time);
		
		$slug = url_title($this->input->post('title'), 'dash', TRUE);
		$data = array(
			'title' => $this->input->post('title'),
			'slug' => $slug,
			'summary' => $this->input->post('summary'),
			'text' => $this->input->post('text'),
			'time' => $edit_time
		);

		return $this->db->insert('news', $data);
	}

	//delete news object
	public function del_news($slug) {
		$this->db->where('slug', $slug);
		$this->db->delete('news');
	}

	//edit news object
	public function edit_news($slug) {
		
		$new_slug = url_title($this->input->post('title'), 'dash', TRUE);
		$data = array(
			'title' => $this->input->post('title'),
			'slug' => $new_slug,
			'summary' => $this->input->post('summary'),
			'text' => $this->input->post('text')
		);
		
		$this->db->update('news', $data, array('slug'=>$slug));
	}		
}
