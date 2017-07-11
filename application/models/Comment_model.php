<?php
/*
	create table comment(
	id int(11) not null auto_increment,
	slug varchar(128) not null,
	name varchar(128) not null,
	time date not null,
	comment text not null,
	primary key id (id),
	foreign key (slug) references news(slug)
	);
*/
class Comment_model extends CI_Model {
	public function __construct() {
		$this->load->database();
	}

	//search comments for specific news
	public function get_comment($slug) {

		$query = $this->db->select('*')->from('comment')->where('slug',$slug)->get()->result_array();
		return $query;
	}

	//add new tuple(slug, comment)
	public function set_comment($slug) {
		//$slug = url_title($this->input->post('title'), 'dash', TRUE);
		$comment = $this->input->post('comment');
		$name = $this->input->post('name');
		$this->load->helper('date');
		$time = time();		
		$com_time = date('y-m-d', $time);
		$data = array(
			'slug' => $slug,
			'comment' => $comment,
			'name' => $name,
			'time' => $com_time
		);
		$this->db->insert('comment', $data);

		return TRUE;
	}
}
