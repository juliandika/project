<!DOCTYPE html>
<html>
  <head>
    <title>Online Printing</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>bootstrap.min.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="http://cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
    <script type="text/javascript" language="javascript" src="//code.jquery.com/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" language="javascript" src="//cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>
	  <script type="text/javascript" language="javascript" src="//cdn.datatables.net/plug-ins/9dcbecd42ad/integration/bootstrap/3/dataTables.bootstrap.js"></script>
	  <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/plug-ins/9dcbecd42ad/integration/bootstrap/3/dataTables.bootstrap.css">
    <style>.carousel-inner > .item > img,.carousel-inner > .item > a > img { width: 80%; margin: auto;}</style>
  </head>
  <body>
    <nav class="navbar navbar-inverse">
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
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Register</a></li>
            <li><a href="<?php echo base_url(); ?>login/index">Sign in</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container">
