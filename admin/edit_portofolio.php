<?php require_once "../core/admin_init_oop.php"; ?>

<?php
$link= "http://localhost/co/admin/edit_portofolio.php?edit";

  //portofolio
$list_kategori = $port->list_kategori();
$portofolio = $port->get_edit_portofolio($_GET['edit']);
$ids= $_GET['edit'];

if (input::get('edit')) {

foreach ($portofolio as $porto):
$id = $porto['id_portofolio'];
$judul=$porto['judul_port'];
$deskripsi = $porto['deskripsi'];
$kategori=$porto['kategori'];

endforeach;

}

if (input::get('submit')) {
  $validasi = new validasi();

  $validasi = $validasi->cek(array(
  'judul' => array(
              'required' =>'true'
  ),
  'deskripsi' => array(
              'required' =>'true'
  )
  ));

  if ($validasi->passed())
  {
    $file = new upload();
    if (!empty($_FILES ['file'] ['name'])){
    if  (isset($_FILES['file'])){
      $file->uploadfile($_FILES['file']);
    }else {
      echo "gambar tidak di submit";
    }

   $gambar =$file->koko();
   $port->edit_portofolio(array(
  'judul_port'      => input::get('judul'),
  'gambar'     => $gambar,
  'kategori'   => input::get('pilih_kategori'),
  'deskripsi'  => input::get('deskripsi')), $id);
  redirect::to('portofolio_dokumen');
}else {
  $port->edit_portofolio1(array(
 'judul_port' => input::get('judul'),
 'kategori'   => input::get('pilih_kategori'),
 'deskripsi'  => input::get('deskripsi')), $id);
 redirect::to('portofolio_dokumen');
}



  }else {
    echo "error";
    $errors = $validasi->errors();
  }
}


if (input::get('submit2')) {
$validasi = new validasi();

$validasi = $validasi->cek(array(
'kategori' => array(
            'required' =>'true'
)
));

if ($validasi->passed())
{
$port->input_kategori(array(
'judul'  => input::get('kategori')
));
}else {
  $error = $validasi->errors();
}
}



?>
 <?php  require_once "../resources/header_admin.php"; ?>




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
                                                   <h3 class="box-title">Portofolio</h3>
                                               </div><!-- /.box-header -->
                                               <!-- form start -->
                                               <form role="form" target="" method="post" enctype="multipart/form-data">
                                                   <div class="box-body">
                                                       <div class="form-group">
                                                           <label for="exampleInputEmail1">Judul</label>
                                                           <input type="text" name="judul" class="form-control" id="exampleInputEmail1" value="<?php echo $judul; ?>">
                                                       </div>
                                                       <div class="form-group">
                                                 <label>Deskripsi</label>
                                                 <textarea class="form-control" name="deskripsi" rows="3" ><?php echo $deskripsi; ?></textarea>
                                               </div>
                                               <div class="form-group">
                                         <label>Kategori Portofolio</label>
                                         <select class="form-control" name="pilih_kategori">

                                           <?php foreach ($list_kategori as $list): ?>
                                             <option value="<?php echo $list ['id_kategori']?>" <?php if ($kategori==$list['id_kategori']){ echo 'selected="selected"';}?>> <?php echo $list ['judul']; ?></option>
                                           <?php endforeach; ?>
                                         </select>
                                     </div>

                                     <div class="form-group">
                                         <label for="exampleInputFile">Input Photo</label>
                                         <input type="file" name="file" id="exampleInputFile">
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
                                                   <h3 class="box-title">Kategori Portofolio</h3>
                                               </div><!-- /.box-header -->
                                               <!-- form start -->
                                               <form role="form" target="" method="post">
                                                   <div class="box-body">
                                                       <div class="form-group">
                                                           <label for="exampleInputEmail1">Masukn Jenis Kategori</label>
                                                           <input type="text" name="kategori" class="form-control" id="exampleInputEmail1" placeholder="Masukan Jenis Kategori">
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




 <?php require_once "../resources/footer_admin.php"; ?>
