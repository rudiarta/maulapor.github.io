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
      <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.js"></script>
      <script src="<?php echo base_url(); ?>js/ie-emulation-modes-warning.js"></script>
      <script src="<?php echo base_url(); ?>js/jquery-1.12.2.min.js"></script>
  </head>


  <body id="maulapor" data-spy="scroll" data-target=".navbar" data-offset="60">
    
  <!-- Bagian Header Navigasi-->

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
          <li data-toggle="modal" data-target="#myModal"><a href="#">Masuk</a></li>
          <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">

              <!-- Modal content-->
              <div class="modal-content" style="width: 50%; margin: 0 auto;">  
                <div style="padding:10px;">
                  <?php echo form_open('login/validasi'); ?>
                    <p style="text-align: center; background-color: #00acc1; color:white; margin-top: 10px; padding: 10px; font-family: verdana; border-radius: 10px 10px 10px 10px;"> Masuk</p>
                    <div class="form-group" >
                      <label for="email">User:</label>
                      <input name="user" type="text" class="form-control" id="email" placeholder="Masukkan email" >
                    </div>
                    <div class="form-group" >
                      <label for="pwd">Password:</label>
                      <input name="password" type="password" class="form-control" id="pwd" placeholder="Masukkan password" >
                    </div>
                    <div class="checkbox">
                      <label><input name="remember" type="checkbox"> Remember me</label>
                    </div>

                    <button type="submit" class="btn btn-default" style="margin-left:35%; background-color: #00acc1; color: white; border-radius: 10px 10px 10px 10px;">Masuk</button>
                    
                  </form>
                </div>  
              </div>
            </div>
          </div>      


          <!-- LI daftar-->
          <li data-toggle="modal" data-target="#myModal1"><a href="#">Daftar</li></a> 

          <!-- Modal daftar-->
          <div class="modal fade" id="myModal1" role="dialog">
            <div class="modal-dialog">

              <div class="modal-content" style="margin: 0 auto; width: 50%;">  
                <div style="padding: 10px;">
                  <?php echo form_open('login/daftar'); ?>
                    <p style="text-align: center; background-color: #00acc1; color:white; margin-top: 10px; padding: 10px; font-family: verdana; border-radius: 10px 10px 10px 10px;"> Mendaftar Sekarang </p>
                    <div class="form-group" >
                      <label for="username">Username:</label>
                      <input name="user" type="username" class="form-control" id="username" placeholder="Masukkan Username" required>
                    </div>  
                    <div class="form-group" >
                      <label for="username">No. Handphone :</label>
                      <input name="no_telp" type="text" class="form-control" id="No.Handphone" placeholder="Masukkan No.Handphone" required>
                    </div>  
                    <div class="form-group" >
                      <label for="email">Email:</label>
                      <input name="email" type="email" class="form-control" id="email" placeholder="Masukkan email" required>
                    </div>
                    <div class="form-group" >
                      <label for="pwd">Password:</label>
                      <input name="password" type="password" class="form-control" id="pwd" placeholder="Masukkan password" required>
                    </div>
                    <div class="form-group" >
                      <label for="pwd">Konfirmasi ulang password:</label>
                      <input name="confirmPassword" type="password" class="form-control" id="pwd" placeholder="Konfirmasi" >
                    </div>
                    <button type="submit" class="btn btn-default" style="margin-left:35%; background-color: #00acc1; color: white; border-radius: 10px 10px 10px 10px;">Daftar</button>        
                    </form>
                  </div>  
                </div>
              </div>
            </div>      
            <!-- habis Modal Daftar-->
          </ul>
        </div>
      </div>    

    </nav>
    <!-- Bagian Header Navigasi Habis-->

<br><br><br>
  <div class="container">
    <div class="col-xs-12 col-sm-12">
        <img src="<?php echo base_url(); ?>pic/system/logo.png" style="width:200px;">
      <form action="<?php echo base_url()."lapor/".$mod; ?>" method="get">
        <input type="text" name="search" placeholder="Search..">
      
    </div>

  <div class="col-xs-12 col-sm-4">
    
          <br>
          <select id="lokasi" name="lokasi">
            <option value="">Lokasi Kehilangan</option>
            <?php foreach($location as $data){ ?>
                <option value="<?php echo $data->id; ?>" ><?php echo $data->name; ?></option>
            <?php } ?>
          </select>
    
  </div>

  <div class="col-xs-12 col-sm-4">
    
        <br>
          <select id="waktu" name="waktu">
             <option >Waktu Kehilangan</option>
            <option >Januari</option><option >Februari</option><option >Maret</option><option >April</option><option >Mei</option><option >Juni</option><option >Juli</option><option >Agustus</option><option >September</option><option >Oktober</option><option >November</option><option >Desember</option>
          </select>
    
  </div>

  <div class="col-xs-12 col-sm-4">
    
      <br>
        <select id="kategori" name="kategori">
          <option value="">Jenis Barang</option>
          <?php foreach($category as $data){ ?>
              <option value="<?php echo $data->id; ?>" ><?php echo $data->name; ?></option>
          <?php } ?>
        </select>
    
  </div>

  </div>

    <div class="col-xs-12 col-sm-12" style="margin:0px; padding: 0px;">
      <button type="submit" class="button" style="vertical-align:middle"><span>Cari</span></button>
    </div><br><br><br>
    </form>
    
    <div class="jumbotron" style="background-color: #546e7a; padding:30px; padding-top: 5px;">
      <div class="container">
        <div class="col-xs-12 col-md-4" style="border: none">
          <h3 style="color: #fff; text-align: left; font-family: verdana;">Daftar Barang <?php if($mod=='penemuan'){ echo"Temuan"; }else{ echo"Hilang"; } ?></h3>
        </div>
      </div>
    </div>
    

  <div class="container marketing">
    <div id="row" style="padding-top:30px;">

      <?php 
        if($mod=="kehilangan"){
          $query = $categoryMissing;
        }else{
          $query = $categoryFound;
        }
          foreach($query as $data){ 
            $tampung = $data->picture;
            $tampung1 = explode(",", $tampung); 
            $picture = $tampung1[0];
      ?>

      <div class="col-md-3" style="border: none;">
        <div class="jumbotron" style=" padding: 5px; height: 400px; border: 1px solid #fff; padding-top:0px; padding-left: 0px; padding-right: 0px; box-shadow: 3px 3px 3px #C0C0C0;">
          <span class="label label-default" style="position: absolute; margin-top: 185px; margin-left:100px; background-color: #ff6d00">New</span>
            <img   class="col-xs-12" src="<?php echo base_url().'pic/'.$picture; ?>" alt="Generic placeholder image" width="300" height="180" style="border: none; padding: 0px; ">
          <div id="h2"><?php echo $data->tag; ?></div>
          <div id="p"><?php if($mod=="kehilangan"){echo"Pemilik";}else{echo"Penemu";} ?>       : <?php echo $data->name; ?><br><br>
                      <?php echo $data->note; ?>.....

          <p><a class="btn btn-default" href="<?php echo base_url(); ?>lapor/detail/<?php echo $data->id; ?>" role="button" style="margin-top: 5px;">Detail &raquo;</a></div>
        </div>
      </div>

      <?php } ?>
        
    <nav>
      <ul class="pager">
          <?php
            if($mod=="kehilangan"){
              $count = $countMissing;
            }else{
              $count = $countFound;
            }

            foreach ($count as $data);
            if($index != 1){
              $back = $index-1;
              echo"
              <li><a href='".base_url()."lapor/".$mod."/".$back."'  style='background-color: #6495ED; color: white;'><span aria-hidden='true'>&larr;</span>Back</a></li>";
            }else{

            }

            $total = $data->count/12;
            if($index < $total){
              $next = $index+1;
              echo"
              <li><a href='".base_url()."lapor/".$mod."/".$next."'  style='background-color: #6495ED; color: white;'>Next <span aria-hidden='true'>&rarr;</span></a></li> ";
            }else{

            }
            
          ?>
        </ul>
    </nav>
        <!--gambar kecil di bawah-->

    <div class="jumbotron container" style="background-color: #546e7a; padding:30px; padding-top: 5px; margin-top: 70px; border-radius: 10px;">
      <div class="col-xs-12 col-md-4" style="border: none">
        <h3 style="color: #fff; text-align: left; font-family: verdana;">Bulan Lalu</h3>
      </div>
    </div>

     <div class="container marketing"> 

     <?php 
        $query = $lastMonth;
          foreach($query as $data){ 
            $tampung = $data->picture;
            $tampung1 = explode(",", $tampung); 
            $picture = $tampung1[0];
      ?>

      <div class="jumbotron col-md-3" style=" padding: 0px; height: 130px; margin-bottom:15px; background-color: #fff; box-shadow:3px 3px #C0C0C0;">  
        <div class="row" style="padding: 0px; margin: 0px;">
          <div class="col-xs-6 col-md-6" style="border: none;">
            <p class="lead"><?php echo $data->tag; ?></p>
            <a class="btn btn-default" href="<?php echo base_url(); ?>lapor/detail/<?php echo $data->id; ?>" role="button" style="margin-top: 20px;">Detail &raquo;</a>
          </div>
          <div class="col-xs-6 col-md-6" style="border: none;  padding: 0px; margin: 0px;">
            <span class="label label-default" style="position: absolute; background-color:#0288d1; margin-left: 15px; margin-top:5px;">Kembali</span>
            <img class="featurette-image img-responsive center-block" src="<?php echo base_url().'pic/'.$picture; ?>" alt="Generic placeholder image" style="float: right;padding: 0px; margin: 0px; height: 130px; width: 120px;">
          </div>
        </div>
      </div>

      <?php } ?>
  
      </div> <br><br><br><br>
    </div>
  </div>

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
