<?php require_once '../core/session.php';?>
<?php require_once '../database/db.php';?>
<?php require_once '../function/user.php';?>
<?php require_once '../function/blog.php';?>

<?php
if (isset($_GET['delete'])){
if(delete_kategori($_GET['delete'])){
header ('Location:add_kategori.php');
}else {echo "gagal menghapus";}
}else {echo 'gagal';}

?>
