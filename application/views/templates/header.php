<!DOCTYPE html>
<html>
  <head>
    <title>JULIANDKA</title>
    <link rel="stylesheet" href="https://bootswatch.com/flatly/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
    <script src="http://cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
  </head>
  <body>
    <nav class="navbar navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="<?php echo base_url(); ?>">PrintOnline</a>
        </div>
        <div id="navbar">
          <ul class="nav navbar-nav">
            <li><a href="<?php echo base_url(); ?>about">Print Dokumen</a></li>
            <li><a href="<?php echo base_url(); ?>posts">Lihat Harga</a></li>
            <li><a href="<?php echo base_url(); ?>posts">Categories</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="<?php echo base_url(); ?>posts/create">Create Posts</a></li>
            <li><a href="<?php echo base_url(); ?>categories/create">Create Category</a></li>
          </ul>
        </div>

      </div>

    </nav>

    <div class="container">
