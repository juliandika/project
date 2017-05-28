<?php

class Upload_file extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->model('model_upload');
  }

  public function create(){

    $data['id'] = $this->session->userdata('id');
    $data['username'] = $this->session->userdata('username');
		$data['nama'] = $this->session->userdata('nama');
		$data['notelepon'] = $this->session->userdata('notelepon');

		$this->form_validation->set_rules('nama_product', 'Product Name', 'required');
		//$this->form_validation->set_rules('userfile', 'Product Image', 'required');

		if($this->form_validation->run() === FALSE){
      $this->load->view('templates/header');
			$this->load->view('upload');
      $this->load->view('templates/footer');

		}else{
			$config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'jpg|png';
			$config['max_size'] = '30000';
			$config['max_width'] = '2000';
			$config['max_height'] = '2000';

			$this->load->library('upload', $config);

			if(!$this->upload->do_upload()){

        $this->load->view('templates/header');
				$this->load->view('upload');
        $this->load->view('templates/footer');

			} else {

				$gambar = $this->upload->data();

				$data_product = array(
          'id_user'             => set_value('id_user'),
					'nama_product'				=> set_value('nama_product'),
					'image'				        => $gambar['file_name']

				);
				$this->model_upload->create($data_product);
				redirect('admin/products');
			}


		}
	}
}
