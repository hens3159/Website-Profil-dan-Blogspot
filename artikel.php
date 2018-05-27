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



//============artikel==================
//untuk memanggil artikel dari database
$artikel = tampilkan();
//untuk mendapatkan id page
//$page=$_GET['page'];
$page=0;
if(isset($_GET['page']))
{
    $page= $_GET['page'];
}
// Zero is an incorrect page
// So we switch the zero with 1
// Mainly because it will cause an error with the SQL
if($page== "0") {
    $page= "1";
}

//logika untuk mengatur artikel yang keluar per halaman
if ($page=="" || $page=="1")
{
  $page1 =0;
}else {
  $page1=($page*8)-8;
}
//memanggil database sesuai limit  untuk logika diatas
$query= "SELECT artikel.id_artikel, artikel.judul, artikel.isi, artikel.gambar, artikel.waktu, artikel.penulis, tags.judul_tag
         FROM artikel
         LEFt JOIN tags ON artikel.id_kategori = tags.id_tag
         ORDER BY id_artikel DESC
         LIMIT $page1, 8";

$result= mysqli_query($link,$query);
//mengeluarkan jumlah dari artikel yang terdapat dalam database

$total = mysqli_num_rows($artikel);
//untuk membagi halaman (ceil digunakan untuk pembualatan pembagians)
$count = ceil($total/8);


//batas pada penomoranpage
 $range = 5;
// //panas pada sebelah kiri
// // if not on page 1, don't show back links
// if ($page > 1) {
//    // show << link to go back to page 1
//    echo " <a href='{$_SERVER['PHP_SELF']}?page=1'><<</a> ";
//    // get previous page num
//    $prevpage = $page - 1;
//    // show < link to go back to 1 page
//    echo " <a href='{$_SERVER['PHP_SELF']}?page=$prevpage'><</a> ";
// }

//logika sederhana untuk menampilkan jumlah page
//  for($a=1;$a<=$count;$a++) {
// echo " <a href='{$_SERVER['PHP_SELF']}?page=$a'>$a</a>";
//
// }
//logika untuk memunculkan jumlah page
// for ($x = ($page - $range); $x < (($page + $range) + 1); $x++) {
//    // if it's a valid page number...
//    if (($x > 0) && ($x <= $count)) {
//       // if we're on current page...
//       if ($x == $page) {
//          // 'highlight' it but don't make a link
//          echo " [<b>$x</b>] ";
//       // if not current page...
//       } else {
//          // make it a link
//          echo " <a href='{$_SERVER['PHP_SELF']}?page=$x'>$x</a>";
//       } // end else
//    } // end if
// } // end for

// //logika panah sebelah kanan
// if ($page != $count) {
//    // get next page
//    $nextpage = $page + 1;
//   //echo forward link for next page
//   echo " <a href='{$_SERVER['PHP_SELF']}?page=$nextpage'>></a> ";
//    //echo forward link for lastpage
//   echo " <a href='{$_SERVER['PHP_SELF']}?page=$count'>>></a> ";
// } // end if


?>

<section>
  <div class="col-md-8 ">

    <!-- Blog Post -->
 <?php while ($row= mysqli_fetch_assoc ($result)): ?>
  <div class="col-md-6">
  <div class="thumbnail">
    <img src="asset/gambar/<?php echo $row['gambar']?>" alt="..." width="360" height="124">
    <div class="caption">
      <h2><?php echo excerpt_judul ($row ['judul']); ?></h2>
   <h5><span class="glyphicon glyphicon-time"></span><?php echo $row['penulis']?>, <?php echo $row['waktu'];?></h5>
    <h5><span class="label label-danger"><?php echo $row['judul_tag'];?></span> </h5><br>
      <p><?php  echo  excerpt($row['isi']);?> </p>
    <p class="text-left"><a href="post.php?id=<?= $row['id_artikel']; ?>" class="btn btn-primary" role="button">Baca Selengkapnya </a></p>
    </div>
  </div>
    </div>


<?php endwhile; ?>



<!-- Pagination -->
<div class="col-md-12">
<div class="text-center">
<ul class="pagination">
<li>
<?php
if ($page > 1) {
   // show << link to go back to page 1
   echo " <a href='{$_SERVER['PHP_SELF']}?page=1'><<</a> ";
   // get previous page num
   $prevpage = $page - 1;
   // show < link to go back to 1 page
   echo " <a href='{$_SERVER['PHP_SELF']}?page=$prevpage'><</a> ";
}
?>
</li>

<li>
<?php
//   for($a=1;$a<=$count;$a++) {
//  echo " <a href='{$_SERVER['PHP_SELF']}?page=$a'>$a</a>";
// }
for ($x = ($page - $range); $x <= (($page + $range) + 1); $x++) {
   // if it's a valid page number...
   if (($x > 0) && ($x <= $count)) {
      // if we're on current page...
      echo " <a href='{$_SERVER['PHP_SELF']}?page=$x'>$x</a>";
}
} // end for
?>
</li>


<li>
<?php
if ($page != $count) {
   // get next page
   $nextpage = $page + 1;
  //echo forward link for next page
  echo " <a href='{$_SERVER['PHP_SELF']}?page=$nextpage'>></a> ";
   //echo forward link for lastpage
  echo " <a href='{$_SERVER['PHP_SELF']}?page=$count'>>></a> ";
} // end if

?>

</li>


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
              <input type="search" name="cari" class="form-control" placeholder="Search for...">
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
