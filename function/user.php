<?php require_once 'blog.php';?>

<?php
//menampilkan admin
function tampil_admin() {
  $query= "SELECT * FROM level_admin ORDER BY jenis_admin DESC";
  return result ($query);
}
//mengecek duplikasi di datbase pada saat register akun admin
function register_duplikat($username, $email) {
  $query = "SELECT * FROM user WHERE username='$username' OR email='$email'";
  return result ($query);
}
//mengecek duplikasi di database pada saat update data admin di database
function update_duplikat($email) {
  $query = "SELECT * FROM user WHERE email='$email'";
  return result ($query);
}
//tambah password + enkripsi password dengan password_hash
function tambah_admin($nama, $username, $password, $email, $admin) {
  $password=password_hash($password, PASSWORD_BCRYPT);
  $query="INSERT INTO user (nama, username, password, email, status) VALUES ('$nama', '$username', '$password', '$email', '$admin')";
  return run ($query);
}
//untuk memunculkan password pada saat akan login
function cek_data ($nama, $password) {
  global $link;
  $nama = escape($nama);
  $password = escape($password);
  $query = "SELECT password FROM user WHERE username='$nama'";

  if ($result=mysqli_query($link,$query)) {
    $row= mysqli_fetch_assoc($result);
    $ina= $row['password'];
    $ina=password_verify($password, $ina);
    if ($ina){
          if(mysqli_num_rows ($result)!=0) return true ;
          else return false; }  } else {
    echo"anda gagal";
  }
}

//menampikan user
function tampil_user() {
  $query= "SELECT * FROM user ORDER BY id_user DESC ";
  return result ($query);
}
//delete user
function delete_user($id) {
  $query = "DELETE FROM user WHERE id_user=$id;";
  $query .= "SET @num :=0;";
  $query .= "UPDATE user SET id_user = @num := (@num+1);";
  $query .= "ALTER TABLE user AUTO_INCREMENT =1";
  return multi($query);
}

//edit user
function edit_user($id) {
$query = "SELECT * FROM user WHERE id_user=$id";
return result ($query);
}

//update data user
function update_admin($nama, $email, $admin, $id) {
  $nama = escape ($nama);
  $email = escape ($email);
  $query="UPDATE user SET  nama='$nama', email='$email', status=$admin  WHERE id_user=$id";
  return run ($query);
}

//update data admin
function update_admin3($password_baru2, $id) {
  $password_baru2 = escape ($password_baru2);
  $password_baru2=password_hash($password_baru2, PASSWORD_BCRYPT);
  $query="UPDATE user SET password='$password_baru2' WHERE id_user=$id";
  return run ($query);
}







?>
