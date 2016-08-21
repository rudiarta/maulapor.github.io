<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="<?php echo base_url(); ?>pic/system/icon.ico">
    <title>MauLapor.com - Jadilah Pelopor Kebaikan</title>  
    <link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/style.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/admin.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/carousel.css" rel="stylesheet">
    <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.js"></script>
    <script src="<?php echo base_url(); ?>js/ie-emulation-modes-warning.js"></script>
    <script src="<?php echo base_url(); ?>js/jquery-1.12.2.min.js"></script>
  </head>


<body id="maulapor" data-spy="scroll" data-target=".navbar" data-offset="60">
  <!-- Navigasi Header -->
  <nav class="navbar navbar-default" data-spy="affix" style="border:none; border-radius: 0px 0px 0px 0px;">  
    <div class="container-fluid">
      <div class="navbar-header" style="padding-left: 50px;">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php echo base_url(); ?>">MauLapor.com</a>
      </div>

      <div id="navbar" class="navbar-collapse collapse" >
        <!-- UL Atas-->
        <ul class="nav navbar-nav">
          <li class="active"><a href="<?php echo base_url(); ?>">Home</a></li>            
          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Melapor<span class="caret"></span></a>
            <ul class="dropdown-menu" >
              <li style="padding: 2px; margin-top:10px;"><a href="<?php echo base_url(); ?>lapor/kehilangan">Kehilangan</a></li>
              <li><a href="<?php echo base_url(); ?>lapor/penemuan">Penemuan</a></li>
              <li role="separator" class="divider"></li>
            </ul>
          </li>
          <li><a href="#update">Update</a></li>
          <li><a href="<?php echo base_url(); ?>home/about">Tentang</a></li>
        </ul>
        <!-- habis UL Atas-->

        <!-- Modal masuk-->
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['username']; ?> </a>
            <ul class="dropdown-menu" >
              <li class="dropdown-header">Profile</li>
                <li><a href="<?php echo base_url(); ?>login">Control Panel</a></li>   
                <li role="separator" class="divider"></li>            
                <li><a href="<?php echo base_url(); ?>login/log_out"> Keluar </a></li>      
              </li>
            </ul>
        </div>
      </div>
    </nav>
    <!-- Bagian Header Navigasi Habis-->



