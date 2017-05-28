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
              <label for="inputEmail3" class="col-sm-2 control-label">Product Name</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="nama_product" placeholder="" value="<?= set_value('nama_product') ?>">
              </div>
            </div>

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
