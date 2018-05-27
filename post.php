<?php require_once 'core/init.php' ?>
<?php require_once 'resources/header_blog.php' ?>
<?php

//============Popular Artikel=================
////untuk memanggil popular artikel  dari database
$popular = popular_artikel(3);
//menghitung jumlah data
$num  = mysqli_num_rows($popular);


//============kategori=================
////untuk memanggil kategori dari database


$kategori = tampil_kategori();
$kategori2 = tampil_kategori2();
$kategori3 = tampil_kategori3();

$artikel = tampilkan();
if (isset ($_GET['cari'])) {
  $cari = $_GET['cari']; //cari ini adalah nilai sebelah kanan pada link
  $artikel = tampil_pencarian ($cari);
}

$error= '';
$id = $_GET['id'];
if (isset($_GET['id'])) {
    $artikel_id = tampilkan_per_id($id);
    while ($row = mysqli_fetch_assoc ($artikel_id)) {
    $_id_artikel = $row['id_artikel'];
    $judul = $row ['judul'];
    $konten =$row ['isi'];
    $tag = $row ['judul_tag'];
    $image = $row ['gambar'];
    $penulis = $row ['penulis'];
    $waktu = $row ['waktu'];
  }
}

$hitung= hitung($id);

if  (isset ($_POST ['submit'])) {
  $nama = $_POST['nama'];
  $email = $_POST['email'];
  $komentar = $_POST['komentar'];
  $id_artikel = $_id_artikel;


if (komentar  ($nama, $email, $komentar, $id_artikel)) {
  //echo "komentar telah disimpan";
  echo "<meta http-equiv='refresh' content='0'; url=''>";

}else {
  echo "gagal memasukan komentar";
}
}

$tampil_koment=tampil_komentar($id);


 ?>

<section>
  <div class="col-md-8 ">
    <!-- Artikel -->
  <div class=" artikel col-md-12">
  <div class="thumbnail">
  <h2 class="text-center title"><?=$judul; ?></h2>
    <img src="asset/gambar/<?=$image;?>" alt="..." width="360" height="124">
    <div class="caption">
   <h5><span class="glyphicon glyphicon-time"></span> <?=$penulis;?>, <?=$waktu; ?></h5>
    <h5><span class="label label-danger"><?=$tag;?></span></h5><br>
      <p><?=$konten; ?></p>
    </div>
  </div>
<hr>



<h2 class="text-left">Comment</h2>

<?php while ($row = mysqli_fetch_assoc ($tampil_koment)):
$nama=$row['nama_user'];
$waktu = $row ['waktu'];
$komentar = $row["komentar"];
?>

<!--Comment 1 -->
<div class="media">
<div class="media-left">
  <a href="#">
    <img class="media-object" src="asset/gambar/profile.jpg" alt="foto profil" height="64px" width="64px">
  </a>
</div>
<div class="media-body">
  <h4 class="media-heading"><?php echo $nama; ?></h4>
<p> <span class="glyphicon glyphicon-time"></span><?php echo $waktu; ?></p>
</p><?php echo $komentar; ?></p>
</div>
</div>

<?php endwhile ?>
<hr>



<!--form comment -->
<h2 class="text-left">Live a Reply</h2>
<form action="" method="post">
<div class="form-group row">
<div class="col-xs-4">
  <label for="name">Name:</label>
  <input type="text" class="form-control" name="nama"  id="name">
</div>
</div>
<div class="form-group row">
<div class="col-xs-4">
  <label for="email">Email address:</label>
  <input type="email" class="form-control" name="email" id="email">
</div>
</div>
<div class="form-group">
<label for="comment">Comment:</label>
<textarea class="form-control" rows="5" id="comment" name="komentar"></textarea>
</div>
<input type="hidden" name="id_artikel" value="<?=$id_artikele; ?>">
<button type="submit" name="submit" class="btn btn-default">Submit</button>
</form>
  </div>

  </div> <!--col-md-8-->

  <!--Sidebar-->
<div class=" sidebar col-md-4">

<!-- Search Widget -->
        <div class="panel panel-default">
          <div class="panel-heading">
            <form action="cari.php" method="get">
       <h5 class=" panel-title" >Search</h5></div>
          <div class="panel-body">
            <div class="input-group">
              <input type="text" class="form-control" name="cari" placeholder="Search for...">
              <span class="input-group-btn">
                <button class="btn btn-secondary" type="button" name="go">Go!</button>

              </span>
            </div>
          </div>
        </form>

        </div>


        <!-- Article Popular -->
        <div class="panel panel-default">
           <div class="panel-heading">
       <h5 class=" panel-title">Popular Artikel</h5></div>
          <div class="panel-body">

<!--Artikel 1 -->
<?php if ($num=!0){
  $no=1;
 while ($row= mysqli_fetch_assoc ($popular)): ?>

<div class="media">
<div class="media-body">
  <h4 class="media-heading" style="padding-top:25px;"> <a href="post.php?id=<?= $row['id_artikel']; ?>"> <?php echo $no.'. '. excerpt_popular ($row['judul']); ?></a></h4>
</div>
 <div class="media-right">
<a href="post.php?id=<?= $row['id_artikel']; ?>">
<img class="media-object" src="asset/gambar/<?php echo $row['gambar']; ?>" alt="foto profil" height="64px" width="64px">
  </a>
</div>
</div>

<?php $no++; endwhile; } ?>


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


      </div>

  </div>
</div>
</section>
<?php require_once 'resources/footer_blog.php' ?>
