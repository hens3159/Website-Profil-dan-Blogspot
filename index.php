<?php
require_once 'core/init_oop.php';
require_once 'resources/header_port.php';

$slide = $slide->slide();
$user = $users->tampil_profil();
$pendidikan = $users->pendidikan();
$pekerjaan = $users->pekerjaan();
$skill = $users->skill();
$port = $port->portofolio();
$sosmed = $users->sosmed();
$blog1 = $blog->get_blog1();
$blog2 = $blog->get_blog2();
$blog3 = $blog->get_blog3();
$blog = $blog->blog_count();


?>

<!--slider-->
<div id="home" class="slider">
<div class=" jumbotron">
	<div class="container">
  <h1><?php echo $slide['header_judul']; ?></h1>
  <p><?php echo $slide['header_tagline']; ?></p>
</div>
</div>

<div  class="container">
<div class="image-profil">
 <img src="asset/image/<?php echo $user['foto']; ?>" class="img-circle" alt="Cinque Terre" width="120px" height="120px">
</div>

<h3 class="text-center"><?php echo $user['nama']; ?></h3>
<p class="skill-desc"><?php echo $user['keahlian']; ?></p>
<div class="line">
</div>
<div class="biodata">
<h4 class="text-center">Who Am I ? </h4>
<h2 class="about">About Me </h2>
<p class=" text-center"><?php echo $user['tentang_saya']; ?></p>
</div>
</div>
</div>
<hr>



<!-- Container (Profil) -->

<div id="profil" class="container container-x">
<div class="biografi">
<div class="contact">
<div class="row">

	<!-- My profile -->
<div class="col-md-6">
<h2 class="text-center"> My Profile </h2>
<h3 class="text-center">Profile </h3>
<p class="text-center"><?php echo $user['keahlian']; ?></p>
<h3 class="text-center">Sosial Media </h3>
<ul class="social-media">
<li><a href="http://<?php echo $sosmed['facebook'];?>" target="_blank"> <i class="fa fa-facebook-square" style="font-size:32px"></i></a></li>
	<li><a href="http://<?php echo $sosmed['Instagram'];?>" target="_blank"> <i class="fa fa-instagram" style="font-size:32px"></i></a></li>
	<li><a href="http://<?php echo $sosmed['linkedin'];?>" target="_blank"><i class="fa fa-linkedin-square" style="font-size:32px"></i></a></li>
</ul>
<h3 class="text-center">Contact </h3>
<p class="text-center"><?php echo $user['kontak']; ?> </p>
</div>

<!--skill and ablities -->
<div class="col-md-6">
<h2 class="text-center"> Skill & Abilities </h2>
<?php foreach ($skill as $skill): ?>
  <div class="progress">
    <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $skill['persentase_skill']?>%">

			<?php echo $skill['persentase_skill'].'%'.' '. $skill['skill'];?>
    </div>
  </div>
<?php endforeach; ?>

</div>
</div>
</div>
	</div>


<!--Education -->

	<div class= "education">
  <div class="row">
  <div class="col-md-6">
    <h2 class="text-center"> Education </h2>
<h3 class="text-center"> Senior High School </h3>
<p class="text-center"><?php echo  $pendidikan ['SMA']; ?></p>
<h3 class="text-center"> Degree </h3>
<p class="text-center"><?php echo  $pendidikan ['jurusan_S1']; ?><br> <?php echo  $pendidikan ['S1']; ?></p>
<h3 class="text-center"> Master Degree </h3>
<p class="text-center"><?php echo  $pendidikan ['jurusan_S2']; ?><br>
	  <?php echo  $pendidikan ['S2']; ?> </p>
  </div>


<!--Jobs-->
  <div class="col-md-6">
  <h2 class="text-center"> Jobs </h2>


<?php foreach ($pekerjaan as $kerja): ?>
<h3 class="text-center"> <?php echo $kerja ['tahun_kerja']; ?> </h3>
<p class="text-center"><?php echo $kerja ['pekerjaan']; ?></p>
<?php endforeach; ?>

	  </div>
  </div>
  </div>
</div>

<!--container (cv) -->
<hr>
<div id="download-cv" class="container container-x">
<div class="row"><div class="col-md-12">
<h2 class="text-center">Do you want to know my self </h2> <br>
<p class="text-center"><a href="download.php"><button type="button" class="btn btn-primary">Download CV</button></a></p>
</div></div></div>
<hr>


<!--Container (Portofolio) -->
<div id="portofolio" class="container container-x">
<div class="portofolio">
  <h4 class="text-center">SOME WORKS</h4>
    <h2 style="text-align: center; margin-top:-10px; margin-bottom:25px; ">My Portofolio </h2>


<div class="row">
<div class="col-md-12">
<div class="button">
 <div class="btn-group">
	 <ul class="btn-group">

  <button type="button" class="btn btn-primary" data-toggle="portfilter" data-target="design">Design</button>
  <button  type="button" class="btn btn-primary " data-toggle="portfilter" data-target="website">Website</button>
  <button type="button" class="btn btn-primary" data-toggle="portfilter" data-target="2D_animation">2D Animation</button>
  <button type="button" class="btn btn-primary" data-toggle="portfilter" data-target="all">All</button>
</ul>
</div>
  </div>
</div></div>


<!--dummy 1 -->

 <div class="row">
	 <?php foreach ($port as $port): ?>
  <div class="col-md-3" data-tag="<?php echo $port ['judul'] ?>">
    <div class="thumbnail">
      <!--<a href="#">-->

        <img class="img-responsive"  src="asset/image/<?php echo $port ['gambar'] ?>" alt="none"  style="width:100%; max-height:320px;;" class="img-thumbnail" >
        <div class="caption">
          <h4><?php echo $port ['judul'] ?></h4>
        </div>
    <!--  </a> -->
    </div>
  </div>
<?php endforeach; ?>

</div>

</div>

	</div>

	<?php if ($blog != 0) { ?>

	<hr>
<!--Container (blog) -->
<div id="blog" class="container container-x">

<div class="blog">
 <h4 class="text-center">Some Article</h4>
 <h2 style="text-align: center; margin-top:-10px; margin-bottom:35px; " >My Blog </h2>
<div class="row">

<div id="myCarousel" class="carousel slide" data-ride="carousel">

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
			<?php foreach ($blog1 as $blog1): ?>

			<div class="col-md-4">
	 <div class="thumbnail">
      <img src="asset/gambar/<?php echo $blog1 ['gambar']; ?>" alt="none">
      <div class="caption">
        <h3><?php echo blog::excerpt_judul ($blog1 ['judul']); ?></h3>
        <p><?php echo blog::excerpt($blog1 ['isi']);?> </p>
        <p class="text-right"><a href="post.php?id=<?php echo $blog1 ['id_artikel'];?>">Read More</a></p>
      </div>
    </div>
	</div>
<?php endforeach ?>
    </div>

<?php if ($blog >= 4) { ?>
    <div class="item">
			<?php foreach ($blog2 as $blog2): ?>
      <div class="col-md-4">
	 <div class="thumbnail">
		 <img src="asset/gambar/<?php echo $blog2 ['gambar']; ?>" alt="none">
		 <div class="caption">
			 <h3><?php echo blog::excerpt_judul($blog2 ['judul']); ?></h3>
			 <p><?php echo  blog::excerpt($blog2 ['isi']);?> </p>
			 <p class="text-right"><a href="post.php?id=<?php echo $blog2 ['id_artikel'];?>">Read More</a></p>
      </div>
    </div>
	</div>
<?php endforeach ?>
</div>

<?php } else { echo "kosong"; } ?>


<?php if ($blog >= 7) { ?>
<div class="item">
	<?php foreach ($blog3 as $blog3): ?>
	<div class="col-md-4">
<div class="thumbnail">
	<img src="asset/gambar/<?php echo $blog3 ['gambar']; ?>" alt="none">
	<div class="caption">
		<h3><?php echo blog::excerpt_judul($blog3 ['judul']); ?></h3>
		<p><?php echo  blog::excerpt($blog3 ['isi']);?> </p>
		<p class="text-right"><a href="post.php?id=<?php echo $blog3 ['id_artikel'];?>">Read More</a></p>
	</div>
</div>
</div>
<?php endforeach ?>

    </div>
	<?php } else { echo "kosong"; } ?>


  </div>

  <!-- Left and right controls -->
  <a class="kiri left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div>

</div>
	<p class="text-center"><a href="artikel.php"><b> More Article </b></a> </p>
</div><!--artikel -->
<?php } else { echo""; } ?>
</div>
<?php
require_once 'resources/footer_port.php';
?>
