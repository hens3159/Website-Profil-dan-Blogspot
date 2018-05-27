<?php require_once "../resources/header_admin.php"; ?>

<?php
$tampil_kategori = tampil_kategori_admin();
$error="";
 //edit kategori

$num= mysqli_num_rows($tampil_kategori);

 $id = $_GET['edit'];
if (isset($_GET['edit'])) {
  $article = edit_kategori($id);
   while ($row= mysqli_fetch_assoc ($article)) {
    $judul_tag = $row['judul_tag'];
  }
}

if (isset($_POST['submit'])) {
 $judul_kategori = $_POST['tag'];
if (!empty(trim($judul_kategori)) )//gunakan trim untuk mengambil seluruh white space

{
  if (update_kategori($judul_kategori, $id)) {
    echo  '<script language="javascript">alert("Kategori berhasil diupdate."); document.location="add_kategori.php";</script>';
}else {
   $error= 'ada masalah saat update  data';
}

} else {
  $error= 'kategori wajib di isi';
}
}








//   if (isset($_GET['edit'])){
//   $id=$_GET['edit'];
//    $db = edit_kategori($id);
//    $row = mysqli_fetch_array($db);
//    // print_r($row);
//    // die();
// }
//
//  if (isset($_GET['submit'])) { //update file
//  $judul_kategori= $_GET['tag'];
//  $id= $_GET['id_tag']; //id artikel
//
//  if (update_kategori($judul_kategori, $id)) { //save image to database
//    echo 'file telah ditambahkan';
//    echo "<meta http-equiv='refresh' content='0'; url=''>";
//    }else {
//            echo 'File tidak dapat dimasukan ke dalam database';
//          }
//
//  }

?>
<aside class="right-side">


    <!-- Content Header (Page header) -->
    <section class="content-header">
      <?php if($error){ ?>
        <div class="alert alert-danger
         alert-dismissable">
        <i class="fa fa-ban"></i>
       <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
       <p><?php echo $error; ?></P>
      </div>
    <?php } ?>
      <form action="" method="post">
        <h1>
            Post
            <small>Tulis</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Post</li>
        </ol>
    </section>

    <!-- Main content -->

    <section class="content">
      <div class='row'>

            <div class='box box-info'>


            <div class="box-header form-title">
              <div class="row">
              <div class='col-md-8 '>
                <div class="box-tools">
                <div class="input-group">
                  <span class="input-group-addon" id="sizing-addon2">Kategori</span>
                  <input type="text" class="form-control" placeholder="Masukan Kategori" name="tag" aria-describedby="sizing-addon2" value="<?php echo $judul_tag; ?>">
             </div>



            </div>
               </div>

              <div class="col-md-4 ">
              <div class="pull-right box-tools">
              <button class="btn btn-success" name="submit" value="submit">Simpan</button>
            </div>
                    </div>
                  </div>
                </div>
             </div>
            </form>

            <div class="col-xs-12">


                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Artikel</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body table-responsive">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th class="th-id">No</th>
                                    <th class="th-judul" >Kategori</th>
                                    <th class="th-judul" >Action</th>

                                </tr>
                            </thead>
                            <tbody>
        <?php if($num = !0){
          $no=1 ?>
        <?php while ($row = mysqli_fetch_array($tampil_kategori)):
       $id = $row['id_tag'];
       $judul = $row ['judul_tag'];
       ?>
                                <tr>
                                    <td><?php echo $no; ?> </td>
                                    <td><?php echo $judul;?></td>
                                    <td>
                                      <a href="../admin/add_kategori.php?edit=<?php echo $id ?>">
                                      <button class="btn btn-success btn-sm">Edit</button>
                                      </a>
                                    <a href="../admin/delete_delete.php?delete=<?php echo $id ?>">
                                    <button class="btn btn-danger btn-sm">Hapus</button>
                                    </a>
                                </tr>
       <?php $no++; endwhile; } ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Id</th>
                                    <th>Kategori</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div>


    </section><!-- /.content -->



</aside><!-- /.right-side -->









 <!-- jQuery 2.0.2 -->
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
<!-- CK-Editor  -->
<script src="//cdn.ckeditor.com/4.8.0/full/ckeditor.js"></script>
 <!-- Bootstrap -->
 <script src="<?php echo $siteurl;?>/view/js/bootstrap.min.js" type="text/javascript"></script>
 <!-- AdminLTE App -->
 <script src="<?php echo $siteurl;?>/view/js/AdminLTE/app.js" type="text/javascript"></script>
  <!-- Bootstrap WYSIHTML5 -->
 <script src="<?php echo $siteurl;?>/view/js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>


</body>
</html>
