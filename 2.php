<div style="padding:5px 4px";>

  <!--tag -->
  <div class="col-md-4">
    <div class="input-group">
      <span class="input-group-addon" id="sizing-addon2">Kategori</span>
      <select class="form-control" name="kategori">
        <?php while ($row= mysqli_fetch_assoc ($tampil_kategori)):?>
          <option value="<?php echo $row ['id_tag'] ?>">  <?php echo $row ['judul_tag'];
          ?></option>
        <?php endwhile ?>

      </select>
     </div>
</div>


  <!--Upload -->
<div class="col-md-8">
<input type="file" name="image" id="fileToUpload">
</div>


</div>

<div class="col-md-4 ">
<div class="pull-right box-tools">
<button class="btn btn-success" name="submit" value="upload image">Publikasikan</button>
<button class="btn btn-success" >Simpan</button>
<button class="btn btn-success" >Tutup</button>
</div>
      </div>




      <div class='box box-info'>


      <div class="box-header form-title">
           <div class="box-tools">
             <div class="form-group">
            <span class="exampleInputEmail1" id="sizing-addon2">Judul</span>
            <input type="text" class="form-control" placeholder="Masukan Judul" name="judul" aria-describedby="sizing-addon2">

       </div>

      </div>

          </div>
</div>
