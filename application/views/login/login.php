                                                  <!-- ADMIN fIX -->
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
    <br><br>

    <!-- Tulisan Edit Profile -->
    <div class="jumbotron" style="background-color: #546e7a; padding:30px; padding-top: 5px;">
      <div class="container">
        <div class="col-xs-12 col-md-4" style="border: none">
         <h3 style="color: #fff; text-align: left; font-family: verdana;">Edit Profile</h3>
       </div>
     </div>
   </div>
   <!-- Tulisan Edit Profile -->

   <!-- Masuk Bagian edit -->
   <div class="container">
    <div class="col-xs-12 col-sm-12" style="margin-bottom: 20px; border: none;">
      <img src="<?php echo base_url(); ?>pic/system/logo.png" style="width:200px;">
    </div>
    <hr>


    <div class="row">

    <!-- Pilihan Sebelah Kiri -->
      <div class="col-md-3" style="border:none;">
        <ul class="nav nav-sidebar">
          <li class="active"><a data-toggle="tab" href="#1">Edit Profile</a></li>
          <li><a data-toggle="tab" href="#2">Upload Penemuan</a></li>
          <li><a data-toggle="tab" href="#3">Upload Kehilangan</a></li>
          <li><a data-toggle="tab" href="#4">List</a></li>
          <li><a data-toggle="tab" href="#5">Pengaduan Lainnya</a></li>
          <li><a data-toggle="tab" href="#6">Ganti Password</a></li>
        </ul>
      </div>
      <!-- Pilihan Sebelah Kiri -->



      <div class="tab-content" style="padding:0; margin: 0;">

        <!-- Bagian 1 = Edit Profile -->
        <?php foreach ($login as $data): ?>
        <div id="1" class="tab-pane fade in active">
          <div class="col-md-9 personal-info">
            <div class="alert alert-info alert-dismissable">
              <a class="panel-close close" data-dismiss="alert">×</a>
              <i class="fa fa-coffee"></i>
              <b>Edit Profile</b>
            </div>
            <h3>Info Pribadi</h3>

            <form method="POST" action="login/control/editprofile" enctype="multipart/form-data" class="form-horizontal">
            <input type="hidden" name="id" value="<?php echo $data->id; ?>" ></input>
            <div class="text-center">
              <img src="<?php echo base_url().'pic/user/'.$data->picture; ?>" class="avatar img-circle" alt="avatar" style="width: 100px; height: 100px;">
              <h6>Upload foto anda</h6>
              <input name="foto" type="file" class="form-control">
            </div>
            <br><br>


              <div class="form-group">
                <label class="col-lg-3 control-label" style="border: none;">Nama Lengkap:</label>
                <div class="col-lg-8" style="border: none;" style="text-decoration-style: none;">
                  <input name="name" value="<?php echo $data->name; ?>" type="text" class="form-control" placeholder="Name">
                </div>
              </div>

              <div class="form-group">
                <label class="col-md-3 control-label">No. Handphone:</label>
                <div class="col-md-8">
                  <input name="no_telp" value="<?php echo $data->contact; ?>" class="form-control" type="text" placeholder="No Handphone ">
                </div>
              </div>

              <div class="form-group">
                <label class="col-md-3 control-label">ID KTP / SIM :</label>
                <div class="col-md-8">
                  <input name="id_card" value="<?php echo $data->id_card; ?>" class="form-control" type="text" placeholder="ID KTP / SIM ">
                </div>
              </div>

              <div class="form-group">
                <label class="col-md-3 control-label">Alamat Saat Ini:</label>
                <div class="col-md-8">
                  <input name="alamat" value="<?php echo $data->address; ?>" class="form-control" type="text" placeholder="Alamat ">
                </div>
              </div>

              <div class="form-group">
                <label class="col-lg-3 control-label">Email:</label>
                <div class="col-lg-8">
                  <input disabled name="email" value="<?php echo $data->email; ?>" class="form-control" type="text" placeholder=" Email ">
                </div>
              </div>

              <div class="form-group">
                <label class="col-lg-3 control-label">Username:</label>
                <div class="col-lg-8">
                  <input name="username" value="<?php echo $data->username; ?>" class="form-control" type="text" placeholder=" Username ">
                </div>
              </div>

              <div class="form-group">
                <label class="col-lg-3 control-label">Tempat Lahir:</label>
                <div class="col-lg-8">
                  <input name="tmpt_lahir" value="<?php echo $data->born_place; ?>" class="form-control" type="text" placeholder=" Tempat Lahir ">
                </div>
              </div>

              <div class="form-group">
                <label class="col-lg-3 control-label">Tanggal Lahir:</label>
                <div class="col-lg-8">
                  <input name="tgl_lahir" value="<?php echo $data->born_date; ?>" class="form-control" type="text" placeholder=" Tanggal Lahir ">
                </div>
              </div>

              <div class="form-group">
                <label class="col-lg-3 control-label">Status:</label>
                <div class="col-lg-8">
                  <input name="status" value="<?php echo $data->status; ?>" class="form-control" type="text" placeholder=" Status ">
                </div>
              </div>

              <div class="form-group">
                <label class="col-lg-3 control-label">gender:</label>
                <div class="col-lg-8">
                  <select class="form-control" name="gender">
                      <option value="L" <?php if($data->gender=='L') echo"selected"; ?> >Male</option>
                      <option value="P" <?php if($data->gender=='P') echo"selected"; ?> >Female</option>
                  </select>
                </div>
              </div>

              <div class="form-group">
                <label class="col-lg-3 control-label">ID card Type:</label>
                <div class="col-lg-8">
                  <input name="card_type" value="<?php echo $data->card_type; ?>" class="form-control" type="text" placeholder=" ID card Type ">
                </div>
              </div>

              <div class="form-group">
                <label class="col-md-3 control-label"></label>
                <div class="col-md-8">
                  <input type="submit" class="btn btn-primary" value="Simpan">
                  <span></span>
                </div>
              </div>

            </form>
          </div>
        </div>
      <?php endforeach; ?>
        <!-- Habis Bagian 1 = Edit Profile -->


        <!-- Bagian 2 = Upload Penemuan -->
        <div id="2" class="tab-pane fade">
          <div class="row">
            <div class="col-md-8 personal-info">
              <div class="alert alert-info alert-dismissable">
                <a class="panel-close close" data-dismiss="alert">×</a>
                <i class="fa fa-coffee"></i>
                Jika anda <b>Menemukan</b> barang,<b>Upload disini</b>
              </div>

              <h3>Keterang Barang Temuan</h3>
              <form method="POST" action="login/control/tambahPenemuan" enctype="multipart/form-data" class="form-horizontal">

                <div class="form-group">
                  <label class="col-lg-3 control-label">Daerah :</label>
                  <div class="col-lg-8">
                    <select class="form-control" name="daerah">
                      <?php foreach($city as $data1){ ?>
                          <option disabled><?php echo $data1->name; ?></option>
                          <?php foreach($lokasi as $data2){ ?>
                            <?php
                              if($data1->id==$data2->id_city){
                            ?>
                              <option value="<?php echo $data2->id; ?>"><?php echo $data2->name; ?></option>
                              <?php }  ?>
                          <?php } ?>
                      <?php } ?>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-3 control-label">Tanggal Ditemukan:</label>
                  <div class="col-lg-8">
                    <input name="tgl" value="0000-00-00" class="form-control" type="date" placeholder="yyyy-mm-dd">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-md-3 control-label">Waktu Ditemukan :</label>
                  <div class="col-md-8">
                    <input name="waktu" value="00:00" class="form-control" type="time" placeholder="00:00 AM">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-md-3 control-label">Kategori Barang:</label>
                  <div class="col-md-8">
                    <select class="form-control" name="kategori">
                      <?php foreach($kategori as $data){ ?>
                          <option value="<?php echo $data->id; ?>" ><?php echo $data->name; ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-md-3 control-label">Brand/Merk Barang :</label>
                  <div class="col-md-8">
                    <input name="brand" class="form-control" type="text" placeholder="Brand">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-md-3 control-label">Tag Barang :</label>
                  <div class="col-md-8">
                    <input name="tag" class="form-control" type="text" placeholder="tag">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-md-3 control-label">Note :</label>
                  <div class="col-md-8">
                    <input name="note" class="form-control" type="text" placeholder="Note">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-md-3 control-label">Kronologis :</label>
                  <div class="col-md-8">
                    <textarea name="kronologis" class="form-control" placeholder="Kronologis nya" rows="5"></textarea>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-md-3 control-label">Foto 1 :</label>
                  <div class="col-md-8">
                    <input id="input-dim-1" name="foto1" type="file" multiple class="file-loading" accept="image/*">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-md-3 control-label">Foto 2 :</label>
                  <div class="col-md-8">
                    <input id="input-dim-1" name="foto2" type="file" multiple class="file-loading" accept="image/*">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-md-3 control-label">Foto 3 :</label>
                  <div class="col-md-8">
                    <input id="input-dim-1" name="foto3" type="file" multiple class="file-loading" accept="image/*">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-md-3 control-label"></label>
                  <div class="col-md-8">
                    <input type="submit" class="btn btn-primary" value="Upload">
                    <span></span>
                  </div>
                </div>
              </form>
            </div>

          </div>
        </div>
        <!-- Habis Bagian 2 = Upload Penemuan -->


        <!-- Bagian 3 = Upload Kehilangan -->
        <div id="3" class="tab-pane fade">
          <div class="row">
            <div class="col-md-8 personal-info">
              <div class="alert alert-info alert-dismissable">
                <a class="panel-close close" data-dismiss="alert">×</a>
                <i class="fa fa-coffee"></i>
                Jika anda <b>Kehilangan</b> barang,<b>Upload disini</b>
              </div>

              <h3>Keterangan Barang Hilang</h3>
              <form method="POST" action="login/control/tambahKehilangan" enctype="multipart/form-data" class="form-horizontal">

                <div class="form-group">
                  <label class="col-lg-3 control-label">Daerah :</label>
                  <div class="col-lg-8">
                    <select class="form-control" name="daerah">
                      <?php foreach($city as $data1){ ?>
                          <option disabled ><?php echo $data1->name; ?></option>
                          <?php foreach($lokasi as $data2){ ?>
                            <?php
                              if($data1->id==$data2->id_city){
                            ?>
                              <option value="<?php echo $data2->id; ?>"><?php echo $data2->name; ?></option>
                              <?php }  ?>
                          <?php } ?>
                      <?php } ?>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-3 control-label">Tanggal Kehilangan :</label>
                  <div class="col-lg-8">
                    <input name="tgl" value="0000-00-00" class="form-control" type="date" placeholder="yyyy-mm-dd">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-md-3 control-label">Waktu Kehilangan :</label>
                  <div class="col-md-8">
                    <input name="waktu" value="00:00" class="form-control" type="time" placeholder="HH:MM">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-md-3 control-label">Kategori Barang:</label>
                  <div class="col-md-8">
                    <select class="form-control" name="kategori">
                      <?php foreach($kategori as $data){ ?>
                          <option value="<?php echo $data->id; ?>" ><?php echo $data->name; ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-md-3 control-label">Brand/Merk Barang :</label>
                  <div class="col-md-8">
                    <input name="brand" class="form-control" type="text" placeholder="Brand">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-md-3 control-label">Tag Barang :</label>
                  <div class="col-md-8">
                    <input name="tag" class="form-control" type="text" placeholder="tag">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-md-3 control-label">Note :</label>
                  <div class="col-md-8">
                    <input name="note" class="form-control" type="text" placeholder="Note">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-md-3 control-label">Kronologis :</label>
                  <div class="col-md-8">
                    <textarea name="kronologis" class="form-control" placeholder="Kronologis nya" rows="5"></textarea>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-md-3 control-label">Foto 1 :</label>
                  <div class="col-md-8">
                    <input id="input-dim-1" name="foto1" type="file" multiple class="file-loading" accept="image/*">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-md-3 control-label">Foto 2 :</label>
                  <div class="col-md-8">
                    <input id="input-dim-1" name="foto2" type="file" multiple class="file-loading" accept="image/*">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-md-3 control-label">Foto 3 :</label>
                  <div class="col-md-8">
                    <input id="input-dim-1" name="foto3" type="file" multiple class="file-loading" accept="image/*">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-md-3 control-label"></label>
                  <div class="col-md-8">
                    <input type="submit" class="btn btn-primary" value="Upload">
                    <span></span>
                  </div>
                </div>
              </form>

            </div>
          </div>
        </div>
          <!-- Habis Bagian 3 = Upload Kehilangan -->


          <!-- Bagian 4 = List -->
        <div id="4" class="tab-pane fade">
          <div class="col-md-9">
            <div class="col-md-6">
              <form>
                <input type="search" name="search" placeholder="Search..">
              </form>
            </div>
            <div class="col-md-4" style="margin-top:10px;">
              <form>
                <select id="waktu" name="waktu">
                  <option >Waktu Kehilangan</option>
                  <option >Januari</option><option >Februari</option><option >Maret</option><option >April</option><option >Mei</option><option >Juni</option><option >Juli</option><option >Agustus</option><option >September</option><option >Oktober</option><option >November</option><option >Desember</option>
                </select>
              </form>
            </div>
            <div class="col-md-1" style="margin-top: 10px;">
              <button>
                Cari
              </button>
            </div>
          </div>

          <div class="col-md-9" style="padding: 0; margin: 0;">
            <div class="col-md-2 col-xs-3" style="border: none;">
                <h4><b>Barang</b></h4>
            <?php foreach($barang as $data){ ?>
                <p><?php echo $data->tag; ?></p>
            <?php } ?>
            </div>
            <div class="col-md-3 col-xs-3">
                <h4><b>Waktu</b></h4>
            <?php foreach($barang as $data){ ?>
                <p><?php echo $data->time; ?></p>
            <?php } ?>
            </div>
            <div class="col-md-4 col-xs-3" style="margin-top:10px;">
                <h4><b>Status</b></h4>
            <?php foreach($barang as $data){ ?>
                <p><?php echo $data->status; ?></p>
            <?php } ?>
            </div>
            <div class="col-md-3" style="margin:0; padding-left: 0;padding-right: 0;">
                <h4><b>Pilihan</b></h4>
              <div class="col-md-5" style="padding: 0; margin: 0; border: none;">
            <?php foreach($barang as $data){ ?>
                <p><a href="login/edit/<?php echo $data->id; ?>">Edit</a></p>
            <?php } ?>
              </div>
              <div class="col-md-5"  style="padding: 0; margin-left:20px; border-right: none;">
            <?php foreach($barang as $data){ ?>
                <p><a href="login/delete_barang/<?php echo $data->id; ?>">Delete</a></p>
            <?php } ?>
              </div>

            </div>
          </div>
        </div>
        <!-- Habis Bagian 4 = List -->


        <!-- Bagian 5 = Event Terbaru -->
        <div id="5" class="tab-pane fade">
          <div class="col-md-9 personal-info">
            <div class="alert alert-info alert-dismissable">
              <a class="panel-close close" data-dismiss="alert">×</a>
              <i class="fa fa-coffee"></i>
              <b>Update Pengaduan </b>terbaru <b>disini (coming soon)</b>
            </div>
            <form method="POST" action="login/control/tambahEvent" enctype="multipart/form-data" class="form-horizontal">
             <div class="form-group">
              <label class="col-md-3 control-label">Judul Pengaduan :</label>
              <div class="col-md-8">
                <input name="judul" class="form-control" type="text" value="">
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-3 control-label">Deskripsi Pengaduan :</label>
              <div class="col-md-8">
                <textarea name="deskripsi" class="form-control" rows="5" id="comment"></textarea>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-3 control-label">Tambahkan Foto Pengaduan:</label>
              <div class="col-md-8">
                <input id="input-dim-1" name="foto" type="file" multiple class="file-loading" accept="image/*">
              </div>
            </div>

            <div class="col-md-8">
             <input type="submit" class="btn btn-primary" value="Update Event Terbaru">
           </div>
           </form>
         </div>
       </div>

       <!-- Habis Bagian 5 = Event Terbaru -->


       <!-- Bagian 6 = Ganti password -->
       <div id="6" class="tab-pane fade">
       <div class="col-md-9 personal-info">
       <div class="alert alert-info alert-dismissable">
              <a class="panel-close close" data-dismiss="alert">×</a>
              <i class="fa fa-coffee"></i>
              <b>Change </b>Password
            </div>
        <form style="margin-top: -90px;" method="POST" action="<?php echo base_url(); ?>login/control/changePassword" enctype="multipart/form-data" class="form-horizontal">

          <div class="form-group" style="margin-top:100px;">
            <label class="col-md-2 control-label">Password Lama:</label>
            <div class="col-md-7">
              <input name="oldp" value="" class="form-control" type="password" placeholder="Old Password...">
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-2 control-label">Password Baru:</label>
            <div class="col-md-7">
              <input name="newp" value="" class="form-control" type="password" placeholder="New Password....">
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-2 control-label">Konfirmasi Password Baru:</label>
            <div class="col-md-7">
              <input name="confirmp" value="" class="form-control" type="password" placeholder="Confirm Password...">
            </div>
          </div>
          <button type="submit" style="margin-left: 20px;">
            Simpan
          </button>
        </form>

      </div>
      </div>
    <!-- Habis Bagian 6 = Ganti password -->

      </div>
    </div>

  <script>window.jQuery || document.write('<script src="<?php echo base_url(); ?>js/jquery.min.js"><\/script>')</script>
      <script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
  </body>
  </html>
