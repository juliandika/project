<?php

class Model_master_data extends CI_Model {

  public function all(){

    $data = $this->db->get('transaksi');

    return $data->result();

  }
}
