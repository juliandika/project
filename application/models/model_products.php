<?php

class Model_products extends CI_Model {

  public function all(){

    $result = $this->db->get('products');

    if($result->num_rows() > 0){
      return $result->result();
    } else {

      return array();
    }
  }
}

?>
