<?php require_once "../resources/header_admin.php"; ?>

<?php
$tampil_sosmed=tampil_sosmed();
$sukses="";
$error = "";
if  (isset ($_POST ['submit'])) {
$facebook=$_POST['facebook'];
$linkedin=$_POST['linkedin'];
$instagram=$_POST['instagram'];

  if (update_sosmed($facebook, $linkedin ,$instagram)) {
   $sukses= 'file telah ditambahkan';

    }else {
            $error= 'File tidak dapat dimasukan ke dalam database';
          }

}


$row= mysqli_fetch_assoc ($tampil_sosmed);
$facebook=$row['facebook'];
$linkedin=$row['linkedin'];
$instagram=$row['instagram'];

?>



 <aside class="right-side">
     <!-- Content Header (Page header) -->
     <section class="content-header">
         <h1>
             User
             <small>Sosial Media</small>
         </h1>
         <ol class="breadcrumb">
             <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
             <li class="active">Dashboard</li>
         </ol>
     </section>

     <!-- Main content -->
     <section class="content">
       <div class="row">
           <div class="col-md-12">

               <div class="box box-success">
                   <div class="box-header">
                       <h3 class="box-title">Masukan Link Sosial Media</h3>
                   </div>
                   <div class="box-body">

                     <?php if($sukses){ ?>
                       <div class="alert alert-success alert-dismissable">
                       <i class="fa fa-check"></i>
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                      <p><?php echo $sukses; ?></P>
                     </div>
                   <?php } ?>

                            <?php if($error){ ?>
                              <div class="alert alert-danger
                               alert-dismissable">
                              <i class="fa fa-ban"></i>
                             <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                             <p><?php echo $error; ?></P>
                            </div>
                          <?php } ?>

                     <form action="" method="post">
                       <!-- Date dd/mm/yyyy -->
                       <div class="form-group">
                           <label>Facebook</label>
                           <div class="input-group">
                               <div class="input-group-addon">
                                   <i class="fa fa-facebook"></i>
                               </div>
                               <input type="text" name="facebook" class="form-control" value="<?php echo $facebook; ?>" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask/>
                           </div><!-- /.input group -->
                       </div><!-- /.form group -->

                       <!-- phone mask -->
                       <div class="form-group">
                           <label>Linkedin :</label>
                           <div class="input-group">
                               <div class="input-group-addon">
                                   <i class="fa fa-linkedin"></i>
                               </div>
                               <input type="text" name="linkedin" class="form-control" value="<?php echo $linkedin; ?>" data-inputmask='"mask": "(999) 999-9999"' data-mask/>
                           </div><!-- /.input group -->
                       </div><!-- /.form group -->

                       <!-- phone mask -->
                       <div class="form-group">
                           <label>Instagram :</label>
                           <div class="input-group">
                               <div class="input-group-addon">
                                   <i class="fa  fa-instagram"></i>
                               </div>
                               <input type="text" name="instagram" class="form-control" value="<?php echo $instagram; ?>" data-inputmask="'mask': ['999-999-9999 [x99999]', '+099 99 99 9999[9]-9999']" data-mask/>
                           </div><!-- /.input group -->
                       </div><!-- /.form group -->



                       <div class="pull-right">
                       <button class="btn btn-primary" name="submit">Submit</button> </div>
                       <div style="clear: both;"> </div>

                     </div><!-- /.box-body -->
                   </div><!-- /.box -->
</form>


     </section><!-- /.content -->
 </aside><!-- /.right-side -->
 <?php require_once "../resources/footer_admin.php"; ?>
