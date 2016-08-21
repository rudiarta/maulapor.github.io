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
    <!-- Bagian Header Navigasi Habis-->


    <!-- Header dan text-->
  <div class="jumbotron" style="height: 500px; margin:0; background-image:url(<?php echo base_url(); ?>pic/system/b.jpg); border-image-repeat: no-repeat; background-size:cover; background-color: #fff;">
    <div id="section1">
      <div class="col-xs-12 col-sm-12 text-center" style="border:none; ">
        <h2 style="color: black; margin-top:150px; margin-left:16px; font-size: 40px;">Jadilah Pelopor Kebaikan</h2>
      </div>
    </div>
  </div>
  <!-- Header dan text-->

    <!-- APA ITU -->
    <div class="container" id="apa">
      <div class="col-xs-12 col-sm-11" style="border:none;">
        <h3 style="text-align: left;">Apa itu MauLapor.com ?</h3><br>
            <div id="p" style="text-indent: 20px; text-align: justify; letter-spacing:2px;">
              Media digital yang menyediakan platform untuk membantu  masyarakat dalam  mencari sesuatu yang  hilang atau menemukan yang bukan haknya untuk dikembalikan kepada pemiliknya baik dilakukan secara sengaja maupun tidak. Selain itu juga media ini akan digunakan sebagai wadah informasi terkini dari laporan yang terjadi di masyarakat. Harapannya akan banyak informasi yang bisa di dapatkan masyarakat itu sendiri. Karena masyarakat akan terlibat sebagai pembaca maupun sebagai jurnalis.
            </div>
      </div>
    </div>
    <!-- APA ITU -->
    

    <div class="container" id="team">
      <h3 style="text-align: left;">Meet Our Team</h3><br>

      <div class="row" >
          <!-- FOTO 1 -->
          <div class="col-xs-12 col-md-4 ">
            <a class="thumbnail demo-2 effect">
             <h2 class="zero">Founder & CEO of  Maulapor.com</h2>
             <p class="zero">Yanuar Anaba</p>
             <img class="top" src="<?php echo base_url(); ?>pic/system/team1.jpg" alt="...">
            </a>
          </div>
          <!-- FOTO 1 -->

          <!-- FOTO 2 -->
          <div class="col-xs-12 col-md-4 ">
            <a class="thumbnail demo-2 effect">
             <h2 class="zero">Director of Backend Developer</h2>
             <p class="zero">Rudi Arta</p>
             <img class="top" src="<?php echo base_url(); ?>pic/system/team2.jpg" alt="...">
            </a>
          </div>
          <!-- FOTO 2 -->

          <!-- FOTO 3 -->
          <div class="col-xs-12 col-md-4 ">
            <a class="thumbnail demo-2 effect">
             <h2 class="zero">Director of Structure Database</h2>
             <p class="zero">Yudhistira Arsya</p>
             <img class="top" src="<?php echo base_url(); ?>pic/system/team3.jpg" alt="...">
            </a>
          </div>
          <!-- FOTO 3 -->

          <!-- FOTO 4 -->
          <div class="col-xs-12 col-md-4 ">
            <a class="thumbnail demo-2 effect">
             <h2 class="zero">Director of Frontend Developer</h2>
             <p class="zero">Jecky Fernando</p>
             <img class="top" src="<?php echo base_url(); ?>pic/system/team4.jpg" alt="...">
            </a>
          </div> 
          <!-- FOTO 4 -->

          <!-- FOTO KOSONG -->
          <div class="col-xs-12 col-md-4 ">    
          </div>
          <!-- FOTO KOSONG -->

          <!-- FOTO 5 -->
          <div class="col-xs-12 col-md-4 ">
            <a class="thumbnail demo-2 effect">
             <h2 class="zero">Director of Social Media & Content Promotion</h2>
             <p class="zero" style="margin-top: 0px;">Akbar</p>
             <img class="top" src="<?php echo base_url(); ?>pic/system/team5.jpg" alt="...">
            </a>
          </div>
          <!-- FOTO 5 -->
      </div>
    <!-- ROW -->
</div>
<!-- CONTAINER APA -->



<div class="container" id="karir">
  <h3 style="text-align: left;">Karir</h3><br>

  <div class="col-xs-12 col-sm-11" style="border:none;">
    <div id="p" style="letter-spacing:2px;">
      Saat ini belum ada informasi mengenai rekrutmen karir di Maulapor.com. Untuk pertanyaan lebih lanjut dapat menghubungi di email : karir@maulapor.com<br><br>
      <b>Internship</b><br>
      Kami membuka lowongan magang/Internship full time untuk beberapa posisi berikut:<br><br>
      <b>1.  Accounting<br><br></b>
      Kualifikasi:<br>
      o Mahasiswa dari jurusan Akuntansi/Manajemen/jurusan lain yang berkaitan dengan Finance<br>
      o Memiliki inisiatif & kerja sama tim yang baik<br>
      o Memiliki jiwa sosial yang baik.<br><br>
      <b>Periode Magang:</b> selama 1 tahun ( 12 bulan )<br>

      Kirimkan CV ke maulaporid@gmail.com (max. 2 MB), 
      dengan subject: Internship_Accounting.
      <br><br>
      <b>2.  Desain Grafis & Branding Intern</b><br><br>
      Kualifikasi:<br>
      o Mahasiswa semua jurusan, diutamakan dari jurusan Desain Komunikasi Visual<br>
      o Dapat membuat desain yang berhubungan dengan branding<br>
      o Mahir menggunakan aplikasi untuk pembuatan desain dan video (Adobe Photoshop, Adobe After Effect, dll)<br>
      o Memiliki inisiatif & kerja sama tim yang baik<br>
      o Memiliki ketertarikan dengan employer branding dan desain grafis<br><br>

      <b>Periode Magang:</b>  selama 1 tahun  ( 12 bulan )<br>

      Kirimkan CV ke maulaporid@gmail.com (max. 2 MB), 
      subject: Internship_DGBI.

      Hanya kandidat yang sesuai kualifikasi yang akan dihubungi lebih lanjut.<br> Maulapor.com tidak pernah meminta biaya apapun dalam proses seleksi ini.<br><br>
    </div>
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

