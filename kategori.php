<?php require_once 'core/init.php' ?>
<?php require_once 'resources/header_blog.php' ?>
<?php
$artikel = tampilkan();
$kategori = tampil_kategori();
//die (print_r($artikel));


if (isset ($_GET['cari'])) {
  $cari = $_GET['cari']; //cari ini adalah nilai sebelah kanan pada link
  $artikel = tampil_pencarian($cari);
}


if (isset ($_GET['id'])) {
  $cari = $_GET['id']; //cari ini adalah nilai sebelah kanan pada link
  $artikel = tampil_pencarian_tag($cari);
}
?>
<section>
  <div class="col-md-8 ">

    <!-- Blog Post -->
 <?php while ($row= mysqli_fetch_assoc ($artikel)): ?>
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



<!-- Pagination -->
<div class="col-md-12">
<div class="text-center">
<ul class="pagination">
<li><a href=""> <i class="fa fa-angle-left" ></i></a></li>
<li><a href="#">1</a></li>
<li><a href="#">2</a></li>
<li><a href="#">3</a></li>
<li class="disabled"><a href="#">4</a></li>
<li><a href="#">5</a></li>
<li><a href=""> <i class="fa fa-angle-right" ></i></a></li>
</ul>
</div>
    </div>
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
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <?php while ($row= mysqli_fetch_assoc ($kategori)): ?>
                    <li>
                    <a href="kategori.php?id=<?= $row['id_tag']; ?>"><?php echo $row['judul_tag'];?></a>
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
            You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
          </div>
        </div>

      </div>

  </div>
</div>
</section>



<?php require_once 'resources/footer_blog.php' ?>
