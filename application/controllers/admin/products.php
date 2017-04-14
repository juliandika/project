<?php

class Products extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->model('model_products');
  }

  public function index(){

    $data['products'] = $this->model_products->all();

    $data['title'] = 'Lihat Harga';

    $this->load->view('templates/header');
    $this->load->view('backend/view_all_products', $data);
    $this->load->view('templates/footer');
  }
}

?>
