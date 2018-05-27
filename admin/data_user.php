<?php require_once "../resources/header_admin.php"; ?>

<?php
$user = tampil_user();
$num = mysqli_num_rows($user);


?>
 <aside class="right-side">
     <!-- Content Header (Page header) -->
     <section class="content-header">
         <h1>
             User
             <small>Daftar User</small>
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
                         <h3 class="box-title">Daftar User</h3>
                     </div><!-- /.box-header -->
                     <div class="box-body table-responsive">
                         <table id="example1" class="table table-bordered table-striped">
                             <thead>
                                 <tr>
                                     <th class="th-id-user">No</th>
                                     <th class="th-nama" >Nama Admin</th>
                                     <th class="th-email" >Email</th>
                                     <th  class="th-username">Username</th>
                                     <th class="th-action-user ">Action</th>
                                 </tr>
                             </thead>
                             <tbody>

<?php if($num!= 0){
       $no = 1; ?>
<?php
while ($row= mysqli_fetch_assoc($user)):
  $id=$row['id_user'];
  $nama_admin=$row['nama'];
  $email=$row['email'];
  $username=$row['username'];

?>
<tr>
                                     <td><?php echo $no ?></td>
                                     <td><?php echo $nama_admin; ?></td>
                                     <td><?php echo $email; ?></td>
                                     <td><?php echo $username; ?></td>
                                     <td>
                                     <a href="../admin/edit_user.php?edit=<?php echo $id ?>">
                                    <button class="btn btn-success btn-sm">Edit</button>
                                     </a>

                                    <a href="../admin/delete_user.php?delete=<?php echo $id ?>">
                                    <button class="btn btn-danger btn-sm">Hapus</button>
                                  </a> </td>
</tr>
<?php $no++; endwhile; }?>


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
