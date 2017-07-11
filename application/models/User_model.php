<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class User_model extends CI_Model{

	//check login infomation
	public function check($username){

		$data = $this->db->get_where('user', array('username'=>$username))->result_array();
		return $data;
	}


	//change the password
	public function change($uid, $data){
		$this->db->update('user', $data, array('id'=>$uid));
	}

	
}
