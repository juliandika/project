<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {


	public function index()
	{
		$this->load->view('logIn'); //nama view Login
	}

	public function prosesLogin()
	{
		$user = $this->input->post('username');
		$pass = $this->input->post('password');
		$this->db->select('username,password');
		$this->db->where('username',$user);
		$result=$this->db->get('register')->row_array();

		if (($result['username'] == $user) and ($result['password']==md5($pass))) {
			$this->session->set_userdata($result);
			$message['isLogin']=true;
		}else{
			$message['isLogin']=false;
		}
		echo json_encode($message);
	}
}
?>