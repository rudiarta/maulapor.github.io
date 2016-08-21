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


    <!-- Header dan text-->
  <div class="jumbotron" style="height: 500px; margin:0; background-image:url(<?php echo base_url(); ?>pic/system/b.jpg); border-image-repeat: no-repeat; background-size:cover; background-color: #fff;">
    <div id="section1">
      <div class="col-xs-12 col-sm-12 text-center" style="border:none; ">
        <h2 style="color: black; margin-top:150px; margin-left:16px; font-size: 40px;">Jadilah Pelopor Kebaikan</h2>
      </div>
    </div>
  </div>


      <div class="container" id="ketentuan1">
        <div class="col-xs-12 col-sm-12" style="border:none;">
          <h3 style="text-align:center; font-size:40px;">Ketentuan</h3><br>
          <ul class="nav nav-pills nav-tabs">
            <li class="active"><a data-toggle="pill" href="#syarat">Syarat dan Ketentuan</a></li>
            <li><a data-toggle="pill" href="#kebijakan">Kebijakan Privasi</a></li>
          </ul>
          <div class="tab-content text-left">
            <div id="syarat" class="tab-pane fade in active text-left">
              <h3 class="active" style="text-align: left">Syarat dan Ketentuan</h3>
            <div id="p" style="text-align: justify; text-indent: 20px; letter-spacing: 2px;">

              <p>Syarat dan ketentuan dalam  halaman ini mengikat para Pengguna dan  Pengunjung Situs www.maulapor.com untuk tunduk dan patuh atas apa yang telah ditetapkan oleh pihak pengelola situs. Penggunaan istilah â€œandaâ€� atau â€œpenggunaâ€� berarti setiap orang yang menggunakan atau  mengakses Layanan atau Situs baik secara manual maupun melalui sistem otomatis, termasuk setiap orang yang melihat-lihat Layanan dan materi di dalamnya, memberikan komentar terhadap materi atau merespon  terhadap  iklan yang dipasang di dalam Situs.<br>
              <p>Dengan menggunakan Layanan ini, anda setuju untuk tunduk kepada Syarat dan Ketentuan Umum ini dan setiap syarat dan ketentuan serta petunjuk lain yang berlaku untuk Layanan, yang mungkin diubah atau diperbarui oleh Maulapor.com  dari waktu ke waktu atas kebijaksanaannya sendiri.<br>
              <p>Apabila anda tidak setuju atas Syarat & Ketentuan Umum ini, kami mempersilakan anda untuk tidak melanjutkan penggunaan Layanan. Jika anda berusia di bawah 18 tahun, anda harus menggunakan Layanan dengan persetujuan dari dan didampingi oleh orang tua atau wali anda.<br>
              <p>Maulapor.com  dapat menyediakan terjemahan dari Syarat dan Ketentuan ini ke dalam Bahasa Asing. Anda memahami dan setuju bahwa meskipun Syarat dan Ketentuan ini telah diterjemahkan ke dalam Bahasa asing, apabila terjadi ketidak konsistenan antara versi Bahasa Indonesia dengan terjemahan Bahasa asing maka yang berlaku adalah versi Bahasa Indonesia. <br>
              <p>Dengan menggunakan situs www.maulapor.com, maka Pengguna dianggap telah memahami dan menyepakati semua isi dalam syarat dan ketentuan di bawah ini. Pengelola berhak mengubah syarat dan ketentuan sewaktu-waktu tanpa ada pemberitahuan terlebih dahulu dibawah ini sebagai berikut :
              <br><br>
              <b>Latar Belakang</b><br>
              Maulapor.com adalah wadah online yang menyediakan jasa laporan masyarakat mengenai sesuatu atau barang  temuan dan kehilangan serta berita terkini yang dipublikasikan oleh, dari, dan untuk masyarakat itu sendiri. Harapannya akan ada sinergitas sosial antara masyarakat, pemerintah dan pihak lain yang terkait.<br><br>

              <b>Kewajiban Pengguna Situs</b><br>
              1.  Wajib menyatakan diri sebagai seseorang yang  patuh di mata hukum sehingga dapat mempertanggungjawabkan segala tindakan yang merupakan kelalaian dan/atau pelanggaran atas syarat dan ketentuan penggunaan Situs;<br>
              2.  Wajib memberikan data dan informasi dengan benar, tidak menyesatkan, dan/atau pemalsuan;<br>
              3.  Wajib membuat akun untuk dapat mengakses fasilitas tertentu yang tidak tersedia bagi Pengguna Situs pada umumnya;<br>
              4.  Wajib menggunakan Situs untuk keperluan-keperluan yang tidak bertentangan dengan hukum, melanggar kesusilaan, maupun melanggar hak Pengelola maupun hak pihak Pengguna Situs lainnya;<br><br>

              <b>Larangan</b><br>
              1.  Dilarang memberikan dan/atau menyuruh pihak lain untuk memberikan data atau informasi yang tidak benar, serta memalsukan data atau keterangan pihak lain;<br>
              2.  Dilarang melakukan dan/atau menyuruh pihak lain untuk melakukan tindakan apapun yang dapat menyebabkan pelanggaran terhadap sebagian atau seluruh hak kekayaaan intelektual dari Pengelola Situs maupun Pengguna Situs lainnya;<br>
              3.  Dilarang melakukan dan/atau menyuruh pihak lain untuk melakukan tindakan apapun yang dapat merusak, mengganggu, atau membatasi sistem pada Situs.<br><br>

              <b>Kewajiban Bagi Pelapor </b><br>
              1.  Wajib memberikan informasi laporan yang aktual dan benar. Tidak melakukan pemalsuan atau penipuan  informasi.<br>
              2.  Bersedia laporan atau  informasi yang diberikan terpantau  oleh pihak pengelola situs.<br>
              3.  Wajib memberikan informasi yang tidak mengandung SARA.<br>
              4.  Tidak memberikan informasi yang dapat membuat pertikaian  atau  mengakibatkan huru hara serta perselisihan antara kedua belah pihak atau lebih.<br>
              5.  Wajib bertanggung jawab atas informasi laporan yang diberikan hingga pelaksanaan atas informasi tersebut berlangsung hingga selesai.<br> <br>
              â€ƒ
              <b>Kewajiban Bagi Masyarakat</b><br>
              1.  Wajib mencermati segala bentuk laporan dan  informasi yang di muat dalam situs ini.<br>
              2.  Wajib tidak melakukan penipuan untuk mencari keuntungan pribadi  semata yang dapat merugikan orang lain.<br>
              3.  Wajib berlaku dan bertindak jujur.<br><br>

              <b>Batasan Tanggung Jawab<br>
                1. Maulapor.com tidak bertanggung jawab atas kebenaran informasi, gambar dan keterangan, termasuk namun tidak terbatas pada perincian mengenai judul iklan, deskripsi, harga, alamat, nomor telepon yang diberikan oleh pemasang iklan.</b> Anda disarankan untuk berhubungan langsung dengan pemasang iklan untuk memastikan informasi yang dicari. Setiap informasi yang dibuat oleh pemasang iklan di Situs mengenai perusahaan, perorangan atau badan lainnya, dan/atau mengenai produk atau layanan mereka, bukan merupakan bentuk dukungan atau sokongan, ataupun mengimplikasikan dukungan atau sokongan, terhadap kualitas atau kelayakan  dari perorangan, perusahaan atau badan tersebut, atau terhadap layanan atau produknya. Tanggung jawab isi dan/atau materi iklan yang dipasang oleh pemasang iklan (â€œMateriâ€�) merupakan tanggung jawab sepenuhnya dari pemasang iklan. Maulapor.com tidak memiliki hak milik atas iklan yang dipasang oleh pengguna, maupun terlibat dalam proses kesepakatan, pembayaran, pengiriman serta proses purna jual di antara pelapor dan pengguna layanan. Perikatan untuk penyerahan barang atau jasa yang terjadi melalui Layanan atau sebagai hasil dari kunjungan dan keberhasilan penawaran yang diajukan oleh pengguna dibuat dengan bebas antara penjual dan pembeli.
                Informasi, gambar dan keterangan lainnya yang terdapat atau diterbitkan dalam Situs ini juga dapat mengandung ketidakakuratan atau kesalahan tipografis. Para pemasang iklan mungkin akan melakukan perubahan atau perbaikan, dan/atau memperbarui informasi yang tertera di dalam Situs dari waktu ke waktu. Maulapor.com tidak menanggung kewajiban untuk memperbaharui  Materi yang telah menjadi kadaluwarsa atau tidak akurat.<br><br>

                <b>2. Maulapor.com tidak bertanggung jawab atas semua jaminan dan kondisi,</b> termasuk segala implikasi dari jaminan, kualitas, kelayakan atas informasi yang disampaikan pemasang iklan. Dalam keadaan apapun, Maulapor.com tidak bertanggung jawab atas kerugian, baik khusus, langsung, tidak langsung ataupun yang bersifat konsekuensial, maupun kerugian atau kerusakan apapun sebagai akibat dari kerugian atas pemakaian, data atau keuntungan, baik dalam tindakan perikatan, kelalaian atau tindakan kesalahan lainnya, yang muncul dari atau berkaitan dengan penggunaan atau kinerja dari informasi dan/atau gambar yang disediakan oleh pemasang iklan.<br><br>

              <b>3. Maulapor.com tidak bertanggung jawab atas akibat langsung atau tidak langsung dari keputusan pengguna dalam mengajukan penawaran atau tidak mengajukan penawaran kepada pemasang iklan,</b> melakukan jual beli atau tidak melakukan jual beli dengan pemasang iklan.<br><br>

              <b>4. Maulapor.com tidak bertanggung jawab atau berkewajiban atas penyerahan barang atau jasa,</b>termasuk kepatuhan pembeli dan pemasang iklan dengan ketentuan perundang-undangan yang berlaku di Republik Indonesia baik dalam hal penawaran ataupun penjualan barang dan jasa ataupun transaksi lainnya.<br><br>

              <b>5. Maulapor.com tidak bertanggung jawab dan tidak berkewajiban terhadap Layanan yang tidak tersedia untuk sementara waktu sehubungan dengan masalah teknis yang berada di luar kendali kami.</b> Melalui Layanan, anda dapat terhubung ke situs-situs web lain yang tidak berada di bawah kontrol kami. Penyertaan suatu tautan (hyperlink) bukan berarti merupakan rekomendasi atau dukungan atas pandangan yang ditegaskan di dalam tautan (hyperlink) tersebut. Setiap upaya dilakukan untuk menjaga agar Layanan tetap berjalan lancar.<br><br>

              <b>6. Layanan yang diberikan Maulapor.com adalah â€œsebagaimana adanyaâ€�, "dengan segala kekurangan", dan "sebagaimana tersedia" tanpa jaminan apapun juga.</b> Maulapor.com dengan tegas menolak setiap jaminan mengenai keamanan, keandalan, dan pelaksanaan kegiatan-kegiatan yang dilakukan oleh para pengguna di Layanan dan jaminan atau ketentuan mengenai tidak ada pelanggaran, dapat diperdagangkan dan kelayakan untuk suatu tujuan tertentu. Dalam hal apapun Maulapor.com tidak berkewajiban atas suatu kerugian langsung, khusus, tidak langsung, yang merupakan contoh atau yang dapat dihukum, baik dalam suatu perikatan, perbuatan melawan hukum atau teori hukum lain, sekalipun kami telah diberitahu tentang kemungkinan kerugian tersebut.<br><br>

              <b>7. Pengguna memahami dan menyetujui bahwa penggunaan dan pelaksanaan kegiatan sehubungan dengan Situs dan Layanan oleh pengguna adalah atas kebijakan dan risiko pengguna sendiri dan bahwa pengguna sendiri bertanggung jawab penuh atas materi pengguna,</b> dan/atau atas kerusakan/kehilangan atas sistem elektronik anda dan/atau atas kerusakan/kehilangan atas informasi elektronik yang mungkin saja diakibatkan oleh pelaksanaan kegiatan tersebut.<br><br>

              <b>8. Pengguna secara khusus mengakui bahwa Maulapor.com tidak akan bertanggung jawab atas Materi atau tindakan pencemaran nama baik, tindakan yang melanggar, atau tindakan yang melawan hukum</b> apapun dari pihak ketiga manapun yang berhubungan dengan Maulapor.com dan Layanan ini. Segala resiko atas kerugian atau kerusakan dari hal-hal tersebut adalah seluruhnya tanggung jawab pengguna.<br><br>

              Dengan mengakses Layanan, pengguna menerima tanpa batasan atau kualifikasi, dan setuju untuk menggunakan Situs dan Layanan hanya untuk tujuan yang sah dan sesuai dengan syarat dan ketentuan ini, dan pengguna setuju untuk tidak:<br><br>
              1.  Menggunakan Layanan dengan cara apapun yang akan melumpuhkan, membebani, atau merusak, atau mengganggu penggunaan lainnya dari Layanan, termasuk, namun tidak terbatas pada, kemampuan setiap pengguna untuk terlibat dalam kegiatan real-time melalui Layanan; <br>
              2.  Menggunakan robot, spideratau perangkat otomatis lainnya, proses atau sarana untuk mengakses Layanan; untuk tujuan apapun, termasuk untuk memantau atau menyalin setiap bahan yang ada di Layanan; <br>
              3.  Menggunakan proses manual untuk memonitor atau menyalin setiap materi pada Layanan untuk terlibat dalam tujuan tidak sah lainnya tanpa persetujuan tertulis sebelumnya dari kami;<br>
              4.  Menggunakan perangkat apapun, perangkat lunak atau routineyang dapat mengganggu kinerja Layanan;<br>
              5.  Mengganggu, turut campur, menghalangi, merintangi kerja Layanan; <br>
              6.  Menyalin, mereproduksi, mengubah, memodifikasi, menciptakan karya turunan, atau menampilkan setiap konten secara publik dari Layanan atau Layanan tanpa izin tertulis dari Maulapor.com; atau melakukan reverse engineringatau mencoba untuk menemukan kode sumber yang berkaitan dengan Layanan atau alat di dalamnya, kecuali sejauh kegiatan tersebut secara tegas diizinkan oleh hukum yang berlaku walaupun ada pembatasan terkait hal ini; atau<br>
              7.  Mencoba untuk mengakses setiap area Layanan atau Situs dimana anda tidak mempunyai kewenangan atas akses tersebut;<br>
              8.  Melakukan upaya apapun yang sekiranya dapat menimbulkan kerugian baik materiil atau imateriil bagi kami ataupun pengguna lain dari Maulapor.com;<br>
              9.  Membuat akun baru dan/atau membeli dan/atau menjual akun untuk menghindari pembatasan yang mungkin kami kenakan pada pengguna kami;<br>
              10. Melakukan pelaporan palsu terhadap pengguna lainnya. Karena setiap laporan pelanggaran kebijakan layanan kami haruslah benar dan disampaikan dengan itikad baik dan dengan maksud mengatasi pelanggaran yang diketahui atau diduga melanggar kebijakan kami;<br>
              11. Melanggar atau menghindari hukum, hak pihak ketiga atau sistem kami, kebijakan, atau penentuan status akun anda;<br>
              12. Memanipulasi harga barang, termasuk dan tidak terbatas pada penyembunyian harga.<br>
              13. Melakukan pemasangan iklan palsu, tidak akurat, menyesatkan, memfitnah, atau konten mencemarkan nama baik;<br>
              14. Memindahtangankan ID termasuk namun tidak terbatas pada user namedanpassword anda ke pihak lain tanpa persetujuan kami;<br>
              15. Mendistribusikan atau mengirim spam, komunikasi elektronik yang tidak diminta atau massal, surat berantai, atau skema piramida;<br>
              16. Mendistribusikan virus atau teknologi lainnya yang dapat membahayakan kami, atau kepentingan atau properti dari pengguna kami;<br>
              17. Mengkomersialkan aplikasi kami atau informasi atau perangkat lunak yang terkait dengan aplikasi tersebut;<br>
              18. Mengumpulkan informasi tentang pengguna kami tanpa persetujuan;<br>
              19. Menghindari langkah-langkah teknis yang kami gunakan untuk menyediakan Layanan.
              Setiap upaya untuk memanipulasi layanan kami atau kebijakan kami dapat mengakibatkan tindakan terhadap akun anda. Selain penghapusan, anda mungkin akan dikenakan berbagai tindakan lainnya, termasuk hak memasang iklan atau penangguhan akun anda, bahkan termasuk dan tidak terbatas pada tindakan hukum. Karena penggunaan Layanan memerlukan sambungan Internet, anda mungkin harus membayar biaya yang terkait dengan akses Internet saat menggunakan Layanan atau Situs.  Pengguna bertanggung jawab melaksanakan semua pengaturan yang diperlukan guna mengakses Layanan atau Situs. Pengguna bertanggung jawab memastikan bahwa semua orang yang mengakses Layanan atau Situs melalui hubungan internet milik pengguna, mengetahui Syarat & Ketentuan Umum ini dan mematuhinya.<br><br>

              <b>Ganti Rugi</b><br><br>
              <p>Penguna setuju untuk melepaskan, membela dan membebaskan Maulapor.com, perusahaan terafiliasinya dan para direkturnya, komisarisnya, pejabatnya, karyawannya dan agennya dari dan terhadap suatu dan semua tuntutan, kewajiban, kerugian dan biaya (termasuk biaya hukum, penggantian kerusakan dan jumlah penyelesaian yang wajar) yang timbul dari atau berkaitan dengan atau yang mungkin timbul dari penggunaan dan/atau pengaksesan Layanan; pelanggaran atas suatu syarat dalam Syarat & Ketentuan Umum ini, <b>Kebijakan Privasi dan Larangan Iklan</b> oleh pengguna; pelanggaran terhadap suatu hak pihak ketiga manapun, termasuk namun tidak terbatas pada hak atas kekayaan intelektual, aset baik yang berupa harta bergerak ataupun harta tidak bergerak, hak privasi; dan/atau tuntutan apapun sehubungan dengan Materi pengguna yang menyebabkan kerugian terhadap pihak ketiga. Dalam hal ini Maulapor.com juga dapat turut serta dalam suatu pembelaan bersama dengan penasihat hukum pilihannya.<br><br>

              <b>Keterangan Isi/Materi Layanan</b><br><br>
    Materi yang ditayangkan di Layanan disediakan tanpa ketentuan atau jaminan apapun dalam hal isi, materi dan ketepatannya. Sejauh diijinkan oleh hukum yang berlaku di Republik Indonesia, Maulapor.com dengan ini secara tegas mengecualikan:<br><br>
    1.  Semua ketentuan, jaminan dan syarat lain yang dapat dinyatakan secara langsung maupun tidak langsung oleh undang-undang sebagai isi, materi dan ketepatannya; dan<br>
    2.  Kewajiban atas kehilangan atau kerugian langsung, tidak langsung atau yang merupakan akibat yang ditanggung oleh pengguna dalam hubungannya dengan Layanan atau dalam hubungannya dengan penggunaan, ketidakmampuan menggunakan, atau akibat dari penggunaan Layanan, setiap situs web yang terkait dengannya dan setiap materi yang ditempatkan padanya.<br><br>

    <p>Materi yang ditayangkan di Layanan adalah semata-mata untuk informasi guna membangun hubungan antara pemasang iklan dengan pengguna Layanan lainnya serta membantu pengguna Layanan untuk memutuskan mengajukan penawaran atau tidak mengajukan penawaran untuk barang atau jasa yang ditawarkan oleh Pemasang Iklan di Layanan.<br>
      <p>Apabila sebagai pengguna anda menggunakan informasi yang ada pada Layanan untuk kepentingan selain daripada yang dinyatakan pada paragraf di atas, maka kami dapat membatasi akses anda terhadap Layanan serta mengambil langkah hukum yang diperlukan atas tindakan anda.<br>
        <p>Pelaksanaan aktivitas akses ke Layanan tersedia untuk umum, namun Maulapor.com berhak menarik dan/atau mengubah Layanan yang disediakan tanpa pemberitahuan terlebih dahulu. Dari waktu ke waktu, Maulapor.com dapat membatasi akses ke beberapa bagian dari situs dan/atau keseluruhan dari Layanan kepada pengguna.<br>
          <p>Apabila pengguna memilih atau diberi password (kode identifikasi pengguna) atau bagian informasi lainnya sebagai bagian dari prosedur keamanan Layanan, maka pengguna wajib menjaga kerahasiaan informasi tersebut dan tidak diperbolehkan mengungkapkannya kepada pihak ketiga.<br>
            Maulapor.com berhak mematikan fungsi password (kode identifikasi pengguna), terlepas apakah dipilih oleh pengguna atau ditentukan oleh Maulapor.com dalam keadaan apapun dan dalam waktu kapanpun.<br>
            <p>Sebagai pengguna terdaftar, anda dapat kami berikan suatu tanda khusus termasuk namun tidak terbatas pada tujuan memvalidasi kebenaran informasi yang anda berikan kepada kami. Validasi ini bersifat gratis, tidak wajib dan tidak dikenakan biaya apapun akan tetapi anda diharapkan untuk berpartisipasi dalam kegiatan ini. Setelah kami memvalidasi kebenaran informasi yang anda berikan, kami akan memberikan tanda khusus di akun anda yang berlaku selama kami pandang patut, oleh karena itu kami harap anda secara berkala dapat melakukan validasi ulang pada saat sistem kami memintanya. Berkenaan dengan tanda khusus tersebut kami juga dapat mengubah, menghapus, ataupun menambahkan tanda khusus tersebut. Tentunya apabila anda melakukan pelanggaran pada sebagaian atau seluruh ketentuan yang anda di Maulapor.com tanda tersebut dapat kami hilangkan dari akun anda.<br>
              <p>Pemberian tanda khusus terhadap pengguna maupun iklan yang dipasang oleh pengguna bukan merupakan bentuk dukungan, rekomendasi maupun pendapat dari Maulapor.com terhadap pengguna, barang/jasa yang diitawarkan, serta bagaimana pengguna mengekspresikan barang/jasa yang mereka tawarkan.<br><br>


    <b>Perubahan Layanan</b><br><br>
    <p>Maulapor.com berhak memperbarui dan/atau mengubah tampilan dan/atau Layanan dan/atau isi Layanan secara rutin dan setiap saat, demi memberi pelayanan yang lebih baik kepada setiap penggunanya.<br>
      <p>Apabila dibutuhkan, Maulapor.com dapat menangguhkan akses ke Layanan, atau menutupnya untuk sementara waktu untuk jangka waktu yang tidak tertentu.<br>
        <p>Berkenaan dengan informasi mengenai pengguna dan kunjungan pengguna ke Layanan, Maulapor.com berhak mengolah informasi mengenai pengguna sesuai dengan kebijakan yang tercantum di dalam Kebijakan Privasi. Dengan menggunakan Layanan, pengguna setuju atas pemrosesan tersebut dan menjamin semua data yang diberikan adalah benar.<br><br>

          <b>Mengunggah Materi ke Layanan</b><br><br>
          <p>Anda mengakui dan setuju bahwa anda bertanggung jawab atas Materi yang anda pasang, transmisikan melalui maupun tautkan kepada Layanan dan setiap konsekuensi yang timbul dari tindakan tersebut.   Secara khusus anda bertanggung jawab atas setiap Materi yang anda unggah seperi email atau yang anda sediakan melalui Layanan atau Situs.  Sehubungan dengan Materi yang dipasang, ditransmisikan melalui maupun tautkan kepada Layanan oleh anda, anda menyatakan secara tegas bahwa:<br>
            <p>(i) anda mempunyai dan akan tetap mempunyai hak atas Materi tersebut selama Materi tersebut masih tersedia di Layanan atau Situs; anda mempunyai ijin, hak dan persetujuan untuk menggunakan Materi tersebut dan memberikan kewenangan kepada Maulapor.com untuk menggunakan Materi tersebut di dalam Layanan atau Situs atau untuk kepentingan promosi Maulapor.com atau untuk kepentingan lainnya sepanjang tidak bertentangan dengan Undang-Undang dan Syarat dan Ketentuan Umum ini; dan <br>
             <p>(ii)anda mempunyai persetujuan tertulis, pelepasan dan/atau ijin dari setiap dan seluruh individu yang dapat diidentifikasi maupun usaha yang terdapat di dalam Materi untuk menggunakan nama atau kemiripan dari setiap dan seluruh individu dan usaha tersebut di dalam Layanan atau Situs sesuai dengan Syarat dan Ketentuan Umum ini. anda tetap memiliki hak milik atas setiap Materi; namun dengan memasukkan Materi ke dalam Layanan, anda memberikan hak yang tidak dapat dibatalkan, tidak dapat dicabut kembali, berlaku terus menerus, di seluruh dunia, tidak ekslusif, bebas royalty dan dapat disublisensikan, dapat dipindahkan, untuk menggunakan, mereproduksi, mendistribusikan, membuat pekerjaan derivatif, memasang dan menampilkan Materi sehubungan dengan Layanan dan usaha Maulapor.com, termasuk namun tidak terbatas pada tujuan promosi dan redistribusi sebagian maupun seluruh dari Layanan dan Materi yang terdapat di dalamnya.  Hak-hak ini diperlukan oleh Maulapor.com untuk dapat menyediakan Layanan dan memasang Materi anda.   
               <br>
               <p>Selanjutnya, dengan memasang Materi ke dalam area publik di dalam Layanan, anda setuju untuk dan dengan ini memberikan kepada Maulapor.com seluruh hak yang diperlukan untuk melarang atau memperbolehkan pengumpulan, pemasangan, penyalinan, duplikasi, reproduksi atau eksploitasi Materi di dalam Layanan oleh pihak manapun untuk tujuan apapun.  Anda juga dengan ini memberikan kepada setiap pengguna Layanan dan Situs sebuah hak non-ekslusif untuk mengakses Materi anda melalui Layanan atau Situs.  Hak ini akan tetap berlaku dan dengan segera berakhir pada saat anda atau Maulapor.com menghapus atau menarik Materi dari Situs.<br>
                <p>Maulapor.com dapat memberlakukan batasan-batasan atau mengenakan biaya terhadap iklan yang dipasang oleh pengguna di dalam bagian-bagian tertentu dari Layanan penggunaan Saldo MAULAPOR.COM dan Fitur Promosi Iklan yang harus dilakukan sesuai dengan Syarat dan Ketentuan Umum ini, serta Syarat dan Ketentuan Saldo MAULAPOR.COM dan Syarat dan Ketentuan Fitur Promosi Iklan.<br>
                  <p>Apabila pengguna memasang iklan di kategori iklan berbayar dan menggunakan fitur promosi iklan, pengguna memberikan hak kepada Maulapor.com untuk mengenakan biaya atas aktivitas tersebut.<br>

                    <p>Maulapor.com berhak untuk menghapus setiap isi, materi atau bagian lain dari iklan, baik sebagian maupun keseluruhan, yang dipasang pengguna di Layanan atau Situs tanpa pemberitahuan terlebih dahulu kepada pengguna. Hal ini termasuk tapi tidak terbatas apabila iklan tersebut mengandung isi, materi atau bagian yang bersifat sensitif, ofensif, dapat memicu kebencian, mencemarkan nama baik, memuat materi yang memicu perpecahan suku, agama, ras, antar golongan, pornografi, perjudian, ataupun bertentangan dengan norma etika kesusilaan dan hukum yang berlaku di Republik Indonesia serta tidak sesuai dengan aturan yang berlaku di Layanan.<br><br>

                      <b>Durasi Iklan</b><br>
                      Masa aktif iklan adalah sebagaimana tertera di halaman pemasangan iklan Setelah masa aktif iklan habis maka iklan secara otomatis dan permanen terhapus.<br><br>

                      <b>Tautan (hyperlink) dari Layanan</b><br>
                      <p>Layanan dapat mengandung tautan (hyperlink) ke situs dan/atau sumber daya lain yang disediakan oleh pihak ketiga, dimana Maulapor.com menegaskan bahwa tautan (hyperlink) tersebut disediakan hanya sebagai informasi bagi pengguna. Maulapor.com melepaskan diri dari kewajiban untuk mengontrol isi dari situs dan/atau sumber daya yang terjadi karena tautan (hyperlink) yang ada di Layanan.  
          Maulapor.com tidak bertanggung jawab atas kehilangan dan/atau kerugian yang dapat timbul akibat penggunaan Layanan.<br><br>

          <b>Hubungan dengan Pihak Ketiga</b><br>
          <p>Anda mengakui dan setuju bahwa Maulapor.com  tidak akan bertanggung jawab atas interaksi anda dengan pihak ketiga di dalam Situs maupun melalui Layanan. Hal ini termasuk, namun tidak terbatas pada, pembayaran dan pengiriman barang dan jasa, serta syarat, kondisi, jaminan atau pernyataan lain yang terkait dengan interaksi antara anda dengan pihak ketiga.  Hubungan ini adalah antara anda dengan pihak ketiga tersebut. Anda mengakui dan setuju bahwa Maulapor.com tidak akan bertanggung jawab atas setiap kerugian atau kerusakan yang timbul dari hubungan atau interaksi tersebut. Dalam hal terjadi perselisihan antara pengguna dengan pihak ketiga, anda mengerti dan setuju bahwa Maulapor.com tidak bertanggung jawab untuk melibatkan diri dalam perselisihan tersebut dan anda dengan ini membebaskan Maulapor.com, karyawannya, petugasnya dan agennya dari setiap tuntutan dan kerugian yang timbul dalam bentuk apapun sehubungan dengan Layanan kami.
           <br><br>
           <b>Yurisdiksi dan Hukum yang Berlaku</b><br>
           <p>Syarat & Ketentuan Umum ini, Kebijakan Privasi dan Larangan Iklan serta hubungan pengguna dengan Maulapor.com tunduk, diatur dan patuh menurut hukum Republik Indonesia, dan pengguna sepakat untuk terikat pada yurisdiksi hukum Republik Indonesia.
            Apabila terjadi perselisihan dalam penafsiran dan pelaksanaan Syarat & Ketentuan Umum ini,Kebijakan Privasi dan Larangan Iklan, para pihak sepakat untuk menyelesaikannya secara musyawarah untuk mufakat.<br><br>

            <b>Perubahan-Perubahan</b><br>
            <p>Pengguna diharapkan untuk memeriksa halaman ini dari waktu ke waktu untuk memperhatikan setiap perubahan, karena hal tersebut mengikat pengguna.<br>
              <p>Sebagian dari ketentuan yang terdapat dalam Syarat & Ketentuan Umum ini dapat digantikan oleh ketentuan-ketentuan atau pemberitahuan lain yang dipublikasi di bagian lain Layanan.<br><br>


                <b>Lain-Lain</b><br>
                <p>Dengan menjadi pengguna Layanan, anda dapat memilih apakah anda berkeinginan untuk menerima informasi-informasi terkait Layanan, penggunaanya, serta hal-hal lain sehubungan dengan penggunaan akun anda, adapun informasi-informasi tersebut akan kami kirimkan atas dasar itikad baik melalui notifikasi baik berupa email ataupun notifikasi aplikasi ataupun bentuk-bentuk lain. Jika anda memilih untuk tidak menerima informasi, anda dapat memberitahu kami dengan menghubungi customer service kami.<br>
                  <p>Apabila pengguna memiliki hal lain yang ingin disampaikan atau komentar maupun keprihatinan mengenai materi yang tampak di Situs dan Layanan silakan hubungi customer service kami<br><br>
                    Terima kasih atas kunjungan anda ke Situs dan Layanan kami.<br><br>
                    <b>Maulapor.com</b>

                            </p>
          </div>
        </div>
        <div id="kebijakan" class="tab-pane fade">
          <h3 style="text-align: left">Kebijakan Privasi</h3>
          <div id="p" style="text-indent: 20px; letter-spacing: 2px;">

            <p>Ketentuan-ketentuan yang ada dalam halaman ini mengatur hal-hal menyangkut data-data para Pengguna Situs yang diberikan oleh para Pengguna Situs kepada Pengelola Situs dalam rangka pemanfaatan fasilitas, fitur, jasa, dan/atau layanan yang ditawarkan oleh Pengelola Situs melalui Situs www.maulapor.com. Ketentuan-ketentuan menyangkut data mengikat seluruh Pengguna Situs tanpa terkecuali untuk tunduk dan patuh atas ketentuan-ketentuan yang telah ditetapkan Pengelola Situs. Kebijakan Privasi ini tunduk pada hukum yang berlaku di Republik Indonesia khususnya Undang-undang No. 11 tahun 2008 tentang Informasi dan Transaksi Elektronik dan Peraturan Pemerintah No. 82 tahun 2012 tentang Penyelenggaraan Sistem dan Transaksi Elektronik.<br><br>

              Berikut ini ketentuan-ketentuan menyangkut data tersebut:<br><br>
              1.  Atas data-data yang diberikan oleh para Pengguna Situs kepada Pengelola Situs sebagai pemenuhan syarat atas pemanfaatan fasilitas, fitur, jasa, dan/atau layanan yang ditawarkan oleh Pengelola Situs, maka Pengelola Situs berkewajiban untuk:<br>
              a.  Menjaga kerahasiaan data-data para Pengguna yang tidak dapat ditampilkan dalam Situs dan/atau diberikan kepada pihak-pihak tertentu atas penggunaan jasa atau layanan Situs selama tidak ada perjanjian tertulis terlebih dahulu kepada Pengguna;<br>
              b.  Kerahasiaan data Pengguna yang wajib dijaga oleh Pengelola Situs menjadi tidak berlaku apabila Pengelola Situs dipaksa oleh ketentuan hukum yang berlaku, perintah pengadilan, dan/atau perintah dari aparat/instansi yang berwenang, untuk membuka data-data milik Pengguna tersebut;<br>
              2.  Pengelola Situs hanya bertanggung jawab atas data yang diberikan Pengguna Situs kepada Pengelola Situs sebagaimana yang telah ditentukan pada ketentuan sebelumnya;<br>
              3.  Pengelola Situs tidak bertanggung jawab atas pemberian atau pertukaran data yang dilakukan sendiri antar Pengguna Situs;<br>
              4.  Pengelola berhak untuk mengubah ketentuan menyangkut data-data para Pengguna Situs tanpa pemberitahuan terlebih dahulu dengan tanpa mengabaikan hak para Pengguna Situs untuk dijaga kerahasiaan datanya sebagaimana yang telah ditentukan dalam butir (1).<br></p>

            </div>
          </div>
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

