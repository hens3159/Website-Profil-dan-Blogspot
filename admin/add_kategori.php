<?php require_once "../resources/header_admin.php"; ?>

<?php
$error = "";
//show Kategori
$tampil_kategori = tampil_kategori_admin();
$num = mysqli_num_rows($tampil_kategori);
if  (isset($_POST['submit'])){

$kategori = $_POST['tag'];

if ($koko=tambah_kategori($kategori)) {
  //$koko= 'file telah ditambahkan';
echo  '<script language="javascript">alert("Kategori berhasil ditambahkan."); document.location="add_kategori.php";</script>';
  //echo "<meta http-equiv='refresh' content='0'; url=''>";

  }else {
  $error= 'File tidak dapat dimasukan ke dalam database';
        }
}
 ?>
 <aside class="right-side">

     <!-- Content Header (Page header) -->
     <section class="content-header">

       <form action="add_kategori.php" method="post">
         <h1>
             Post
             <small>Kategori</small>
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
               <?php if($error){ ?>
                 <div class="alert alert-danger
                  alert-dismissable">
                 <i class="fa fa-ban"></i>
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <p><?php echo $error; ?></P>
               </div>
             <?php } ?>
               <div class="row">
               <div class='col-md-8 '>
                 <div class="box-tools">
                 <div class="input-group">
                   <span class="input-group-addon" id="sizing-addon2">Kategori</span>
                   <input type="text" class="form-control" placeholder="Masukan Kategori" name="tag" aria-describedby="sizing-addon2" >
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

<!--tampilkan kategori -->
             <div class="col-xs-12">


                 <div class="box">
                     <div class="box-header">
                         <h3 class="box-title">Artikel</h3>
                     </div><!-- /.box-header -->
                     <div class="box-body table-responsive">



                         <table id="example1" class="table table-bordered table-striped">
                             <thead>
                                 <tr>
                                     <th class="th-id">ID</th>
                                     <th class="th-judul" >Kategori</th>
                                     <th class="th-judul" >Action</th>

                                 </tr>
                             </thead>
                             <tbody>
                               <?php
                              if($num!= 0){
                                  $no = 1;
                               while ($row = mysqli_fetch_array($tampil_kategori)):
                              $id = $row['id_tag'];
                              $judul = $row ['judul_tag'];
                              ?>
                                 <tr>
                                     <td><?php echo $no; ?> </td>
                                     <td><?php echo $judul;?></td>
                                     <td>
                                       <a href="../admin/edit_kategori.php?edit=<?php echo $id ?>">
                                       <button class="btn btn-success btn-sm">Edit</button>
                                       </a>
                                     <a href="../admin/delete_kategori.php?delete=<?php echo $id ?>">
                                     <button class="btn btn-danger btn-sm">Hapus</button>
                                     </a>
                                 </tr>
                               <?php  $no++; endwhile;  }?>

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
