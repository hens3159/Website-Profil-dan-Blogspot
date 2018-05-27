<?php

//load semua kelas
spl_autoload_register(function($class) {
  require_once '../classes/'.$class. '.php';
});

$pengaturan = new pengaturan();
$user = new user();
$port = new portofolio();

 ?>
