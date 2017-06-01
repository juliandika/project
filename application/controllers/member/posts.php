<?php

  class Posts extends CI_Controller{


    public function __construct() {
  		parent::__construct();
  		if ($this->session->userdata('username')=="") {
  			redirect('auth/index');
  		}
  		$this->load->helper('text');
  		$this->load->model('model_user');
  		$this->load->model('model_payment');

  	}

    public function index(){

      $data['title'] = 'Latest Posts';

      $data['posts'] = $this->post_model->get_posts();

      $this->load->view('member/header');
      $this->load->view('posts/index', $data);
      $this->load->view('member/footer');
    }
    public function view($slug = NULL){
      $data['post'] = $this->post_model->get_posts($slug);
      $post_id = $data['post']['id'];
      $data['comments'] = $this->comment_model->get_comments($post_id);

      if(empty($data['post'])){
        show_404();
      }

      $data['title'] = $data['post']['title'];

      $this->load->view('templates/header');
      $this->load->view('posts/view', $data);
      $this->load->view('templates/footer');
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
    public function delete($id){
      $this->post_model->delete_post($id);
      redirect('posts');
    }
    public function edit($slug){
      $data['post'] = $this->post_model->get_posts($slug);
      $data['categories'] = $this->post_model->get_categories();

      if(empty($data['post'])){
        show_404();
      }

      $data['title'] = 'Edit post';

      $this->load->view('templates/header');
      $this->load->view('posts/edit', $data);
      $this->load->view('templates/footer');
    }
    public function update(){
      $this->post_model->update_post();

      redirect('posts');
    }
}
?>
