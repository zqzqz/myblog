<?php
class Tag_model extends CI_Model {
	public function __construct() {
		$this->load->database();
	}

	public function get_tag($tag) {

		$sqlquery = $this->db->select('*')->from('news')->join('tags', 'news.slug=tags.slug')->where('tag', $tag)->get()->result_array();
		return $query = $sqlquery;
	}

	public function set_tag() {
		$this->load->helper('url');
		$slug = url_title($this->input->post('title'), 'dash', TRUE);
		$tag_list = explode(' ', $this->input->post('tag') );
		foreach($tag_list as $tag){
			$data = array(
				'tag' => $tag,
				'slug' => $slug
			);
			$this->db->insert('tags', $data);
		}

		return TRUE;
	}
}
