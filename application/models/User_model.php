<?php
class User_model extends CI_Model {
	function validate_user($username,$password){
		$this->db->from('users');
		$this->db->select('*');
		$this->db->where('user_username',$username);
		$this->db->where('user_password',$password);
		$result=$this->db->get()->row();
		return $result;
	}
}