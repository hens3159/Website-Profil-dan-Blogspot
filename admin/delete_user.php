<?php require_once '../core/session.php';?>
<?php require_once '../database/db.php';?>
<?php require_once '../function/user.php';?>
<?php require_once '../function/blog.php';?>

<?php
if (isset($_GET['delete'])){
if(delete_user($_GET['delete'])){
header ('Location:data_user.php');
}else {echo "gagal menghapus";}
}else {echo 'gagal';}

?>
