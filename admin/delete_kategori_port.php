<?php  require_once '../core/admin_init_oop.php';?>

<?php

if (input::get('delete')){
    if ($port->delete_kategori($_GET['delete']))
    {              //echo "koko";
     Redirect::to('kategori_portofolio');
    } else {echo "gagal menghapus";}



}else {echo 'gagal';}

?>
