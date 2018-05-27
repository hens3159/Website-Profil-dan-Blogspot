<?php require_once "../resources/header_admin.php"; ?>

<?php

$error="";
$sukses="";
$duplikasi ="";

$tampil_admin=tampil_admin();
$sukses="";
$error = "";
if  (isset ($_POST ['submit'])) {
$nama=$_POST['nama'];
$username=$_POST['username'];
$password=$_POST['password'];
$email=$_POST['email'];
$admin=$_POST['admin'];

$register_duplikat = register_duplikat($username, $email);
$row= mysqli_num_rows($register_duplikat);
if ($row>=1) {
  $duplikasi="username sudah ada atau email sudah terdaftar";


}else {

  if (tambah_admin($nama, $username, $password, $email, $admin)) {
   $sukses='file telah ditambahkan';

    }else {
      $error ='File tidak dapat dimasukan ke dalam database';
          }
  }
}


?>



 <aside class="right-side">
     <!-- Content Header (Page header) -->
     <section class="content-header">
         <h1>
             User
             <small>Register</small>
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
                       <h3 class="box-title">Silahkan Daftar</h3>
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



                                                       <?php if($duplikasi){ ?>
                                                         <div class="alert alert-danger
                                                          alert-dismissable">
                                                         <i class="fa fa-ban"></i>
                                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                                        <p><?php echo $duplikasi; ?></P>
                                                       </div>
                                                     <?php } ?>





                     <form action="" method="post">
                       <!-- Date dd/mm/yyyy -->
                       <div class="form-group">
                           <label>Nama Lengkap:</label>
                           <div class="input-group">
                               <div class="input-group-addon">
                                   <i class="fa fa-user"></i>
                               </div>
                               <input type="text" name="nama" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask/>
                           </div><!-- /.input group -->
                       </div><!-- /.form group -->

                       <!-- phone mask -->
                       <div class="form-group">
                           <label>Username :</label>
                           <div class="input-group">
                               <div class="input-group-addon">
                                   <i class="fa fa-users"></i>
                               </div>
                               <input type="text" name="username" class="form-control" data-inputmask='"mask": "(999) 999-9999"' data-mask/>
                           </div><!-- /.input group -->
                       </div><!-- /.form group -->

                       <!-- phone mask -->
                       <div class="form-group">
                           <label>Email :</label>
                           <div class="input-group">
                               <div class="input-group-addon">
                                   <i class="fa  fa-file-o"></i>
                               </div>
                               <input type="email" name="email" class="form-control" data-inputmask="'mask': ['999-999-9999 [x99999]', '+099 99 99 9999[9]-9999']" data-mask/>
                           </div><!-- /.input group -->
                       </div><!-- /.form group -->

                       <!-- IP mask -->
                       <div class="form-group">
                           <label>Password :</label>
                           <div class="input-group">
                               <div class="input-group-addon">
                                   <i class="fa fa-unlock-alt"></i>
                               </div>
                               <input type="password" name="password" class="form-control" data-inputmask="'alias': 'ip'" data-mask/>
                           </div><!-- /.input group -->
                       </div><!-- /.form group -->


                       <div class="form-group">
                           <label>Level Admin :</label>
                           <div class="input-group">
                               <div class="input-group-addon">
                                   <i class="fa fa-unlock-alt"></i>
                               </div>
                               <select class="form-control" name="admin">
                                 <?php while ($row= mysqli_fetch_assoc ($tampil_admin)):?>
                                   <option value="<?php echo $row ['id'] ?>">  <?php echo $row ['jenis_admin'];
                                   ?></option>
                                 <?php endwhile ?>

                               </select>                           </div><!-- /.input group -->
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
