<?php

//load semua kelas
spl_autoload_register(function($class) {
  require_once 'classes/'.$class. '.php';
});


$slide = new pengaturan();
$users = new user();
$port = new portofolio();
$blog = new blog();

 ?>
