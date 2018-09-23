<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include('Main_Controller.php');

class Login extends Main_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
    }  
	public function index()
	{
		$this->view_login('login','scripts/login_script.js','login.css'); //name, script , data, css, uri
	}
	public function validate(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$user = $this->User_model->validate_user($username,$password);
		if($user == null) {
			echo "invalid";
		} else {
			$newdata = array(
        'username'  => $username,
        'fullname'  => $user->user_fullname,
        'id'     => $user->user_id,
        'logged_in' => TRUE
			);
			$this->session->set_userdata('user_session',$newdata);
			echo "valid";
		}
	}
	public function logout(){
		unset($_SESSION['user_session']);
		header("LOCATION: ".base_url());
	}
}
