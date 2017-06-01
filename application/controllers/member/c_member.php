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
		$this->load->view('member/header', $data);
		$this->load->view('member/index', $data);
		$this->load->view('member/footer', $data);

	}

	public function create(){

		$data['id_user'] = $this->session->userdata('id_user');
		$data['username'] = $this->session->userdata('username');
		$data['nama'] = $this->session->userdata('nama');
		$data['notelepon'] = $this->session->userdata('notelepon');
		$data['title'] = 'Post Konsultasi';

		$data['categories'] = $this->post_model->get_categories();

		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('body', 'Body', 'required');

		if($this->form_validation->run() === FALSE){

			$this->load->view('member/header', $data);
			$this->load->view('member/create', $data);
			$this->load->view('member/footer', $data);
		} else {
			//Upload image
			$config['upload_path'] = './assets/images/posts';
			$config['allowed_types'] = 'gif|jpg|png|pdf|doc';
			$config['max_size'] = '2048';
			$config['max_width'] = '5000';
			$config['max_height'] = '5000';

			$this->load->library('upload', $config);

			if(!$this->upload->do_upload()){
				$errors = array('error' => $this->upload->display_errors());
				$post_image = 'noimage.jpg';
			}else{
				$data = array('upload_data' => $this->upload->data());
				$post_image = $_FILES['userfile']['name'];
			}

			$this->post_model->create_post($post_image);
			redirect('member/c_member/index');
		}


	}

	public function view_konsultasi(){
		$data['id_user'] = $this->session->userdata('id_user');
		$data['username'] = $this->session->userdata('username');


		$data['posts'] = $this->model_user->view_konsultasi($data['id_user']);
		$this->load->view('member/header', $data);
		$this->load->view('member/konsultasi_saya', $data);
		$this->load->view('member/footer', $data);

	}


	public function logout() {
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('level');
		session_destroy();
		redirect('auth/index');
	}
}
?>
