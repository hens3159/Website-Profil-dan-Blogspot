<?php  require_once '../core/admin_init_oop.php';?>



<?php

//variabel yang menampung error array
$errors=array();

//variabel yang menampung error array
$error=array();


if (input::get('submit')) {

$validasi = new validasi();

$validasi = $validasi->cek(array(
'Pengalaman_kerja' => array(
            'required' =>'true'
),
'tahun_kerja' => array(
            'required' =>'true'
)

));

if ($validasi->passed())
{
  $user->input_pengalaman(array(
  'pekerjaan' => input::get('Pengalaman_kerja'),
  'tahun_kerja' => input::get('tahun_kerja')
  ));
}else {
  $errors = $validasi->errors();
}
}


if (input::get('submit2')) {

$validasi = new validasi();

$validasi = $validasi->cek(array(
'skill' => array(
            'required' =>'true'
),
'persentase' => array(
            'required' =>'true'
)

));

if ($validasi->passed())
{
  $user->input_skill(array(
  'skill' => input::get('skill'),
  'persentase_skill' => input::get('persentase')
  ));
}else {
  $error = $validasi->errors();
}
}
?>

 <?php require_once "../resources/header_admin.php"; ?>




 <aside class="right-side">
     <!-- Content Header (Page header) -->
     <section class="content-header">
         <h1>
             Pekerjaan & SKill
             <small>Data</small>
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
             <div class="col-xs-6">

               <div class="box box-primary">
                                               <div class="box-header">
                                                   <h3 class="box-title">Pekerjaan</h3>
                                               </div><!-- /.box-header -->
                                               <!-- form start -->
                                               <form role="form" target="" method="post">
                                                   <div class="box-body">
                                                       <div class="form-group">
                                                           <label for="exampleInputEmail1">Pengalaman Pekerjaan</label>
                                                           <input type="text" name="Pengalaman_kerja" class="form-control" id="exampleInputEmail1" placeholder="Pengalaman Pekerjaan">
                                                       </div>
                                                       <div class="form-group">
                                                           <label for="exampleInputEmail1">Tahun Kerja</label>
                                                           <input type="text" name="tahun_kerja" class="form-control" id="exampleInputEmail1" placeholder="Tahun Kerja">
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


             <div class="col-xs-6">

               <div class="box box-primary">
                                               <div class="box-header">
                                                   <h3 class="box-title">Skill</h3>
                                               </div><!-- /.box-header -->
                                               <!-- form start -->
                                               <form role="form" target="" method="post">
                                                   <div class="box-body">
                                                       <div class="form-group">
                                                           <label for="exampleInputEmail1">Skill</label>
                                                           <input type="text" name="skill" class="form-control" id="exampleInputEmail1" placeholder="Skill">
                                                       </div>
                                                       <div class="form-group">
                                                           <label for="exampleInputEmail1">Persentase Skill</label>
                                                           <input type="text" name="persentase" class="form-control" id="exampleInputEmail1" placeholder="Persentase Skill">
                                                       </div>



                                                   </div><!-- /.box-body -->

                                                   <div class="box-footer">
                                                     <input type="submit" name="submit2" class="btn btn-primary" value="submit">
                                                   </div>
                                                   <?php if(!empty($error)) { ?>
                                                    <div id="errors">
                                                    <?php foreach ($error as $error) {?>
                                                      <li><?php echo $error ?></li>
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




<?php //require_once "../resources/footer_admin.php"; ?>
