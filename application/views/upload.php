<?php

$id_user = $this->session->userdata('id_user');
$nama = $this->session->userdata('nama');
$username = $this->session->userdata('username');
$email = $this->session->userdata('email');
$notelepon = $this->session->userdata('notelepon');


?>


<div class="row">
    <div class="col-md-1"></div>

    <div class="col-md-10">
        <h1>Add New Product Table</h1>

        <?php echo $nama; ?>

        <?php echo $id_user; ?>

        <?php echo $username; ?>

        <?php echo $notelepon; ?>

        <?php echo $email; ?>

        <div><?= validation_errors() ?></div>
        <?= form_open_multipart('upload_file/create', ['class'=>'form-horizontal'])?>

        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Id user</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="id_user" placeholder="" value="<?= $id_user?>">
          </div>
        </div>

        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Id user</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="username" placeholder="" value="<?= $username?>">
          </div>
        </div>

            <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label">Nama Transaksi</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="nama_product" placeholder="" value="<?= set_value('nama_product') ?>">
              </div>
            </div>


            <div class="form-group">
              <label for="exampleSelect2" class="col-sm-2 control-label">Bahan</label>
              <div class="col-sm-10">
              <select class="form-control" id="bahan" name="bahan">
                <option value="default">Pilih Bahan</option>
                <option value="Flexi China">Flexi China</option>
                <option value="Flexi Korea">Flexi Korea</option>
                <option value="Flexi Jerman">Flexi Jerman</option>
                <option value="Albatros">Albatros</option>
                <option value="Luster">Luster</option>
                <option value="Glossy Paper">Glossy Paper</option>
              </select>
              </div>
            </div>


          <div class="form-group">
          </br><br>Ukuran<br><input id="panjang" type="number" name="panjang" placeholder="Panjang" />
          <input id="lebar" type="number" name="lebar" placeholder="Lebar" /><br>
          </br>
        </div>


          Jumlah</br><input type="number" name="jumlah" id="jumlah" /></br>
          Total Harga<br><label id="harga"></label><br>
          <input type="hidden" name="harga" id="inpHrg" />
          <br/>
          Telepon<br><input type="text" name="no_telepon" /><br>
          <br/>
          Keterangan<br><input type="text" name="keterangan" /><br>
          <input type="hidden" name="tipe" value="banner">
          <br/>


            <div class="form-group">
              <label for="inputPassword3" class="col-sm-2 control-label">Product Image</label>
              <div class="col-sm-10">
                <input type="file" class="form-control" name="userfile"/>
              </div>
            </div>

            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Save</button>
              </div>
            </div>
        <?= form_close() ?>
      </div>
    <div class="col-md-1"></div>
  </div>

  <script src="<?= base_url(); ?>assets/js/jquery-3.2.1.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
      $('#panjang').keyup(function(){
        if ($('#jumlah') != "" && $('#panjang').val() != "" && $('#lebar').val() != "" && $('#bahan').val() != "default") harga();
        else $('#harga').html("0");
      });
      $('#lebar').keyup(function(){
        if ($('#jumlah') != "" && $('#lebar').val() != "" && $('#panjang').val() != "" && $('#bahan').val() != "default") harga();
        else $('#harga').html("0");
      });
      $('#bahan').change(function(){
        if ($('#jumlah') != "" && $('#lebar').val() != "" && $('#panjang').val() != "" && $('#bahan').val() != "default") harga();
        else $('#harga').html("0");
      });
      $('#jumlah').keyup(function(){
        if ($('#jumlah') != "" && $('#lebar').val() != "" && $('#panjang').val() != "" && $('#bahan').val() != "default") harga();
        else $('#harga').html("0");
      });

      function harga() {
        if ($('#bahan').val()=="Flexi China") var hrg = ($('#panjang').val() * $('#lebar').val() * 5000 + 10000)*$('#jumlah').val();
        else if($('#bahan').val()=="Flexi Korea") var hrg = ($('#panjang').val() * $('#lebar').val() * 5000 + 20000)*$('#jumlah').val();
        else if($('#bahan').val()=="Flexi Jerman") var hrg = ($('#panjang').val() * $('#lebar').val() * 5000 + 30000)*$('#jumlah').val();
        else var hrg = ($('#panjang').val() * $('#lebar').val() * 5000 + 40000)*$('#jumlah').val();

        $('#harga').html(hrg);
        $('#inpHrg').val(hrg);
    }
    });
  </script>
