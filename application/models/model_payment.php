<?php

class Model_payment extends CI_Model {


  public function get_saldo($id_user){

    $hasil = $this->db->select('saldo')
                      ->where('id_user', $id_user)
                      ->get('users');

    return $hasil->row_array();
  }

  public function pay($id_transaksi){

    $hasil = $this->db->where('id_transaksi', $id_transaksi)
                      ->get('transaksi');
    return $hasil->row_array();

  }

  public function update($id_user, $users){

    $this->db->set($users)
              ->where('id_user', $id_user)
             ->update('users');
  }

  public function update_transaksi($id_transaksi, $transaksi){

    $this->db->set($transaksi)
             ->where('id_transaksi', $id_transaksi)
             ->update('transaksi');
  }
}
