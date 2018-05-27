<?php require_once 'core/init.php' ?>
<?php require_once 'resources/header_blog.php' ?>
<?php

//================sosial media===============
$sosmed=tampil_sosmed();

$sosial= mysqli_fetch_assoc($sosmed);
$facebook= $sosial['facebook'];
$linkedin= $sosial['linkedin'];
$instagram= $sosial['instagram'];

//============kategori=================
////untuk memanggil kategori dari database
$kategori = tampil_kategori();
$kategori2 = tampil_kategori2();
$kategori3 = tampil_kategori3();

//================Pencarian artikel===============
$artikel = tampilkan();
if (isset ($_GET['cari'])) {
  $cari = $_GET['cari']; //cari ini adalah nilai sebelah kanan pada link
  $artikel = tampil_pencarian($cari);

}

 ?>

<section>
  <div class="col-md-8 ">

    <!-- Blog Post -->

<?php if (mysqli_num_rows ($artikel)>0){
 while ($row= mysqli_fetch_assoc ($artikel)): ?>
  <div class="col-md-6">
  <div class="thumbnail">
    <img src="gambar/<?php echo $row['gambar']?>" alt="..." width="360" height="124">
    <div class="caption">
      <h2><?php echo $row['judul']; ?></h2>
   <h5><span class="glyphicon glyphicon-time"></span> Post by Jane Dane, <?php echo $row['waktu'];?></h5>
    <h5><span class="label label-danger"><?php echo $row['judul_tag'];?></span> </h5><br>
      <p><?php echo $row['isi'];?> </p>
    <p class="text-left"><a href="post.php?id=<?= $row['id_artikel']; ?>" class="btn btn-primary" role="button">Baca Selengkapnya </a></p>
    </div>
  </div>
    </div>
<?php endwhile; ?>
<?php }else {echo "Maaf tidak ada dalam pencarian";} ?>


</div>
  <!--Sidebar-->
<div class="col-md-4">

<!-- Search Widget -->
        <div class="panel panel-default">
          <div class="panel-heading">
       <h5 class=" panel-title">Search</h5></div>
          <div class="panel-body">
            <div class="input-group">
              <form action="cari.php" method="get">
              <input type="text" name="cari" class="form-control" placeholder="Search for...">
              <span class="input-group-btn">
                <input type="submit" class="btn btn-secondary" value="Pencarian"/>
              </form>
              </span>
            </div>
          </div>
        </div>

        <!-- Categories Widget -->
        <div class="panel panel-default">
      <div class="panel-heading">
       <h5 class=" panel-title">Categories</h5></div>
          <div class="panel-body">
            <div class="row">
              <div class="col-lg-4">
                <ul class="list-unstyled mb-0">
                  <?php while ($row= mysqli_fetch_assoc ($kategori)): ?>
                    <li>
                    <a href="kategori.php?id=<?= $row['id_tag']; ?>"><?php echo $row['judul_tag'];?></a>
                  </li>
                <?php endwhile; ?>

                </ul>
              </div>

              <div class="col-lg-4">
                <ul class="list-unstyled mb-0">
                  <?php while ($row2= mysqli_fetch_assoc ($kategori2)): ?>
                    <li>
                    <a href="kategori.php?id=<?= $row2['id_tag']; ?>"><?php echo $row2['judul_tag'];?></a>
                  </li>
                <?php endwhile; ?>

                </ul>
              </div>

              <div class="col-lg-4">
                <ul class="list-unstyled mb-0s">
                  <?php while ($row3= mysqli_fetch_assoc ($kategori3)): ?>
                    <li>
                    <a href="kategori.php?id=<?= $row3['id_tag']; ?>"><?php echo $row3['judul_tag'];?></a>
                  </li>
                <?php endwhile; ?>

                </ul>
              </div>

            </div>
          </div>
        </div>

        <!-- Side Widget -->
        <div class="panel panel-default">
           <div class="panel-heading">
       <h5 class=" panel-title">Side Widget</h5></div>
          <div class="panel-body">
            <ul class="list-inline">
            <li class="list-inline-item"><a href="http://<?php echo $facebook; ?>"><i class="fa fa-facebook-square" style="font-size:36px;"></i></a></li>
            <li class="list-inline-item"><a href="http://<?php echo $linkedin; ?>"><i class="fa fa-linkedin-square" style="font-size:36px;"></i></a></li>
            <li class="list-inline-item"><a href="http://<?php echo $instagram; ?>"><i class="fa fa-instagram" style="font-size:36px;"></i></a></li>

            </ul>

          </div>
        </div>

      </div>

  </div>
</div>
</section>



<?php require_once 'resources/footer_blog.php' ?>
