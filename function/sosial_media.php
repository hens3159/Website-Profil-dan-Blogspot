<?php require_once 'blog.php';?>

<?php
//menampilkan sosial media
function tampil_sosmed() {
  $query= "SELECT * FROM sosial_media WHERE id_sosmed=1";
  return result ($query);
}

//menambahkan link sosial media
function tambah_sosmed($facebook, $linkedin, $instagram) {
  $query="INSERT INTO sosial_media (facebook, linkedin, instagram ) VALUES ('$facebook', '$linkedin', '$instagram')";
  return run ($query);

}

function update_sosmed($facebook, $linkedin ,$instagram) {
$query = "UPDATE sosial_media SET facebook='$facebook', linkedin='$linkedin', instagram='$instagram' WHERE id_sosmed=1";
return run ($query);
}
//UPDATE `sosial_media` SET facebook = 'a', linkedin = 'b', instagram='c' WHERE `sosial_media`.`id_sosmed` = 2;
?>
