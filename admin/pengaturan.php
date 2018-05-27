<?php  require_once '../core/admin_init_oop.php';?>



<?php

//variabel yang menampung error array
$errors=array();

//variabel yang menampung error array
$error=array();


if (input::get('submit')) {

$validasi = new validasi();

$validasi = $validasi->cek(array(
'judul' => array(
            'required' =>'true'
),
'tagline' => array(
            'required' =>'true'
),
'footer' => array(
            'required' =>'true'
),

));

if ($validasi->passed())
{
  $pengaturan->input_pengaturan(array(
  'header_judul' => input::get('judul'),
  'header_tagline' => input::get('tagline'),
  'judul_web' => input::get('footer')
  ));
}else {
  $errors = $validasi->errors();
}
}

?>

<?php require_once "../resources/header_admin.php"; ?>


 <aside class="right-side">
     <!-- Content Header (Page header) -->
     <section class="content-header">
         <h1>
             Pengaturan
             <small>Website</small>
         </h1>
         <ol class="breadcrumb">
             <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
             <li class="active">Pengaturan</li>
         </ol>
     </section>

     <!-- Main content -->
     <!-- Main content -->
     <section class="content">
         <div class="row">
             <div class="col-xs-12">

               <div class="box box-primary">
                                               <div class="box-header">
                                                   <h3 class="box-title">Pengaturan</h3>
                                               </div><!-- /.box-header -->
                                               <!-- form start -->
                                               <form role="form" target="" method="get">
                                                   <div class="box-body">
                                                       <div class="form-group">
                                                           <label for="exampleInputEmail1">judul</label>
                                                           <input type="text" name="judul" class="form-control" id="exampleInputEmail1" placeholder="Masukan Judul">
                                                       </div>
                                                       <div class="form-group">
                                                           <label for="exampleInputEmail1">Tagline</label>
                                                           <input type="text" name="tagline" class="form-control" id="exampleInputEmail1" placeholder="Masukan Tagline">
                                                       </div>

                                                       <div class="form-group">
                                                           <label for="exampleInputEmail1">Footer</label>
                                                           <input type="text" name="footer" class="form-control" id="exampleInputEmail1" placeholder="Masukan Footer">
                                                       </div>

                                                   </div><!-- /.box-body -->

                                                   <div class="box-footer">

                                                       <input type="submit" name="submit" class="btn btn-primary" value="submit">
                                                   </div>

  <?php if(!empty($errors)) { ?>
   <div id="errors">
   <?php foreach ($errors as $errors) {?>
     <li><?php echo $errors ?></li>
   <?php } ?>
   </div>
   <?php } ?>
                                               </form>
                                           </div>
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
