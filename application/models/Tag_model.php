<?php
/*
	create table tags(
	id int(11) not null auto_increment,
	slug varchar(128) not null,
	tag varchar(128) not null,
	primary key id (id),
	key (slug, tag),
	foreign key (slug)
	);
*/
class Tag_model extends CI_Model {
	public function __construct() {
		$this->load->database();
	}

	//search tags for specific news
	public function get_tag($tag) {

		$query = $this->db->select('*')->from('news')->join('tags', 'news.slug=tags.slug')->where('tag', $tag)->get()->result_array();
		return $query;
	}

	//add new tuple(slug, tag)
	public function set_tag() {
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

	//delete relevant tags when news dropped
	public function del_tag($slug){
		$this->db->where('slug', $slug);
		$this->db->delete('tags');
	}

	//update tags when news changes
	public function edit_tag($slug){
		$tag_list = explode(' ', $this->input->post('tag') );
		$new_slug = url_title($this->input->post('title'), 'dash', TRUE);
		//unsolved bug: useless bool operation
		if($this->db->select('tag')->from('tags')->where('slug', $slug)->get()->result_array() <> $tag_list){
			$this->del_tag($slug);
			foreach($tag_list as $tag){
				$data = array(
					'tag' => $tag,
					'slug' => $new_slug
				);
				$this->db->insert('tags', $data);
			}
		}
	}

	public function get_all_tags(){
		$query = $this->db->distinct()->select('tag')->get('tags')->result_array();
		return $query;
	}

}
