<?php
class C_member extends CI_Controller {

	public function __construct() {
		parent::__construct();
		if ($this->session->userdata('username')=="") {
			redirect('auth');
		}
		$this->load->helper('text');
		$this->load->model('model_user');
		$this->load->model('model_payment');

	}
	public function index() {
		$data['id_user'] = $this->session->userdata('id_user');
		$data['username'] = $this->session->userdata('username');
		$data['nama'] = $this->session->userdata('nama');
		$data['notelepon'] = $this->session->userdata('notelepon');


		$data['saldo'] = $this->model_payment->get_saldo($data['id_user']);

		var_dump($data['saldo']);
		$data['transaksi'] = $this->model_user->view_data_user($data['username']);
		$this->load->view('member/index', $data);

	}


	public function logout() {
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('level');
		session_destroy();
		redirect('auth/index');
	}
}
?>
