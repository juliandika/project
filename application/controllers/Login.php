<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
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
			redirect(base_url('/pages/view'));
		}else{
			echo "Username atau password salah";
		}
	}
}
