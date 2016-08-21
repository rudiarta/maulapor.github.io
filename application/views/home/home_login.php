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
    


    <!-- Tulisan dalam gambar carousel-->

    <div class="jumbotron" style="height: 500px; margin:0; background-image:url(<?php echo base_url(); ?>pic/system/b.jpg); border-image-repeat: no-repeat; background-color: #fff; background-size:cover; background-repeat:no-repeat;">
      <div class="container" id="section1">
        <div class="col-xs-12 col-sm-6" style="border:none; ">
          <h2 style="color: black; margin-top:100px; margin-left:16px; font-size: 40px;">Jadilah Pelopor Kebaikan</h2>
          <div id="text_slider" style="color: black; font-size:">
            <div><h1>Laporkan</h1></div>
            <div><h1>Sebarkan</h1></div>
            <div><h1>Temukan</h1></div>
          </div>
        </div>

        <script>
          $("#text_slider div:gt(0)").hide();

          setInterval(function(){
            $('#text_slider div:first')
            .fadeOut(500).next().fadeIn(1000).end().appendTo('#text_slider');
          }, 3000);
        </script>

        <div class="row" style="margin-top: 470px; padding-bottom: 0px; ">
          <div id="font">
            <div class="col-md-4"><?php foreach ($countFound as $data); echo $data->count; ?> Penemuan</div>
          <div class="col-md-4"><?php foreach ($countMissing as $data); echo $data->count; ?> Kehilangan</div>
          <div class="col-md-4"><?php foreach ($countSuccess as $data); echo $data->count; ?> Laporan penemuan & kehilangan</div>
          </div>
        </div>

      </div>
    </div>

    <!-- Tulisan dalam gambar carousel-->
    <div class="jumbotron" style="margin-top:120px; ">
      <h3>" Melayani masyarakat yang membutuhkan bantuan dan menciptakan masyarakat yang Peduli Sesama "</h3>
    </div>
    <!-- Tulisan dalam gambar carousel-->

    <h3 style="padding-top:20px;color:#37474f;"><a href="<?php echo base_url(); ?>lapor/kehilangan">Daftar Barang Hilang</h3></a>
    <div id="h2" style="color: #546e7a;">Menolong sesama dengan bantu menemukan barang mereka </div>

    <!-- Masuk ke Main Kehilangan-->
    <div class="container marketing">
      <div id="row" style="padding-top:30px;">

      <?php
        //menampilkan data 4 hot kehilangan
         foreach ($queryMissing as $data) {    
         $tampung = $data->picture;
         $tampung1 = explode(",", $tampung); 
         $picture = $tampung1[0];
      ?> 

        <!-- Tampilan data ke-1 -->
        <div class="col-md-3" style="border: none;">
          <div class="jumbotron" style=" padding: 5px; height: 400px; border: 1px solid #fff; padding-top:0px; padding-left: 0px; padding-right: 0px; box-shadow: 3px 3px 3px #C0C0C0;">
            <span class="label label-default" style="position: absolute; margin-top: 185px; margin-left:100px; background-color: #ff6d00">New</span>
            <img  class="col-xs-12" src="<?php echo base_url().'pic/'.$picture; ?>" alt="Generic placeholder image" width="300" height="180" style="border: none; padding: 0px; ">
            <div id="h2"><?php echo $data->tag; ?></div>
            <div id="p">Pemilik       : <?php echo $data->name; ?><br><br>
              <?php echo $data->note; ?> .....<br>
              <a class="btn btn-default" href="<?php echo base_url(); ?>lapor/detail/<?php echo $data->id; ?>" role="button" style="margin-top: 5px;">Periksa &raquo;</a></div>
            </div>
          </div>
          <!-- Akhir Tampilan data ke-1 -->
        <?php
            //akhir pengulangan
           }
        ?>
       </div>
      </div>
   <!-- Habis Main Kehilangan-->



                  <h3 style="padding-top:20px; color:#37474f; "><a href="<?php echo base_url(); ?>lapor/penemuan">Daftar Penemuan Barang</h3></a>
                  <div id="h2" style="color:#546e7a;">Menolong sesama dengan bantu menemukan barang mereka </div>          

                  <!-- Masuk ke Main Penemuan Barang-->
                  <div class="container marketing">
                    <div id="row" style="padding-top:30px;">

                    <?php
                        //4 data penumuan hot
                        foreach ($queryFound as $data) {    
                        $tampung = $data->picture;
                        $tampung1 = explode(",", $tampung); 
                        $picture = $tampung1[0];
                    ?> 

                      <!-- Data Penemuan ke-1-->
                      <div class="col-md-3" style="border: none;">
                        <div class="jumbotron" style=" padding: 5px; height: 400px; border: 1px solid #fff; padding-top:0px; padding-left: 0px; padding-right: 0px;  box-shadow: 3px 3px 3px #C0C0C0;">
                          <img class="col-xs-12" src="<?php echo base_url().'pic/'.$picture; ?>" alt="Generic placeholder image" width="254" height="180" style="border: none; padding: 0px;">
                          <div id="h2"><?php echo $data->tag; ?></div>
                          <div id="p">Penemu       : <?php echo $data->name; ?><br><br>
                            <?php echo $data->note; ?> .....<br>
                            <p><a class="btn btn-default" href="<?php echo base_url(); ?>lapor/detail/<?php echo $data->id; ?>" role="button" style="margin-top: 5px;">Periksa &raquo;</a></div>
                            </div>
                          </div>
                          <!-- Akhir Data Penemuan ke-1-->
                          <?php
                              //akhir pengulangan
                             }
                          ?>
                      </div>
                    </div>
                    <!-- Akkhir Main Penemuan Barang-->

                                  <br>
                                  <h3 id="update" style="padding-top:20px;">Update</h3>

                                  <!-- Form Update -->
                                  <div class="container">
                                    <div class="row">

                                      <!-- Tab pilihan-->
                                      <div class="col-xs-12 col-sm-4"style="border: none; margin-top:50px;">

                                        <div class="list-group">
                                        
            <ul class="nav nav-pills nav-stacked">

              <?php
                 foreach($hotArticle as $urut=>$data){
                 $urut=$urut+1;
              ?>

              <li><a href="#<?php echo $urut; ?>" data-toggle="tab" class="list-group-item"><?php echo $data->title; ?></a></li>

               <?php } ?>
            </ul>
          </div>
        </div>
        <!-- Habis Tab-->

        <!-- Masuk Ke setiap isi Tab_fane-->
        <div class="tab-content font col-xs-12 col-sm-8" style="border: none; margin: 0px; padding: 0px;">

          <?php
            foreach($hotArticle as $urut=>$data){
            $urut=$urut+1;
          ?>

          <!-- Tab ke-1-->
          <div id="<?php echo $urut; ?>" class="tab-pane fade <?php if($urut==1) echo'in active' ?>" style="margin-top: 0px; padding-top: 0px;"> 
            <h3><?php echo $data->title; ?></h3>
            <img src="<?php echo base_url().'pic/'.$data->picture; ?>" alt="Generic placeholder image" width="300px;" height="280">
            <p><?php echo $data->content; ?></p>
          </div>
          <!-- Abis Tab ke-1-->

          <?php } ?>

        </div>
        <!-- Abis dari setiap tab_fane -->
      </div>
    </div>
    <!-- Habis Form Update-->

    <!-- bagian Footer-->
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
              Email support@maulapor.com<br></p>
            </div>
            <!-- abis bagian Info-->

          </div>
        </div>    
        <!-- habis form Footer-->


      <script>window.jQuery || document.write('<script src="<?php echo base_url(); ?>js/jquery.min.js"><\/script>')</script>
      <script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
    </body>
  </html>

