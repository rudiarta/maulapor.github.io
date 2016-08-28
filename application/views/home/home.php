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
  <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.js"></script>
  <script src="<?php echo base_url(); ?>js/ie-emulation-modes-warning.js"></script>
  <script src="<?php echo base_url(); ?>js/jquery-1.12.2.min.js"></script>
</head>


<body id="maulapor" data-spy="scroll" data-target=".navbar" data-offset="60">




  <!-- Bagian Header Navigasi-->
  <nav class="navbar navbar-inner hidden-xs hidden-sm" data-spy="affix" style="border:none; border-radius: 0px 0px 0px 0px; margin-top:40px;">
    <div class="container-fluid" style="">

      <!-- Untuk List Tmapilah HP -->
      <div class="navbar-header" style="padding-left: 50px;">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php echo base_url(); ?>" style="font-family:rockwell;">MauLapor.com<hr></a>
      </div>
      <!-- Untuk List Tmapilah HP -->

      <div id="navbar" class="navbar-collapse collapse">
        <!-- UL Atas-->
        <ul class="nav navbar-nav">
          <li class="active" ><a href="<?php echo base_url(); ?>">Home</a></li>
          <li><a href="#update">News</a></li>
          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Laporan<span class="caret"></span></a>

            <ul class="dropdown-menu">
              <li style="padding: 2px; margin-top:10px;"><a href="<?php echo base_url(); ?>lapor/kehilangan">Kehilangan</a></li>
              <li><a href="<?php echo base_url(); ?>lapor/penemuan">Penemuan</a></li>
              <li><a href="#">Pengaduan</a></li>
            </ul>
          </li>
          <li><a href="<?php echo base_url(); ?>home/about" >Tentang</a></li>
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
                      <label for="email">Email:</label>
                      <input name="user" type="text" class="form-control" id="email" placeholder="Masukkan email" >
                    </div>
                    <div class="form-group" >
                      <label for="pwd">Password:</label>
                      <input name="password" type="password" class="form-control" id="pwd" placeholder="Masukkan password" >
                    </div>
                    <div class="checkbox">
                      <label><input type="checkbox"> Remember me</label>
                    </div>

                    <button type="submit" class="btn btn-default" style="margin-left:35%; background-color: #00acc1; color: white; border-radius: 10px 10px 10px 10px;">Masuk</button>

                  </form>
                </div>
              </div>
            </div>
          </div>


          <!-- LI daftar-->
          <li data-toggle="modal" data-target="#myModal1"><a href="#" >Daftar</li></a>

          <!-- Modal daftar-->
          <div class="modal fade" id="myModal1" role="dialog">
            <div class="modal-dialog">

              <div class="modal-content" style="margin: 0 auto; width: 50%;">
                <div style="padding: 10px;">
                  <?php echo form_open('login/daftar'); ?>
                    <p style="text-align: center; background-color: #00acc1; color:white; margin-top: 10px; padding: 10px; font-family: verdana; border-radius: 10px 10px 10px 10px;"> Mendaftar Sekarang </p>
                    <div class="form-group" >
                      <label for="username">Username:</label>
                      <input name="user" type="username" class="form-control" id="username" placeholder="Masukkan Username" >
                    </div>
                    <div class="form-group" >
                      <label for="username">No. Handphone :</label>
                      <input name="no_telp" type="text" class="form-control" id="No.Handphone" placeholder="Masukkan No.Handphone" >
                    </div>
                    <div class="form-group" >
                      <label for="email">Email:</label>
                      <input name="email" type="email" class="form-control" id="email" placeholder="Masukkan email" >
                    </div>
                    <div class="form-group" >
                      <label for="pwd">Password:</label>
                      <input name="password" type="password" class="form-control" id="pwd" placeholder="Masukkan password" >
                    </div>
                    <div class="form-group" >
                      <label for="pwd">Konfirmasi ulang password:</label>
                      <input name="confirmPassword" type="password" class="form-control" id="pwd" placeholder="Konfirmasi" >
                    </div>
                    <div class="checkbox">
                      <label><input type="checkbox"> Remember me</label>
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


    <!-- Tulisan dalam gambar carousel-->
<!--
    <div class="jumbotron" style="height: 500px; margin:0; background-image:url(pic/b.jpg); border-image-repeat: no-repeat; background-color: #fff; background-size:cover; background-repeat:no-repeat;">
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
            <div class="col-md-4">2.754 Pelapor</div>
            <div class="col-md-4">1.230 Kehilangan</div>
            <div class="col-md-4">570 Penemuan Sukses</div>
          </div>
        </div>

      </div>
    </div>     -->
    <!-- first section - Home -->

<div id="home" class="home" style="background-image:url(<?php echo base_url(); ?>pic/system/lapor.png);">
  <div class="text-vcenter">
    <h1>MauLapor Indonesia</h1>
    <h3>Jadilah Pelopor Pelapor Kebaikan di Negeri Ini.<br>Laporkan barang anda yang hilang, dan jika anda menemukan barang disini.</h3>
  </div>
</div>
<!-- /first section -->


    <div class="row" id="angka" style=" height:250px; width:100%; margin: 0;">
          <div id="font">
            <div class="col-md-4">
              <div class="jml">
                  <?php foreach ($countFound as $data); echo $data->count; ?>
                  <div class="info1">PENEMUAN</div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="jml" id="go">
                  <?php foreach ($countSuccess as $data); echo $data->count; ?>
                  <div class="info1" id="go">BERHASIL</div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="jml">
                  <?php foreach ($countMissing as $data); echo $data->count; ?>
                  <div class="info1">KEHILANGAN</div>
              </div>
            </div>
          </div>
        </div>
      <!-- Tampilan untuk dekstop >= 1200px-->
        <div class="jumbotron visible-lg" style="height:450px; background-color:white; background-image:url(<?php echo base_url(); ?>pic/system/indi.png); border-image-repeat: no-repeat; background-color: #fff; background-size:cover; background-repeat:no-repeat; font-variant: small-caps;">

        <h1 style="font-size:30px;  letter-spacing:3px; padding-top:0;color: white; width:50%; margin-left:35px;">Lebih Cepat, Mudah, Murah dan Terjamin</h1>

        <div class="kotak" style=" margin-top:50px; background-color:white; float:left; margin-left:170px; padding:0;  border-radius:10px; box-shadow:0px 5px 0px 0px #eeeeee ;">

        <h1 style="float:left; font-size:40px;  letter-spacing:3px; padding-top:0; margin:0px 20px 0px 20px ;"><a href="<?php echo base_url(); ?>product" style="color:red; ">Daftar Disini</a></h1>
      </div>
    </div>
      <!-- Tampilan untuk dekstop -->

      <!-- Tampilan untuk dekstop >= 992px-->
        <div class="jumbotron visible-md" style="margin-top:70px; height:400px; background-color:white; background-image:url(<?php echo base_url(); ?>pic/system/indi.png); border-image-repeat: no-repeat; background-color: #fff; background-size:cover; background-repeat:no-repeat; font-variant: small-caps;">

        <h1 style="font-size:25px;  letter-spacing:3px; padding-top:0;color: white; width:50%; margin-left:35px;">Lebih Cepat, Mudah, Murah dan Terjamin </h1>

        <div class="kotak" style=" margin-top:50px; background-color:white; float:left; margin-left:150px; padding:0;  border-radius:10px; box-shadow:0px 5px 0px 0px #eeeeee ;">

        <h1 style="float:left; font-size:30px;  letter-spacing:2px; padding-top:0; margin:0px 20px 0px 20px ;"><a href="<?php echo base_url(); ?>product" style="color:red; ">Daftar Disini</a></h1>
      </div>
    </div>
      <!-- Tampilan untuk dekstop -->

      <!-- Tampilan untuk Tab >= 768 -->
      <div class="jumbotron visible-sm" style="margin-top:140px; height:300px; background-color:white; background-image:url(<?php echo base_url(); ?>pic/system/indi.png); border-image-repeat: no-repeat; background-color: #fff; background-size:cover; background-repeat:no-repeat; font-variant: small-caps;">

        <h1 style="font-size:20px;  letter-spacing:3px; padding-top:0;color: white; width:50%; margin-left:15px;">Lebih Cepat, Mudah, Murah dan Terjamin </h1>

        <div class="kotak" style=" margin-top:20px; background-color:white; float:left; margin-left:100px; padding:0;  border-radius:10px; box-shadow:0px 5px 0px 0px #eeeeee ;">

        <h1 style="float:left; font-size:25px;  letter-spacing:2px; padding-top:0; margin:0px 20px 0px 20px ;"><a href="<?php echo base_url(); ?>product" style="color:red; ">Daftar Disini</a></h1>
      </div>
    </div>
    <!-- Tampilan untuk Tab >= 768 -->

    <!-- Tampilan untuk Mobile <= 768 -->
      <div class="jumbotron visible-xs" style="margin-top:140px; height:300px; background-color:white; background-image:url(<?php echo base_url(); ?>pic/system/jada.png); border-image-repeat: no-repeat; background-color: #fff; background-size:cover; background-repeat:no-repeat; font-variant: small-caps;">

        <h1 style="font-size:17px;  letter-spacing:3px; padding-top:0;color: white; width:40%; margin-left:15px;">Lebih Cepat, Mudah, Murah dan Terjamin </h1>

        <div class="kotak" style=" margin-top:20px; background-color:white; float:left; margin-left:10px; padding:0;  border-radius:10px; box-shadow:0px 5px 0px 0px #eeeeee ;">

        <h1 style="float:left; font-size:15px;  letter-spacing:2px; padding-top:0; margin:10px 10px 10px 10px ;"><a href="<?php echo base_url(); ?>product" style="color:red; ">Daftar Disini</a></h1>
      </div>
    </div>
    <!-- Tampilan untuk Mobile <= 768 -->

    <h3 style="padding-top:20px;color:#37474f;"><a href="<?php echo base_url(); ?>lapor/kehilangan">Daftar Barang Hilang</h3></a>
    <div id="h2" style="color: #546e7a;">Menolong sesama dengan bantu menemukan barang mereka </div>

    <!-- Masuk ke Main Kehilangan-->
    <div class="container marketing">
    <hr>
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
                  <hr>
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
            <!--
              <a href="#1" data-toggle="tab" class="list-group-item" style="border-radius: 20px;">Hilang Tas berisi surat Mobil dan STNK</a>
              <a href="#2" data-toggle="tab" class="list-group-item">Telah hilang sepeda motor Vixion AB 2331 DC di Lodadi</a>
              <a href="#3" data-toggle="tab" class="list-group-item">128 User telah menemukan barang mereka yg hilang</a>
              <a href="#4" data-toggle="tab" class="list-group-item">Ayo lebih tingkatkan kepedulian kita terhadap sesama</a>
              <a href="#5" data-toggle="tab" class="list-group-item" style="border-radius: 20px;">Silahkan laporkan Kehilangan dan penemuan barang disini</a>
            -->
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
