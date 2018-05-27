<?php require_once "../resources/header_admin.php"; ?>

<?php
$komentar = tampil_koment();

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
                                     <th class="th-id">ID</th>
                                     <th class="thc-judul" >Komentar</th>
                                     <th class="thc-waktu" >Judul Arikel</th>
                                     <th  class="th-satus">Nama User</th>
                                     <th class="th-action ">Action</th>

                                 </tr>
                             </thead>
                             <tbody>

                              <?php
                               while ($row= mysqli_fetch_assoc($komentar)):
                                 $id = $row['id_komentar'];
                                 $koment = $row['komentar'];
                                 $artikel = $row ['judul'];
                                 $nama_user = $row['nama_user'];

                               ?>
                                 <tr>
                                     <td><?php echo $id ?></td>
                                     <td><?php echo $koment ?></td>
                                     <td><?php echo $artikel ?></td>
                                     <td><?php echo $nama_user ?>  </td>
                                     <td>
                                       <a href="delete_komentar.php?delete=<?php echo $id ?>">
                                       <button class="btn btn-danger btn-sm">Hapus</button>
                                    </td>
                                  </a>

                                 </tr>
<?php endwhile ?>
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

 <!-- page script -->
 <script type="text/javascript">
     $(function() {
         $("#example1").dataTable();
         $('#example2').dataTable({
             "bPaginate": true,
             "bLengthChange": false,
             "bFilter": false,
             "bSort": true,
             "bInfo": true,
             "bAutoWidth": false
         });
     });
 </script>




 <?php require_once "../resources/footer_admin.php"; ?>
