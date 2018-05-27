<?php  require_once '../core/admin_init_oop.php';?>

<?php
$portofolio=$port->get_edit_portofolio($_GET['delete']);
Foreach ($portofolio as $porto):
$gambar = $porto['gambar'];
endforeach;

$file = "../asset/image/".$gambar;

if (input::get('delete')){
    if (!unlink($file))
        {

          if ($port->delete($_GET['delete']))
          {
            //echo "koko";
            Redirect::to('portofolio_dokumen');
          } else {echo "gagal menghapus";}

        }
      else
        {
          if ($port->delete($_GET['delete']))
          {
            //echo "koko";
            Redirect::to('portofolio_dokumen');
          } else {echo "gagal menghapus";}

        }

}else {echo 'gagal';}

?>
