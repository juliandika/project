<!DOCTYPE html>
<html>
  <head>
    <title>Online Printing</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>bootstrap.min.css">

    <script src="http://cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
    <script type="text/javascript" language="javascript" src="//code.jquery.com/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" language="javascript" src="//cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" language="javascript" src="//cdn.datatables.net/plug-ins/9dcbecd42ad/integration/bootstrap/3/dataTables.bootstrap.js"></script>
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/plug-ins/9dcbecd42ad/integration/bootstrap/3/dataTables.bootstrap.css">
  </head>
  <body>
    <nav class="navbar navbar-inverse" style="background-color:#0099cc; color:white border-radius:0;">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="<?php echo base_url(); ?>home">Print Online</a>
        </div>
        <div id="navbar">
          <ul class="nav navbar-nav">
            <li><a href="<?php echo base_url(); ?>pages/cetak">Print Dokumen</a></li>
            <li><a href="<?php echo base_url(); ?>prices/index">Lihat Harga</a></li>
            <li><a href="<?php echo base_url(); ?>about">Tentang Kami</a></li>

          </ul>
          <ul class="nav navbar-nav navbar-right nav-list">
            <li><a href="#register" data-toggle="modal" data-target="#register">Register</a></li>
            <li><a href="#">Sign in</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div id="register" class="modal" tabindex="-1" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">

          <div class="modal-header">
            <button type="button" id="close" class="close" data-dismiss="modal">&times;</button>
            <h3 class="modal-title">PENDAFTARAN</h3>
          </div>

          <div class="modal-body">
            <div class="row">
              <form method="POST" action="<?php echo base_url('pages/proses_register')?>">

              <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama Lengkap"/>  
              
              <input type="text" name="email" id="email" class="form-control" placeholder="Alamat Email"/>
              
              <input type="text" name="notelepon" id="notelepeon" class="form-control" placeholder="No Telepon"/>
              
              <input type="text" name="username" id="username" class="form-control" placeholder="Username"/>
              
              <input type="password" name="password" id="password" class="form-control" placeholder="Password"/>
              
                
              <div class="row form-group">
                <div class="col-sm-12">
                  <button type="submit" name="register" value="submit" class="btn btn-primary"/>DAFTAR</button>
                  
                </div>
              </div>
              
              
              </form>
          
          <div class="modal-footer">
            <p class="text-center">Already have an account? <a href="#">Sign In</a></p>
          </div>
        </div>
      </div>
    </div>
  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <!--link yg dicopy dari w3schools.com-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!--link yg dicopy dari web bootstrap-->

    <script src="register.js"></script>
  </body>