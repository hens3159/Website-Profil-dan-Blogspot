<?php require_once "../resources/header_admin.php"; ?>

<?php
$user=tampil_user();
$tampil_admin=tampil_admin();
$sukses="";
$error = "";
$id = $_GET['edit'];


//mwnampilkan data perid
if (isset($_GET['edit'])) {
//show_id
$article = edit_user($id);
//untuk mengambil data dari database lalu memunculkan pada form
while ($row= mysqli_fetch_assoc ($article)) {
  $nama_admin=$row['nama'];
  $email=$row['email'];
  $username=$row['username'];
  $password=$row['password'];
 }
}

//menyimpan data kedalam database
if  (isset ($_POST ['submit'])) {
//metode formulir yaitu POST
$nama= $_POST['nama'];
$username=$_POST['username'];
$password=$_POST['password'];
$password_baru=$_POST['password_baru'];
$password_baru2=$_POST['ulangi_password'];
$email=$_POST['email'];
$admin=$_POST['admin'];


//!!!!!!!!!!!!!!!!!!!!!!!!!!!!
//metode merubah password_verify
//memilih password untuk dicocokan menggunakan id
$query = "SELECT password FROM user WHERE id_user='$id'";
$result=mysqli_query($link,$query);
$raw= mysqli_fetch_assoc ($result);
$ina= $raw['password'];
$ina=password_verify($password, $ina);
print_r($ina);
//$ina='$2y$10$y2y1.h2Rx84iEijA2NBXd.IVXsM2iWizpqwzDuibEt7RWxUKMlmsC';

//untuk mengecek pada kolom password kosong/ada isinya
if (!empty(trim($password_baru2)))  {
//eksekusi metode merubah password_verify
if ($ina){
  if ($password_baru==$password_baru2) {
        if (update_admin3($password_baru2, $id)) {
       //echo "<meta http-equiv='refresh' content='0'; url=''>";
        $ukses="password telah diganti";
        }else {
                $error= 'password tidak dapat diganti';
              }
      //}
    }else {$error="input password pada kolom password baru berbeda";}


} else { $error="password salah masukan password yang benar";}

} //akhir dari trim password
//trim dari nama dan email
elseif  (!empty(trim($nama)) && !empty(trim($email))) {
   if (update_admin($nama, $email, $admin, $id)) {
   echo 'Data telah diubah';
  // echo "<meta http-equiv='refresh' content='0'; url=''>";
    }else {echo 'Data tidak dapat dimasukan ke dalam database';}
}else {echo "tolong data tidak dikosongkan";}//if raw
}//isset



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

                     <form action="" method="post">

                       <?php
                         $row= mysqli_fetch_assoc($user);


                       ?>



                       <!-- Date dd/mm/yyyy -->
                       <div class="form-group">
                           <label>Nama Lengkap:</label>
                           <div class="input-group">
                               <div class="input-group-addon">
                                   <i class="fa fa-user"></i>
                               </div>
                               <input type="text" name="nama" class="form-control" value="<?php echo $nama_admin?>" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask/>
                           </div><!-- /.input group -->
                       </div><!-- /.form group -->
                       <!-- phone mask -->
                       <div class="form-group">
                           <label>Username :</label>
                           <div class="input-group">
                               <div class="input-group-addon">
                                   <i class="fa fa-users"></i>
                               </div>
                               <input type="text" name="username" class="form-control" value="<?php echo $username  ?>" data-inputmask='"mask": "(999) 999-9999"' data-mask/>
                           </div><!-- /.input group -->
                       </div><!-- /.form group -->

                       <!-- phone mask -->
                       <div class="form-group">
                           <label>Email:</label>
                           <div class="input-group">
                               <div class="input-group-addon">
                                   <i class="fa  fa-file-o"></i>
                               </div>
                               <input type="email" name="email" class="form-control" value="<?php echo $email  ?>" data-inputmask="'mask': ['999-999-9999 [x99999]', '+099 99 99 9999[9]-9999']" data-mask/>
                           </div><!-- /.input group -->
                       </div><!-- /.form group -->

                       <!-- IP mask -->
                       <div class="form-group">
                           <label>Password :</label>
                           <div class="input-group">
                               <div class="input-group-addon">
                                   <i class="fa fa-unlock-alt"></i>
                               </div>
                               <input type="password" name="password" value="" class="form-control" data-inputmask="'alias': 'ip'" data-mask/>
                           </div><!-- /.input group -->
                       </div><!-- /.form group -->

                       <div class="form-group">
                           <label>Password Baru :</label>
                           <div class="input-group">
                               <div class="input-group-addon">
                                   <i class="fa fa-unlock-alt"></i>
                               </div>
                               <input type="password" name="password_baru" value="" class="form-control" data-inputmask="'alias': 'ip'" data-mask/>
                           </div><!-- /.input group -->
                       </div><!-- /.form group -->

                       <div class="form-group">
                           <label>Ulangi Password Baru :</label>
                           <div class="input-group">
                               <div class="input-group-addon">
                                   <i class="fa fa-unlock-alt"></i>
                               </div>
                               <input type="password" name="ulangi_password" value="" class="form-control" data-inputmask="'alias': 'ip'" data-mask/>
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
