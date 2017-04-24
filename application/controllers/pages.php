<?php

class Pages extends CI_Controller
{
  public function __construct()
  {
      parent::__construct();
      $this->load->helper(array('form', 'url'));
  }

  public function view($page = 'home')
  {
    if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
        show_404();
      }

      $data['title'] = ucfirst($page);

      $this->load->view('templates/header');
      $this->load->view('pages/'.$page, $data);
      $this->load->view('templates/footer');
  }

  public function cetak()
  {
    $this->load->view('templates/header');
    $this->load->view('print');
  }

  public function upload()
  {
      $post = $this->input->post();
      $config['upload_path']          = './uploads/';
      $config['allowed_types']        = 'jpg|png';
      $config['max_size']             = 2048;

      $this->load->library('upload', $config);

      if ( ! $this->upload->do_upload('fileToUpload'))
      {
          $error = array('error' => $this->upload->display_errors());
          $this->load->view('templates/header');
          $this->load->view('print', $error);
          $this->load->view('templates/footer');
      }
      else
      {
          $data = array('upload_data' => $this->upload->data());
          $data['post'] = $post;
          $this->load->view('templates/header');
          $this->load->view('print_success', $data);
          $this->load->view('templates/footer');
      }
  }

  public function proses_register(){

  if(isset($_POST['register'])){
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $notelepon = $_POST['notelepon'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $data = array(
            'nama'=> $nama,
            'email'=> $email,
            'notelepon'=> $notelepon,
            'username'=> $username,
            'password'=> $password);

    $this->db->insert('register',$data);

    if($this->db->affected_rows()==1){
      redirect(base_url('pages/view'));
    }
  }
  }
}
?>
