<?php require_once '../core/session.php';?>
<?php require_once '../database/db.php';?>
<?php require_once '../function/user.php';?>
<?php require_once '../function/blog.php';?>
<?php

$id = $_GET['delete'];
$db = edit_artikel($id);
$row = mysqli_fetch_array($db);
$_file = $row['gambar'];
$_file = '../asset/gambar/'.$_file;


$query = "SELECT * FROM komentar WHERE id_artikel='$id'";
$result=mysqli_query($link,$query);
//print_r($result);
  if(mysqli_num_rows ($result) < 1){

    if (isset($_GET['delete'])){

      if (!unlink($_file))
          {
            if(delete_artikel($id)){
            header ('Location:post.php');
          } else {echo "gagal kosong";}
          }else {
            if(delete_artikel($id)){
            header ('Location:post.php');
          } else {echo "gagal kosong";}
            }
          }else {echo 'gagal';}
  }//numrow

else {
  if (isset($_GET['delete'])){

    if (!unlink($_file))
        {
          if(delete_artikel_komentar($id)){
          header ('Location:post.php');
        } else {echo "gagal kosong";}
        }else {
          if(delete_artikel_komentar($id)){
          header ('Location:post.php');
        } else {echo "gagal kosong";}
          }
  // if(delete_artikel_komentar($_GET['delete'])){
  // header ('Location:post.php');
  // }else {echo "gagal menghapus";}
  }else {echo 'gagal';}
}//else







?>
