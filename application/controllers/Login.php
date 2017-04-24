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
		$result=$this->db->get('login')->row_array();

		if (($result['username'] == $user) and ($result['password']==$pass)) {
			$this->session->set_userdata($result);
			redirect(base_url('/prices/index'));
		}else{
			echo "Username atau password salah";
		}
	}
}
