<!DOCTYPE html>
<html>
 <head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?php echo base_url(); ?>js/jquery.mobile-1.4.5.min.css">
  <link rel="icon" href="<?php echo base_url(); ?>pic/system/icon.png">
  <link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet">
  <script src="<?php echo base_url(); ?>js/ie-emulation-modes-warning.js"></script>
	<script src="<?php echo base_url(); ?>js/jquery-1.11.3.min.js"></script>
	<script src="<?php echo base_url(); ?>js/jquery.mobile-1.4.5.min.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/daftar.css">	
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.1/jquery.min.js"></script>

</head>
	<body>

<div data-role="page">

<!-- Header -->
  <div data-role="header" class="hidden-lg hidden-md">
    <h1>Informasi Registrasi</h1>
  </div>
<!-- Header -->

<!-- Logo -->
<div data-role="main" class="ui-content hidden-lg hidden-md">   	
   	<div class="ui-grid-solo">
      	<div class="ui-block-a">
        	<img src="<?php echo base_url(); ?>pic/system/indi.png" class="hidden-lg hidden-md" style="height:130px; width:100%;">
       	</div> 
  	</div>
	<div class="ui-grid-a">
	    <div data-role="navbar">
	  		<ul>
	  			<li><a href="#" data-icon="arrow-l" data-rel="back">Kembali</a></li>        
	    		<li><a href="index.html" data-icon="home" data-theme="a">Home</a></li>        
	  		</ul>
		</div>
	</div>
</div>
<!-- Logo -->

<!-- Input -->

  <div data-role="main" class="ui-content hidden-lg hidden-md" >
    <form method="post" action="demoform.asp" >
      <label style="font-size:12px; color:red;">*Siapakan foto KTP untuk di Upload*</label>
      <label for="nama">Nama :</label>
      <input type="text" name="nama" id="nama">
      <label for="alamat">Alamat Pemasangan:</label>
      <input type="text" name="alamat" id="alamat">
      <label for="email">Email:</label>
      <input type="text" name="email" id="email">
      <label for="hp">No Handphone:</label>
      <input type="text" name="hp" id="hp">
      <label for="hp2">No Alternatif Lainnya:</label>
      <input type="text" name="hp2" id="hp2">      
    </form>
  </div>

  <!-- <div data-role="main" class="ui-content visible-lg visible-md" style="width:100%;">
      <form method="post" action="demoform.asp" class="visible-lg visible-md" >
      <label for="nama"> :</label>
      <input type="text" name="nama" id="nama">
      <label for="alamat">Alamat Pemasangan:</label>
      <input type="text" name="alamat" id="alamat">
      <label for="email">Email:</label>
      <input type="text" name="email" id="email">
      <label for="hp">No Handphone:</label>
      <input type="text" name="hp" id="hp">
      <label for="hp2">No Alternatif Lainnya:</label>
      <input type="text" name="hp2" id="hp2">      
    </form>
  </div>   -->
  <!-- Input -->

  <!-- Select -->
   <div data-role="main" class="ui-content  hidden-lg hidden-md ui-nodisc-icon">
   <label for="fname">Info Paket IndiHome :</label>

    <ul data-role="listview" data-inset="true" class="ui-nodisc-icon ui-alt-icon">    
    <li><a href="#info1" id="icon" data-role="link" data-rel="popup" data-position-to="window" data-transition="flow" class="ui-btn ui-btn-icon-left ui-corner-all ui-shadow ui-btn-inline ui-icon-grid" style=" text-align: center; width:100%; font-size:13px; letter-spacing:2px;">Info Premier 10 Mbps</a></li><br>
    <li><a href="#info2" id="icon" data-role="link" data-rel="popup" data-position-to="window" data-transition="flow" class="ui-btn ui-btn-icon-left ui-corner-all ui-shadow ui-btn-inline ui-icon-grid" style="text-align: center; width:100%; font-size:13px; letter-spacing:2px;">Info Deluxe 20 Mbps</a></li><br>
    <li><a href="#info3" id="icon" data-role="link" data-rel="popup" data-position-to="window" data-transition="flow" class="ui-btn ui-btn-icon-left ui-corner-all ui-shadow ui-btn-inline ui-icon-grid" style="text-align: center; width:100%; font-size:13px; letter-spacing:2px;">Info Deluxe 30 Mbps</a></li><br>         
    <li><a href="#info4" id="icon" data-role="link" data-rel="popup" data-position-to="window" data-transition="flow" class="ui-btn ui-btn-icon-left ui-corner-all ui-shadow ui-btn-inline ui-icon-grid" style="text-align: center; width:100%; font-size:13px; letter-spacing:2px;">Info Deluxe 40 Mbps</a></li><br>         
    <li><a href="#info5" id="icon" data-role="link" data-rel="popup" data-position-to="window" data-transition="flow" class="ui-btn ui-btn-icon-left ui-corner-all ui-shadow ui-btn-inline ui-icon-grid" style="text-align: center; width:100%; font-size:13px; letter-spacing:2px;">Info Deluxe 50 Mbps</a></li><br>         
    <li><a href="#info6" id="icon" data-role="link" data-rel="popup" data-position-to="window" data-transition="flow" class="ui-btn ui-btn-icon-left ui-corner-all ui-shadow ui-btn-inline ui-icon-grid" style="text-align: center; width:100%; font-size:13px; letter-spacing:2px; ">Info Deluxe 100 Mbps</a></li><br>         
</ul>

    <div data-role="popup" id="info1" data-overlay-theme="b">
      	<div data-role="header">
        	<h1>Informasi Pilihan</h1>
   		</div>
    	<div data-role="main" class="ui-content">        
        	<p>Harga : <b>Rp. 450.000</b> ( Belum termasuk <b>PPN</b> ) . Pembayaran dilakukan di bulan pertama pemakaian</p>        
        	<p>* Gratis Nelpon 1000 menit lokal dan interlokal, Internet, Interaktif TV Konten basic terdiri dari 87 Channels ( 79 Channels SD dan 8 Channels HD )</p>                
        	<p>* Jumlah channels dan harga dapat berubah sewaktu-waktu. Pemberitahuan dapat di lihat di www.maulapor.com dan www.indihome.co.id</p>
        	<p>* Biaya Pasang Baru ( BPS ) IndiHome <b>Rp 75.000</b> akan di tagihkan pada bulan pertama saja dan tidak diperkenankan melakukan pembayaran secara tunai selain di Plasa Telkom</p>
        	<p>* Harga belum termasuk biaya <b>sewa STB Non Hybrid dan ONT sebesar Rp 70.000 per bulan</b>. Untuk biaya <b>sewa STB Hybrid HD dan ONT Rp 80.000 per bulan</b> dan <b>STB Hybrid 4K dan ONT Rp 100.000 per bulan</b> ( berlaku untuk semua pelanggan IndiHome mulai 12 April 2016 )</p>
    	</div>
   	</div>
   	<div data-role="popup" id="info2" data-overlay-theme="b">
      	<div data-role="header">
        	<h1>Informasi Pilihan</h1>
   		</div>
    	
    	<div data-role="main" class="ui-content">        
        	<p>Harga : <b>Rp. 660.000</b> ( Belum termasuk <b>PPN</b> ) . Pembayaran dilakukan di bulan pertama pemakaian</p>        
        	<p>* Gratis Nelpon 1000 menit lokal dan interlokal, Internet, Interaktif TV Konten basic terdiri dari 87 Channels ( 79 Channels SD dan 8 Channels HD )</p>                
        	<p>* Jumlah channels dan harga dapat berubah sewaktu-waktu. Pemberitahuan dapat di lihat di www.maulapor.com dan www.indihome.co.id</p>
        	<p>* Biaya Pasang Baru ( BPS ) IndiHome <b>Rp 75.000</b> akan di tagihkan pada bulan pertama saja dan tidak diperkenankan melakukan pembayaran secara tunai selain di Plasa Telkom</p>
        	<p>* Harga belum termasuk biaya <b>sewa STB Non Hybrid dan ONT sebesar Rp 70.000 per bulan</b>. Untuk biaya <b>sewa STB Hybrid HD dan ONT Rp 80.000 per bulan</b> dan <b>STB Hybrid 4K dan ONT Rp 100.000 per bulan</b> ( berlaku untuk semua pelanggan IndiHome mulai 12 April 2016 )</p>
    	</div>
   	</div>
   	<div data-role="popup" id="info3" data-overlay-theme="b">
      	<div data-role="header">
        	<h1>Informasi Pilihan</h1>
   		</div>
    	<div data-role="main" class="ui-content">        
        	<p>Harga : <b>Rp. 955.000</b> ( Belum termasuk <b>PPN</b> ) . Pembayaran dilakukan di bulan pertama pemakaian</p>        
        	<p>* Gratis Nelpon 1000 menit lokal dan interlokal, Internet, Interaktif TV Konten basic terdiri dari 87 Channels ( 79 Channels SD dan 8 Channels HD )</p>                
        	<p>* Jumlah channels dan harga dapat berubah sewaktu-waktu. Pemberitahuan dapat di lihat di www.maulapor.com dan www.indihome.co.id</p>
        	<p>* Biaya Pasang Baru ( BPS ) IndiHome <b>Rp 75.000</b> akan di tagihkan pada bulan pertama saja dan tidak diperkenankan melakukan pembayaran secara tunai selain di Plasa Telkom</p>
        	<p>* Harga belum termasuk biaya <b>sewa STB Non Hybrid dan ONT sebesar Rp 70.000 per bulan</b>. Untuk biaya <b>sewa STB Hybrid HD dan ONT Rp 80.000 per bulan</b> dan <b>STB Hybrid 4K dan ONT Rp 100.000 per bulan</b> ( berlaku untuk semua pelanggan IndiHome mulai 12 April 2016 )</p>
    	</div>
   	</div>
   	<div data-role="popup" id="info4" data-overlay-theme="b">
      	<div data-role="header">
          <h1>Informasi Pilihan</h1>
      </div>
        	<p>Harga : <b>Rp. 1.230.000</b> ( Belum termasuk <b>PPN</b> ) . Pembayaran dilakukan di bulan pertama pemakaian</p>        
        	<p>* Gratis Nelpon 1000 menit lokal dan interlokal, Internet, Interaktif TV Konten basic terdiri dari 87 Channels ( 79 Channels SD dan 8 Channels HD )</p>                
        	<p>* Jumlah channels dan harga dapat berubah sewaktu-waktu. Pemberitahuan dapat di lihat di www.maulapor.com dan www.indihome.co.id</p>
        	<p>* Biaya Pasang Baru ( BPS ) IndiHome <b>Rp 75.000</b> akan di tagihkan pada bulan pertama saja dan tidak diperkenankan melakukan pembayaran secara tunai selain di Plasa Telkom</p>
        	<p>* Harga belum termasuk biaya <b>sewa STB Non Hybrid dan ONT sebesar Rp 70.000 per bulan</b>. Untuk biaya <b>sewa STB Hybrid HD dan ONT Rp 80.000 per bulan</b> dan <b>STB Hybrid 4K dan ONT Rp 100.000 per bulan</b> ( berlaku untuk semua pelanggan IndiHome mulai 12 April 2016 )</p>
   		</div>    	
   	</div>
    <div data-role="popup" id="info5" data-overlay-theme="b">
        <div data-role="header">
          <h1>Informasi Pilihan</h1>
      </div>
      <div data-role="main" class="ui-content">        
          <p>Harga : <b>Rp. 1.485.000</b> ( Belum termasuk <b>PPN</b> ) . Pembayaran dilakukan di bulan pertama pemakaian</p>        
          <p>* Gratis Nelpon 1000 menit lokal dan interlokal, Internet, Interaktif TV Konten basic terdiri dari 87 Channels ( 79 Channels SD dan 8 Channels HD )</p>                
          <p>* Jumlah channels dan harga dapat berubah sewaktu-waktu. Pemberitahuan dapat di lihat di www.maulapor.com dan www.indihome.co.id</p>
          <p>* Biaya Pasang Baru ( BPS ) IndiHome <b>Rp 75.000</b> akan di tagihkan pada bulan pertama saja dan tidak diperkenankan melakukan pembayaran secara tunai selain di Plasa Telkom</p>
          <p>* Harga belum termasuk biaya <b>sewa STB Non Hybrid dan ONT sebesar Rp 70.000 per bulan</b>. Untuk biaya <b>sewa STB Hybrid HD dan ONT Rp 80.000 per bulan</b> dan <b>STB Hybrid 4K dan ONT Rp 100.000 per bulan</b> ( berlaku untuk semua pelanggan IndiHome mulai 12 April 2016 )</p>
      </div>
    </div>
    <div data-role="popup" id="info6" data-overlay-theme="b">
        <div data-role="header">
          <h1>Informasi Pilihan</h1>
      </div>
      <div data-role="main" class="ui-content">        
          <p>Harga : <b>Rp. 1.735.000</b> ( Belum termasuk <b>PPN</b> ) . Pembayaran dilakukan di bulan pertama pemakaian</p>        
          <p>* Gratis Nelpon 1000 menit lokal dan interlokal, Internet, Interaktif TV Konten basic terdiri dari 87 Channels ( 79 Channels SD dan 8 Channels HD )</p>                
          <p>* Jumlah channels dan harga dapat berubah sewaktu-waktu. Pemberitahuan dapat di lihat di www.maulapor.com dan www.indihome.co.id</p>
          <p>* Biaya Pasang Baru ( BPS ) IndiHome <b>Rp 75.000</b> akan di tagihkan pada bulan pertama saja dan tidak diperkenankan melakukan pembayaran secara tunai selain di Plasa Telkom</p>
          <p>* Harga belum termasuk biaya <b>sewa STB Non Hybrid dan ONT sebesar Rp 70.000 per bulan</b>. Untuk biaya <b>sewa STB Hybrid HD dan ONT Rp 80.000 per bulan</b> dan <b>STB Hybrid 4K dan ONT Rp 100.000 per bulan</b> ( berlaku untuk semua pelanggan IndiHome mulai 12 April 2016 )</p>
      </div>
    </div>  


    <!-- Dekstop -->
      <!-- <div data-role="main" class="ui-content  visible-lg visible-md ui-nodisc-icon" style="width:50%; float:left;">
   <label for="fname">Info Paket IndiHome :</label>

    <ul data-role="listview" data-inset="true" class="ui-nodisc-icon ui-alt-icon">    
    <li><a href="#info1" id="icon" data-role="link" data-rel="popup" data-position-to="window" data-transition="flow" class="ui-btn ui-btn-icon-left ui-corner-all ui-shadow ui-btn-inline ui-icon-grid" style=" text-align: center; width:100%; font-size:13px; letter-spacing:2px;">Info Premier 10 Mbps</a></li>         
    <li><a href="#info2" id="icon" data-role="link" data-rel="popup" data-position-to="window" data-transition="flow" class="ui-btn ui-btn-icon-left ui-corner-all ui-shadow ui-btn-inline ui-icon-grid" style="text-align: center; width:100%; font-size:13px; letter-spacing:2px;">Info Deluxe 20 Mbps</a></li>         
    <li><a href="#info3" id="icon" data-role="link" data-rel="popup" data-position-to="window" data-transition="flow" class="ui-btn ui-btn-icon-left ui-corner-all ui-shadow ui-btn-inline ui-icon-grid" style="text-align: center; width:100%; font-size:13px; letter-spacing:2px;">Info Deluxe 30 Mbps</a></li>         
    <li><a href="#info4" id="icon" data-role="link" data-rel="popup" data-position-to="window" data-transition="flow" class="ui-btn ui-btn-icon-left ui-corner-all ui-shadow ui-btn-inline ui-icon-grid" style="text-align: center; width:100%; font-size:13px; letter-spacing:2px;">Info Deluxe 40 Mbps</a></li>         
    <li><a href="#info5" id="icon" data-role="link" data-rel="popup" data-position-to="window" data-transition="flow" class="ui-btn ui-btn-icon-left ui-corner-all ui-shadow ui-btn-inline ui-icon-grid" style="text-align: center; width:100%; font-size:13px; letter-spacing:2px;">Info Deluxe 50 Mbps</a></li>         
    <li><a href="#info6" id="icon" data-role="link" data-rel="popup" data-position-to="window" data-transition="flow" class="ui-btn ui-btn-icon-left ui-corner-all ui-shadow ui-btn-inline ui-icon-grid" style="text-align: center; width:100%; font-size:13px; letter-spacing:2px; ">Info Deluxe 100 Mbps</a></li>         
</ul>

    <div data-role="popup" id="info1" data-overlay-theme="b">
        <div data-role="header">
          <h1>Informasi Pilihan</h1>
      </div>
      <div data-role="main" class="ui-content">        
          <p>Harga : <b>Rp. 450.000</b> ( Belum termasuk <b>PPN</b> ) . Pembayaran dilakukan di bulan pertama pemakaian</p>        
          <p>* Gratis Nelpon 1000 menit lokal dan interlokal, Internet, Interaktif TV Konten basic terdiri dari 87 Channels ( 79 Channels SD dan 8 Channels HD )</p>                
          <p>* Jumlah channels dan harga dapat berubah sewaktu-waktu. Pemberitahuan dapat di lihat di www.maulapor.com dan www.indihome.co.id</p>
          <p>* Biaya Pasang Baru ( BPS ) IndiHome <b>Rp 75.000</b> akan di tagihkan pada bulan pertama saja dan tidak diperkenankan melakukan pembayaran secara tunai selain di Plasa Telkom</p>
          <p>* Harga belum termasuk biaya <b>sewa STB Non Hybrid dan ONT sebesar Rp 70.000 per bulan</b>. Untuk biaya <b>sewa STB Hybrid HD dan ONT Rp 80.000 per bulan</b> dan <b>STB Hybrid 4K dan ONT Rp 100.000 per bulan</b> ( berlaku untuk semua pelanggan IndiHome mulai 12 April 2016 )</p>
      </div>
    </div>
    <div data-role="popup" id="info2" data-overlay-theme="b">
        <div data-role="header">
          <h1>Informasi Pilihan</h1>
      </div>
      
      <div data-role="main" class="ui-content">        
          <p>Harga : <b>Rp. 660.000</b> ( Belum termasuk <b>PPN</b> ) . Pembayaran dilakukan di bulan pertama pemakaian</p>        
          <p>* Gratis Nelpon 1000 menit lokal dan interlokal, Internet, Interaktif TV Konten basic terdiri dari 87 Channels ( 79 Channels SD dan 8 Channels HD )</p>                
          <p>* Jumlah channels dan harga dapat berubah sewaktu-waktu. Pemberitahuan dapat di lihat di www.maulapor.com dan www.indihome.co.id</p>
          <p>* Biaya Pasang Baru ( BPS ) IndiHome <b>Rp 75.000</b> akan di tagihkan pada bulan pertama saja dan tidak diperkenankan melakukan pembayaran secara tunai selain di Plasa Telkom</p>
          <p>* Harga belum termasuk biaya <b>sewa STB Non Hybrid dan ONT sebesar Rp 70.000 per bulan</b>. Untuk biaya <b>sewa STB Hybrid HD dan ONT Rp 80.000 per bulan</b> dan <b>STB Hybrid 4K dan ONT Rp 100.000 per bulan</b> ( berlaku untuk semua pelanggan IndiHome mulai 12 April 2016 )</p>
      </div>
    </div>
    <div data-role="popup" id="info3" data-overlay-theme="b">
        <div data-role="header">
          <h1>Informasi Pilihan</h1>
      </div>
      <div data-role="main" class="ui-content">        
          <p>Harga : <b>Rp. 955.000</b> ( Belum termasuk <b>PPN</b> ) . Pembayaran dilakukan di bulan pertama pemakaian</p>        
          <p>* Gratis Nelpon 1000 menit lokal dan interlokal, Internet, Interaktif TV Konten basic terdiri dari 87 Channels ( 79 Channels SD dan 8 Channels HD )</p>                
          <p>* Jumlah channels dan harga dapat berubah sewaktu-waktu. Pemberitahuan dapat di lihat di www.maulapor.com dan www.indihome.co.id</p>
          <p>* Biaya Pasang Baru ( BPS ) IndiHome <b>Rp 75.000</b> akan di tagihkan pada bulan pertama saja dan tidak diperkenankan melakukan pembayaran secara tunai selain di Plasa Telkom</p>
          <p>* Harga belum termasuk biaya <b>sewa STB Non Hybrid dan ONT sebesar Rp 70.000 per bulan</b>. Untuk biaya <b>sewa STB Hybrid HD dan ONT Rp 80.000 per bulan</b> dan <b>STB Hybrid 4K dan ONT Rp 100.000 per bulan</b> ( berlaku untuk semua pelanggan IndiHome mulai 12 April 2016 )</p>
      </div>
    </div>
    <div data-role="popup" id="info4" data-overlay-theme="b">
        <div data-role="header">
          <h1>Informasi Pilihan</h1>
      </div>
          <p>Harga : <b>Rp. 1.230.000</b> ( Belum termasuk <b>PPN</b> ) . Pembayaran dilakukan di bulan pertama pemakaian</p>        
          <p>* Gratis Nelpon 1000 menit lokal dan interlokal, Internet, Interaktif TV Konten basic terdiri dari 87 Channels ( 79 Channels SD dan 8 Channels HD )</p>                
          <p>* Jumlah channels dan harga dapat berubah sewaktu-waktu. Pemberitahuan dapat di lihat di www.maulapor.com dan www.indihome.co.id</p>
          <p>* Biaya Pasang Baru ( BPS ) IndiHome <b>Rp 75.000</b> akan di tagihkan pada bulan pertama saja dan tidak diperkenankan melakukan pembayaran secara tunai selain di Plasa Telkom</p>
          <p>* Harga belum termasuk biaya <b>sewa STB Non Hybrid dan ONT sebesar Rp 70.000 per bulan</b>. Untuk biaya <b>sewa STB Hybrid HD dan ONT Rp 80.000 per bulan</b> dan <b>STB Hybrid 4K dan ONT Rp 100.000 per bulan</b> ( berlaku untuk semua pelanggan IndiHome mulai 12 April 2016 )</p>
      </div>      
    </div>

    


   	<div data-role="popup" id="info5" data-overlay-theme="b">
      	<div data-role="header">
        	<h1>Informasi Pilihan</h1>
   		</div>
    	<div data-role="main" class="ui-content">        
        	<p>Harga : <b>Rp. 1.485.000</b> ( Belum termasuk <b>PPN</b> ) . Pembayaran dilakukan di bulan pertama pemakaian</p>        
        	<p>* Gratis Nelpon 1000 menit lokal dan interlokal, Internet, Interaktif TV Konten basic terdiri dari 87 Channels ( 79 Channels SD dan 8 Channels HD )</p>                
        	<p>* Jumlah channels dan harga dapat berubah sewaktu-waktu. Pemberitahuan dapat di lihat di www.maulapor.com dan www.indihome.co.id</p>
        	<p>* Biaya Pasang Baru ( BPS ) IndiHome <b>Rp 75.000</b> akan di tagihkan pada bulan pertama saja dan tidak diperkenankan melakukan pembayaran secara tunai selain di Plasa Telkom</p>
        	<p>* Harga belum termasuk biaya <b>sewa STB Non Hybrid dan ONT sebesar Rp 70.000 per bulan</b>. Untuk biaya <b>sewa STB Hybrid HD dan ONT Rp 80.000 per bulan</b> dan <b>STB Hybrid 4K dan ONT Rp 100.000 per bulan</b> ( berlaku untuk semua pelanggan IndiHome mulai 12 April 2016 )</p>
    	</div>
   	</div>
   	<div data-role="popup" id="info6" data-overlay-theme="b">
      	<div data-role="header">
        	<h1>Informasi Pilihan</h1>
   		</div>
    	<div data-role="main" class="ui-content">        
        	<p>Harga : <b>Rp. 1.735.000</b> ( Belum termasuk <b>PPN</b> ) . Pembayaran dilakukan di bulan pertama pemakaian</p>        
        	<p>* Gratis Nelpon 1000 menit lokal dan interlokal, Internet, Interaktif TV Konten basic terdiri dari 87 Channels ( 79 Channels SD dan 8 Channels HD )</p>                
        	<p>* Jumlah channels dan harga dapat berubah sewaktu-waktu. Pemberitahuan dapat di lihat di www.maulapor.com dan www.indihome.co.id</p>
        	<p>* Biaya Pasang Baru ( BPS ) IndiHome <b>Rp 75.000</b> akan di tagihkan pada bulan pertama saja dan tidak diperkenankan melakukan pembayaran secara tunai selain di Plasa Telkom</p>
        	<p>* Harga belum termasuk biaya <b>sewa STB Non Hybrid dan ONT sebesar Rp 70.000 per bulan</b>. Untuk biaya <b>sewa STB Hybrid HD dan ONT Rp 80.000 per bulan</b> dan <b>STB Hybrid 4K dan ONT Rp 100.000 per bulan</b> ( berlaku untuk semua pelanggan IndiHome mulai 12 April 2016 )</p>
    	</div>
   	</div>   -->

  <!-- Select -->

  <!-- RadioButton -->
  <div data-role="main" class="ui-content hidden-lg hidden-md">
    <form method="post" action="demoform.asp">
      <fieldset data-role="controlgroup">
      <legend style="font-size:16px;">Silahkan Pilih Paket Anda :</legend>
        <label for="indi1" style="font-size:13px;">Deluxe 10 Mbps</label>
        <input type="radio" name="paket" id="indi1" value="paket1">
        <label for="indi2" style="font-size:13px;">Premier 20 Mbps</label>
        <input type="radio" name="paket" id="indi2" value="paket2">
        <label for="indi3" style="font-size:13px;">Premier 30 Mbps</label>
        <input type="radio" name="paket" id="indi3" value="paket3">
        <label for="indi4" style="font-size:13px;">Premier 40 Mbps</label>
        <input type="radio" name="paket" id="indi4" value="paket4">
        <label for="indi5" style="font-size:13px;">Premier 50 Mbps</label>
        <input type="radio" name="paket" id="indi5" value="paket5">
        <label for="indi6" style="font-size:13px;">Premier 100 Mbps</label>
        <input type="radio" name="paket" id="indi6" value="paket6">
        <br>        
      </fieldset>
        <a href="verif.html"><input type="submit" data-inline="true" value="Lanjutkan"></a>
    </form>
  </div>
  <!-- RadioButton -->

<!--   <div data-role="main" class="ui-content visible-lg visible-md" style="width:50%; float:left;">
    <form method="post" action="demoform.asp">
      <fieldset data-role="controlgroup">
      <legend style="font-size:16px;">Silahkan Pilih Paket Anda :</legend>
        <label for="indi1" style="font-size:13px;">Deluxe 10 Mbps</label>
        <input type="radio" name="paket" id="indi1" value="paket1">
        <label for="indi2" style="font-size:13px;">Premier 20 Mbps</label>
        <input type="radio" name="paket" id="indi2" value="paket2">
        <label for="indi3" style="font-size:13px;">Premier 30 Mbps</label>
        <input type="radio" name="paket" id="indi3" value="paket3">
        <label for="indi4" style="font-size:13px;">Premier 40 Mbps</label>
        <input type="radio" name="paket" id="indi4" value="paket4">
        <label for="indi5" style="font-size:13px;">Premier 50 Mbps</label>
        <input type="radio" name="paket" id="indi5" value="paket5">
        <label for="indi6" style="font-size:13px;">Premier 100 Mbps</label>
        <input type="radio" name="paket" id="indi6" value="paket6">
        <br>        
      </fieldset>
        <a href="verif.html"><input type="submit" data-inline="true" value="Lanjutkan"></a>
    </form>
  </div> -->
  

    </div> <!-- Page -->  
	</body>
</html>


