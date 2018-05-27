<?php

function result ($query) {
  global $link;
  if ($result = mysqli_query($link, $query) or die ('gagal menampilkan data')){
  return $result;
  }
}

function run($query) {
  global $link;
  if (mysqli_query ($link, $query)) return true;
  else return false;
  }

function multi($query) {
  global $link;
  if (mysqli_multi_query ($link, $query)) return true;
  else return false;
  }

function escape($data) {
  global $link ;
  return mysqli_real_escape_string($link, $data);
}

function tampilkan() {
  $query= "SELECT artikel.id_artikel, artikel.judul, artikel.isi, artikel.gambar, artikel.waktu, tags.judul_tag
           FROM artikel
           LEFt JOIN tags ON artikel.id_kategori = tags.id_tag
           ORDER BY id_artikel DESC";
  return result ($query);
}


function tampilkanx($page1) {
  $query= "SELECT artikel.id_artikel, artikel.judul, artikel.isi, artikel.gambar, artikel.waktu, tags.judul_tag
           FROM artikel
           LEFt JOIN tags ON artikel.id_kategori = tags.id_tag
           LIMIT $page1, 5";
  return result ($query);
}

function tambah_kategori($kategori) {
$query = "INSERT INTO tags (judul_tag) VALUES ('$kategori')";
return run($query);
}


function tampil_kategori_admin() {
  $query = "SELECT *  FROM tags ORDER BY id_tag DESC";
  return result ($query);
}


function tampil_kategori() {
  $query = "SELECT *  FROM tags ORDER BY id_tag DESC LIMIT 3";
  return result ($query);
}


function tampil_kategori2() {
  $query = "SELECT *  FROM tags ORDER BY id_tag DESC LIMIT 3 offset 3";
  return result ($query);
}


function tampil_kategori3() {
  $query = "SELECT *  FROM tags ORDER BY id_tag DESC LIMIT 3 offset 6";
  return result ($query);
}


function update_kategori($judul_kategori, $id) {
$query = "UPDATE tags SET judul_tag='$judul_kategori' WHERE id_tag=$id";
return run ($query);
}

function edit_kategori($id) {
$query = "SELECT * FROM tags WHERE id_tag=$id";
return result ($query);
}

function delete_kategori($id) {
  $query = "DELETE FROM tags WHERE id_tag=$id;";
  $query .= "SET @num :=0;";
  $query .= "UPDATE tags SET id_tag = @num := (@num+1);";
  $query .= "ALTER TABLE tags AUTO_INCREMENT =1";
  return multi($query);
}



function tambah_data ($judul, $konten, $namafile, $penulis, $kategori ) {
  $judul = escape($judul);
  $konten = escape($konten);
$query = "INSERT INTO artikel (judul, isi, gambar, penulis, id_kategori, hitung) VALUES ('$judul', '$konten', '$namafile', '$penulis', '$kategori', 0)";
//die($query);
return run ($query);
}


function tampil_pencarian($cari) {
$query =" SELECT artikel.id_artikel, artikel.judul, artikel.isi, artikel.gambar, artikel.waktu, tags.judul_tag
         FROM artikel
         LEFt JOIN tags ON artikel.id_kategori = tags.id_tag
         WHERE judul LIKE '%$cari%' OR isi LIKE '%$cari%'";

  //$query = "SELECT * FROM artikel WHERE judul LIKE '%$cari%' OR isi LIKE '%$cari%'";
  return result ($query);
}

function delete_artikel_komentar($id) {
  //$query = "DELETE FROM artikel WHERE id_artikel=$id";
  $query="DELETE komentar, artikel
          FROM komentar
          INNER JOIN artikel ON komentar.id_artikel = artikel.id_artikel
          WHERE artikel.id_artikel=$id;";
  $query .= "SET @num :=0;";
  $query .= "UPDATE artikel SET id_artikel = @num := (@num+1);";
  $query .= "ALTER TABLE artikel AUTO_INCREMENT=1";
  return multi($query);
}

function delete_artikel($id) {
  $query = "DELETE FROM artikel WHERE id_artikel=$id;";
  $query .= "SET @num :=0;";
  $query .= "UPDATE artikel SET id_artikel = @num := (@num+1);";
  $query .= "ALTER TABLE artikel AUTO_INCREMENT=1";
  return multi($query);
}


function edit_artikel($id) {
$query = "SELECT * FROM artikel WHERE id_artikel=$id";
return result ($query);
}

function artikel_id($judul, $konten, $kategori, $penulis, $_id) {
$query = "UPDATE artikel SET judul='$judul', isi='$konten', penulis='$penulis',  id_kategori='$kategori' WHERE id_artikel=$_id";
return run ($query);
}

function edit($judul, $konten, $namafile, $penulis, $kategori, $id) {
$query = "UPDATE artikel SET judul='$judul', isi='$konten', gambar='$namafile',  penulis='$penulis',  id_kategori='$kategori' WHERE id_artikel=$id";
//die($query);
return run ($query);
}


function tampilkan_per_id($id) {
  $query= "SELECT artikel.id_artikel, artikel.judul, artikel.isi, artikel.gambar, artikel.waktu, artikel.penulis, tags.judul_tag
           FROM artikel
           LEFt JOIN tags ON artikel.id_kategori = tags.id_tag
           WHERE id_artikel=$id";
           return result ($query);

}


function komentar  ($nama, $email, $komentar, $id_artikel){
  $query = "INSERT INTO komentar (nama_user, email_user, komentar, id_artikel) VALUES ('$nama', '$email', '$komentar', '$id_artikel')";
  //die($query);
  return run ($query);
}

function tampil_komentar($id) {
  $query= "SELECT * FROM komentar  WHERE id_artikel=$id ORDER BY id_komentar DESC"  ;
  return result ($query);
}


function tampil_koment() {
  //$query= "SELECT * FROM komentar ORDER by id_komentar ASC"  ;
  $query= "SELECT komentar.id_komentar, komentar.komentar, komentar.nama_user, artikel.judul
           FROM komentar
           LEFt JOIN artikel ON komentar.id_artikel = artikel.id_artikel;";
  return result ($query);
}


function delete_komentar($id) {
  $query = "DELETE FROM komentar WHERE id_komentar=$id;";
  $query .= "SET @num :=0;";
  $query .= "UPDATE komentar SET id_komentar = @num := (@num+1);";
  $query .= "ALTER TABLE komentar AUTO_INCREMENT =1";
  return multi($query);
}


function tampil_pencarian_tag($id) {
$query =" SELECT artikel.id_artikel, artikel.judul, artikel.isi, artikel.gambar, artikel.waktu, tags.judul_tag
         FROM artikel
         LEFt JOIN tags ON artikel.id_kategori = tags.id_tag
         WHERE id_kategori=$id";
  //$query = "SELECT * FROM artikel WHERE judul LIKE '%$cari%' OR isi LIKE '%$cari%'";
  return result ($query);
}

function excerpt ($string) {
  $string = substr($string, 0, 142);
  return $string .'...';
}

function excerpt_judul ($string) {
  $string = substr($string, 0, 32);
  return $string .'...';
}

function excerpt_popular ($string) {
  $string = substr($string, 0, 15);
  return $string;
}

function hitung($id) {
$query="UPDATE artikel SET hitung = hitung + 1 WHERE id_artikel = $id";
return run ($query);

}

function popular_artikel($koko) {
$query ="SELECT * FROM `artikel` ORDER BY hitung DESC LIMIT $koko";
return result ($query);
}





?>
