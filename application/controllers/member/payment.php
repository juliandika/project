<?php
class payment extends CI_Controller {

public function __construct() {

  parent::__construct();
  if ($this->session->userdata('username')=="") {
    redirect('auth');
  }
  $this->load->helper('text');
  $this->load->model('model_payment');
}



public function confirm($id_transaksi){

  $data['id_user'] = $this->session->userdata('id_user');
  $data['username'] = $this->session->userdata('username');
  $data['nama'] = $this->session->userdata('nama');
  $data['notelepon'] = $this->session->userdata('notelepon');
  $data['saldo'] = $this->session->userdata('saldo');

  $data['transaksi'] = $this->model_payment->pay($id_transaksi);

  $data['id_transaksi'] = $id_transaksi;

  $this->load->view('member/confirm', $data);

}


public function bayar($id_transaksi){

  $data['id_user'] = $this->session->userdata('id_user');
  $data['username'] = $this->session->userdata('username');
  $data['nama'] = $this->session->userdata('nama');
  $data['notelepon'] = $this->session->userdata('notelepon');

  $data['transaksi'] = $this->model_payment->pay($id_transaksi);
  //$data['transaksi'] = $this->model_payment->update_transaksi($id_transaksi, $transaksi);


  $saldo['saldo'] = $this->model_payment->get_saldo($data['id_user']);

  var_dump((int)$data['id_user']);

  var_dump((int)$saldo['saldo']);

  var_dump((int)$data['transaksi']);

  if(($saldo['saldo']>=$data['transaksi']['Harga'])&&($data['transaksi']['status_pembayaran']==0)){

    $sisa_saldo = (int)$saldo['saldo'] - (int)$data['transaksi']['Harga'];

    var_dump($sisa_saldo);

    //$this->load->view('member/payment', $data);


    $users = array(
      'saldo' => $sisa_saldo
    );

    $status_pembayaran = 1;
    $transaksi = array(
      'status_pembayaran' => $status_pembayaran
    );

    $this->model_payment->update($data['id_user'], $users);

    $this->model_payment->update_transaksi($id_transaksi, $transaksi);

  }




}





}

?>
