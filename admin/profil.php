<?php  require_once '../core/admin_init_oop.php';?>

<?php


if (input::get('submit')) {

  $validasi = new validasi();

  $validasi = $validasi->cek(array(
  'nama' => array(
              'required' =>'true'
  ),
  'keahlian' => array(
              'required' =>'true'
  ),
  'tentang_saya' => array(
              'required' =>'true'
  ),
  'kontak' => array(
              'required' =>'true'
  )

  ));

  if ($validasi->passed())
  {
    $file = new upload();
    if  (isset($_FILES['gambar'])){
      $file->uploadfile($_FILES['gambar']);
    }else {
      echo "gam tidak di submit";
    }
    $gambar =$file->koko();
    $user->input_profil(array(
     'nama'        => input::get('nama'),
     'foto'        => $gambar,
    'keahlian'    => input::get('keahlian'),
     'tentang_saya' => input::get('tentang_saya'),
     'kontak'      => input::get('kontak')

     ));
   } else {
    $errors = $validasi->errors();
  }

}



// if (input::get('submit')) {

//   $user->input_profil(array(
//   'SMA'        => input::get('SMA'),
//   'S1'         => input::get('S1'),
//   'jurusan_S1' => input::get('jurusan_S1'),
//   'S2'         => input::get('S2'),
//   'jurusan_S2' => input::get('jurusan_S2')
//   'foto'       =>
//   ));
// }else {
//   $errors = $validasi->errors();
// }
// }



if (input::get('submit2')) {
$validasi = new validasi();

$validasi = $validasi->cek(array(
'SMA' => array(
            'required' =>'true'
),
'S1' => array(
            'required' =>'true'
),
'jurusan_S1' => array(
            'required' =>'true'
),
'S2' => array(
            'required' =>'true'
),
'jurusan_S2' => array(
            'required' =>'true'
)

));

if ($validasi->passed())
{
  $user->input_pendidikan(array(
  'SMA'        => input::get('SMA'),
  'S1'         => input::get('S1'),
  'jurusan_S1' => input::get('jurusan_S1'),
  'S2'         => input::get('S2'),
  'jurusan_S2' => input::get('jurusan_S2')
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
             Biodata
             <small>Profil</small>
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
                                                   <h3 class="box-title">Profil</h3>
                                               </div><!-- /.box-header -->
                                               <!-- form start -->
                                               <form role="form" target="" method="post" enctype="multipart/form-data">
                                                   <div class="box-body">
                                                       <div class="form-group">
                                                           <label for="exampleInputEmail1">Nama Lengkap</label>
                                                           <input type="text" name="nama" class="form-control" id="exampleInputEmail1" placeholder="Nama Lengkap">
                                                       </div>
                                                       <div class="form-group">
                                                           <label for="exampleInputEmail1">Ringkasan Keahlian</label>
                                                           <input type="text" name="keahlian" class="form-control" id="exampleInputEmail1" placeholder="Ringkasan Keahlian">
                                                       </div>
                                                       <div class="form-group">
                                                 <label>Tentang Saya</label>
                                                 <textarea class="form-control" name="tentang_saya"  rows="3" placeholder="Tentang Saya ..."></textarea>
                                               </div>


                                                       <div class="form-group">
                                                           <label for="exampleInputEmail1">Kontak</label>
                                                           <input type="text" name="kontak" class="form-control" id="exampleInputEmail1" placeholder="Kontak">
                                                       </div>
                                                       <div class="form-group">
                                                           <label for="exampleInputFile">Input Photo</label>
                                                           <input type="file"  name="gambar"  id="exampleInputFile">
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
                                                   <h3 class="box-title">Pendidikan</h3>
                                               </div><!-- /.box-header -->
                                               <!-- form start -->
                                               <form role="form" target="" method="post">
                                                   <div class="box-body">
                                                       <div class="form-group">
                                                           <label for="exampleInputEmail1">SMA</label>
                                                           <input type="text" name="SMA"class="form-control" id="exampleInputEmail1" placeholder="Masukan SMA">
                                                       </div>
                                                       <div class="form-group">
                                                           <label for="exampleInputEmail1">Universitas S1</label>
                                                           <input type="text" name="S1" class="form-control" id="exampleInputEmail1" placeholder="Masukan Universitas S1">
                                                       </div>

                                                       <div class="form-group">
                                                           <label for="exampleInputEmail1">Jurusan S1</label>
                                                           <input type="text" name="jurusan_S1" class="form-control" id="exampleInputEmail1" placeholder="Masukan Jurusan S1">
                                                       </div>


                                                       <div class="form-group">
                                                           <label for="exampleInputEmail1">Universitas S2</label>
                                                           <input type="text" name="S2" class="form-control" id="exampleInputEmail1" placeholder="Masukan Universitas S2">
                                                       </div>

                                                       <div class="form-group">
                                                           <label for="exampleInputEmail1">Jurusan S2</label>
                                                           <input type="text" name="jurusan_S2" class="form-control" id="exampleInputEmail1" placeholder="Masukan Jurusan S2">
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
