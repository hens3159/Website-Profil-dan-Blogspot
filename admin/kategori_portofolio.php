<?php  require_once '../core/admin_init_oop.php';?>
<?php  require_once "../resources/header_admin.php"; ?>

<?php
$portofolio = $port->get_edit_kategori();
$num = $port->get_count_portofolio();


 ?>
<aside class="right-side">
     <!-- Content Header (Page header) -->
     <section class="content-header">
         <h1>
             Portofolio
             <small>Seluruh Data</small>
         </h1>
         <ol class="breadcrumb">
             <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
             <li class="active">Biodata</li>
         </ol>
     </section>

     <!-- Main content -->
     <!-- Main content -->
     <section class="content">
         <div class="row">

           <div class="col-xs-12">
                               <div class="box">
                                   <div class="box-header">
                                       <h3 class="box-title">Tabel Portofolio</h3>
                                       <div class="box-tools">
                                           <div class="input-group">
                                               <input type="text" name="table_search" class="form-control input-sm pull-right" style="width: 150px;" placeholder="Search">
                                               <div class="input-group-btn">
                                                   <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                                               </div>
                                           </div>
                                       </div>
                                   </div><!-- /.box-header -->
                                   <div class="box-body table-responsive no-padding">
                                       <table class="table table-hover">
                                           <tbody><tr>
                                               <th>No</th>
                                               <th>Kategori</th>
                                               <th>Aksi</th>
                                           </tr>
                                           <?php if($num!= 0){
                                               $no = 1; ?>
                                           <?php foreach ($portofolio as $port): ?>
                                           <tr>
                                               <td><?php echo $no;?></td>
                                               <td><?php echo $port['judul'];?></td>
                                               <td>
                                                 <a href="../admin/edit_kategori_port.php?edit=<?php echo $port['id_kategori'] ?>">
                                                 <button class="btn btn-success btn-sm">Edit</button>
                                                 </a>
                                                 <a href="../admin/delete_kategori_port.php?delete=<?php echo $port['id_kategori'] ?>">
                                                  <button class="btn btn-danger btn-sm">Hapus</button>
                                                </a>
                                               </td>
                                           </tr>
                                         <?php $no++;  endforeach;  }?>

                                       </tbody></table>
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
