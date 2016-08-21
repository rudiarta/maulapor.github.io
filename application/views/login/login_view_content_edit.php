
 <br><br>
 <div class="jumbotron" style="background-color: #546e7a; padding:30px; padding-top: 5px;">
      <div class="container">
        <div class="col-xs-12 col-md-4" style="border: none">
           <h3 style="color: #fff; text-align: left; font-family: verdana;">Edit Profile</h3>    
        </div>
      </div>
    </div>


    <div class="container">
      <div class="col-xs-12 col-sm-12" style="margin-bottom: 20px;">
        <img src="<?php echo base_url(); ?>pic/system/logo.png" style="width:200px;">
      </div>
  <hr>

      <div class="row">      
        <div class="col-md-3">
          
        </div>
    

      
        <div class="tab-content">
          <div id="1" class="tab-pane fade in active">
            <div class="col-md-9 personal-info">      
            <div class="alert alert-info alert-dismissable">
            <a class="panel-close close" data-dismiss="alert">×</a> 
            <i class="fa fa-coffee"></i>
            <?php foreach ($barang as $data4); ?>
              <b>Edit Barang</b>
            </div>
      <form method="POST" action="<?php echo base_url(); ?>login/control/editItem" enctype="multipart/form-data" class="form-horizontal">
      <div class="form-group">
            <label class="col-lg-3 control-label">Daerah :</label>
            <div class="col-lg-8">
            <input type="hidden" name="id" value="<?php echo $data4->id; ?>" ></input>
              <select class="form-control" name="daerah">
                <?php foreach($city as $data1){ ?>
                    <option disabled="true"><strong><?php echo $data1->name; ?></strong></option>
                    <?php foreach($lokasi as $data2){ ?>
                      <?php 
                        if($data1->id==$data2->id_city){
                      ?>
                        <option value="<?php echo $data2->id; ?>" <?php if($data4->id_location==$data2->id) echo"selected"; ?> ><?php echo $data2->name; ?></option>
                        <?php }  ?>
                    <?php } ?>
                <?php } ?>
              </select>
            </div>
          </div>          

          <div class="form-group">
            <label class="col-lg-3 control-label">Tanggal Ditemukan:</label>
            <div class="col-lg-8">
              <input name="tgl" value="<?php echo $data4->date; ?>" class="form-control" type="date" placeholder="yyyy-mm-dd">
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-3 control-label">Waktu Ditemukan :</label>
            <div class="col-md-8">
              <input name="waktu" value="<?php echo $data4->time; ?>" class="form-control" type="time" placeholder="HH:MM">
            </div>
          </div>          

          <div class="form-group">
            <label class="col-md-3 control-label">Kategori Barang:</label>
            <div class="col-md-8">
              <select class="form-control" name="kategori">
                <?php foreach($kategori as $data){ ?>
                    <option value="<?php echo $data->id; ?>" <?php if($data4->id_categori==$data->id) echo"selected"; ?> ><?php echo $data->name; ?></option>
                <?php } ?>
              </select>
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-3 control-label">Brand/Merk Barang :</label>
            <div class="col-md-8">
              <input name="brand" value="<?php echo $data4->brand; ?>" class="form-control" type="text" placeholder="Brand">
            </div>
          </div>  

          <div class="form-group">
            <label class="col-md-3 control-label">Tag Barang :</label>
            <div class="col-md-8">
              <input name="tag" value="<?php echo $data4->tag; ?>" class="form-control" type="text" placeholder="tag">
            </div>
          </div>  

          <div class="form-group">
            <label class="col-md-3 control-label">Note :</label>
            <div class="col-md-8">
              <input name="note" value="<?php echo $data4->note; ?>" class="form-control" type="text" placeholder="Note">
            </div>
          </div>  

          <div class="form-group">
            <label class="col-md-3 control-label">Kronologis :</label>
            <div class="col-md-8">
              <textarea name="kronologis" class="form-control" placeholder="Kronologis nya" rows="5"><?php echo $data4->chronological; ?></textarea>
            </div>
          </div>  
          <input type="hidden" name="poto" value="<?php echo $data4->picture; ?>" ></input>
          <?php 
              $tampung = $data4->picture;
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

          <div class="form-group">
            <label class="col-md-3 control-label">Foto 1 :</label>
            <div class="col-md-8">
              <input id="input-dim-1" name="foto1" type="file" multiple class="file-loading" accept="image/*">      
            </div>
          </div>
          <?php 
              echo "<img src=".base_url()."pic/".$picture1." />";
            
          ?>

          <div class="form-group">
            <label class="col-md-3 control-label">Foto 2 :</label>
            <div class="col-md-8">
              <input id="input-dim-1" name="foto2" type="file" multiple class="file-loading" accept="image/*">     
            </div>
          </div>
          <?php 
              echo "<img src=".base_url()."pic/".$picture2." />";
            
          ?>

          <div class="form-group">
            <label class="col-md-3 control-label">Foto 3 :</label>
            <div class="col-md-8">
              <input id="input-dim-1" name="foto3" type="file" multiple class="file-loading" accept="image/*">     
            </div>
          </div>
          <?php 
              echo "<img src=".base_url()."pic/".$picture3." />";
             
          ?>
       
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




<script>window.jQuery || document.write('<script src="<?php echo base_url(); ?>js/jquery.min.js"><\/script>')</script>
      <script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
</body>
</html>
