
<?php require_once "../resources/header_admin.php"; ?>


<?php
$artikel = tampilkan();
$num = mysqli_num_rows($artikel);

?>

 <aside class="right-side">
     <!-- Content Header (Page header) -->
     <section class="content-header">
         <h1>
             Dashboard
             <small>Control panel</small>
         </h1>
         <ol class="breadcrumb">
             <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
             <li class="active">Dashboard</li>
         </ol>
     </section>

     <!-- Main content -->
     <!-- Main content -->
     <section class="content">
         <div class="row">
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
                                     <th class="th-judul" >Judul</th>
                                     <th class="th-waktu" >Waktu</th>
                                     <th  class="th-satus">Status</th>
                                     <th class="th-action ">Action</th>
                                 </tr>
                             </thead>
                             <tbody>

<?php
if($num!= 0){
    $no = 1;

  while ($row = mysqli_fetch_array($artikel)):
  $id = $row['id_artikel'];
  $judul = $row ['judul'];
  $konten = $row ['isi'];
  $waktu = $row ['waktu'];
?>
                                 <tr>
                                     <td><?php echo $no; ?></td>
                                     <td><a href="../post.php?id=<?= $id; ?>"><?php echo $judul;?></a> </td>
                                     <td><?php echo $waktu;?></td>
                                     <td> <span class="label label-success">Terbit</span> </td>
                                     <td>
                                       <a href="../admin/edit_artikel.php?edit=<?php echo $id ?>">
                                       <button class="btn btn-success btn-sm">Edit</button>
                                       </a>
                                     <a href="../admin/delete_artikel.php?delete=<?php echo $id ?>">
                                     <button class="btn btn-danger btn-sm">Hapus</button>
                                     </a>
                                   </td>
                                 </tr>
<?php $no++;  endwhile;  }?>
                             </tbody>
                             <tfoot>
                                 <tr>
                                     <th>Id</th>
                                     <th>Judul</th>
                                     <th>Waktu</th>
                                     <th>Status</th>
                                     <th>Action</th>
                                 </tr>
                             </tfoot>
                         </table>
                     </div><!-- /.box-body -->
                 </div><!-- /.box -->
             </div>
         </div>

     </section><!-- /.content -->
 </aside><!-- /.right-side -->

 <?php require_once "../resources/footer_admin.php"; ?>
