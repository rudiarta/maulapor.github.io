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
      <link href="<?php echo base_url(); ?>css/carousel.css" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/penemuan.css">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/admin.css">
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
    <!-- Navigasi Header -->
    <br><br>
          
    <div class="jumbotron" style="background-color: #546e7a; padding:30px; padding-top: 5px;">
      <div class="container">
        <div class="col-xs-12 col-md-4" style="border: none">
        <h3 style="color: #fff; text-align: left; font-family: verdana;">Detail Barang</h3>
        </div>
    </div>
  </div>

    <?php 
      foreach ($detail as $data); 
        $tampung = $data->picture;
        $tampung1 = explode(",", $tampung); 

        if(isset($tampung1[0])==""){
          $picture1="";
        }else{
          $picture1 = $tampung1[0];
        }
        
        if (isset($tampung1[1])==""){
          $picture2="";
        }else{
          $picture2 = $tampung1[1];
        }
        
        if (isset($tampung1[2])==""){
          $picture3="";
        }else{
          $picture3 = $tampung1[2];
        }
        
    ?>

    <div class="container" >
      <div class="col-md-6">

        <ul class="nav nav-pills nav-tabs">
           <li class="active"><a data-toggle="tab" href="#1">Foto 1</a></li>
          <li><a data-toggle="tab" href="#2">Foto 2</a></li>
          <li><a data-toggle="tab" href="#3">Foto 3</a></li>
        </ul>

        <div class="tab-content">
          <div id="1" class="tab-pane fade in active">
            <img class="col-md-12 col-xs-12" src="<?php echo base_url().'pic/'.$picture1; ?>" style="border: none;">
          </div>
          <div id="2" class="tab-pane fade">
            <img class="col-md-12 col-xs-12" src="<?php echo base_url().'pic/'.$picture2; ?>" style="border: none;">
          </div>
          <div id="3" class="tab-pane fade">
            <img class="col-md-12 col-xs-12" src="<?php echo base_url().'pic/'.$picture3; ?>" style="border: none;">
          </div>
        </div>
      </div>

    <div class="col-md-6" style="border: none;">
      <h3 style="padding: 0px 0px 0px 0px; margin:0px 0px 0px 0px;"><?php echo $data->tag; ?><hr></h3>
        <div class="col-md-12 personal-info" style="border: none;">
          <div class="alert alert-info alert-dismissable">
            <a class="panel-close close" data-dismiss="alert">×</a> 
            <i class="fa fa-coffee"></i>
            Info <strong> Barang </strong> yg anda pilih
          </div>

      <form class="form-horizontal" role="form">

          <div class="form-group">
            <label class="col-lg-3 control-label" style="border: none;">Nama Pelapor :</label>
            <div class="col-lg-8" style="border: none; text-align: left;">
              <p><?php echo $data->name_user; ?></p>
            </div>
          </div>          

          <div class="form-group">
            <label class="col-lg-3 control-label">Tempat/Waktu :</label>
            <div class="col-lg-8">
              <p style="text-align: left;"><?php echo $data->location." ,"; ?><?php echo $data->city." Pada Tanggal: "; ?><?php echo $data->date; ?></p>
            </div>
          </div>                   

          <div class="form-group">
            <label class="col-md-3 control-label">Kategori :</label>
            <div class="col-md-8">
            <p style="text-align: left;"><?php echo $data->category; ?></p>
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-3 control-label">Durasi:</label>
            <div class="col-md-8">
              <p style="text-align: left;">Hilang semenjak 2 bulan yang lalu</p>
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-3 control-label">No - Telp:</label>
            <div class="col-md-8">
              <p style="text-align: left;"><?php echo $data->contact; ?></p>
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-3 control-label">Email:</label>
            <div class="col-lg-8">
            <p style="text-align: left;"><?php echo $data->email; ?></p>
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <a title="Ketentuan pengambilan" data-toggle="popover" data-trigger="focus" data-content="MauLapor.com sama sekali tidak bertanggung jawab atas perjanjian yg dilakukan dalam transaksi pengembalian barang"><input type="button" class="btn btn-primary" value="Info"></a>
              <span></span>
            </div>
          </div>

        </form>

        </div>
      </div>
    </div>

      <script>
      $(document).ready(function(){
          $('[data-toggle="popover"]').popover();   
      });
      </script>
      <br><br>

    <div class="container">
      <div class="col-md-12" style="border:none;">
        <ul class="nav nav-pills nav-tabs nav-justified" style="border: none;">
          <li class="active"><a data-toggle="tab" href="#q1">Deskripsi Barang</a></li>
          <li><a data-toggle="tab" href="#q2">Ketentuan Pengembalian</a></li>
          <li><a data-toggle="tab" href="#q3">Apresiasi</a></li>
        </ul>
      </div>
    <br>
      <div class="tab-content">
        <div id="q1" class="tab-pane fade in active">
          <h3 style="text-align: left;">Deskripsi Barang</h3><br>
          <p style="text-indent: 40px;"><?php echo $data->chronological; ?>
          </p>
        </div>

        <div id="q2" class="tab-pane fade ">
          <h3 style="text-align: left;">Ketentuan Pengambilan</h3><br>
          <p style="text-indent: 40px;"><?php echo $data->note; ?></p>          
        </div>

        <div id="q3" class="tab-pane fade ">
          <h3 style="text-align: left;">Apresiasi</h3><br>
          <p style="text-indent: 40px;">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
        </div>
        </div>
    </div>
    <br><br><br><br>

    <div class="jumbotron" id="tentang" style="margin-top:0px; margin-bottom:0px; background-color:#bdbdbd; height: 500px;">
      <div class="container">
        <!-- bagian tentang-->
        <div class="col-xs-12 col-sm-4" style="text-align: left; padding: 0px;">
          <h3 style="color:black;">Tentang Kami</h3>
          <p><a href="<?php echo base_url(); ?>home/about#apa">Apa itu MauLapor.com</p></a>
          <p><a href="<?php echo base_url(); ?>home/about#team">Our Team</p></a>
          <p><a href="<?php echo base_url(); ?>home/about#karir">Karir</p></a>
        </div>
        <!-- Abis bagian tentang-->

        <!-- bagian kententuan-->
        <div class="col-xs-12 col-sm-4">
          <h3 style="color:black;">Ketentuan</h3>
          <p><a href="<?php echo base_url(); ?>home/ketentuan">Syarat dan Ketentuan</p></a>
          <p><a href="<?php echo base_url(); ?>home/ketentuan">Kebijakan Privasi</p></a>
        </div>
        <!-- abis bagian tentang-->

        <!-- bagian Info-->
        <div class="col-xs-12 col-sm-4">
          <h3 style="color:black;">Hubungi Kami<h3>
            <p style="color:black;">Mau Lapor Indonesia<br>
              Jalan Kaliurang Km. 10,5 Gentan, Sleman, Yogyakarta<br>
              Telp. 0878 3747 8227<br>
              Email Support@maulapor.com<br></p>
        </div>
            <!-- abis bagian Info-->

          </div>
        </div>        

    <script>window.jQuery || document.write('<script src="<?php echo base_url(); ?>js/jquery.min.js"><\/script>')</script>
      <script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
  </body>
</html>
