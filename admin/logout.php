<?php require_once '../core/session.php';?>

<?php
unset ($_SESSION ['user']);
session_destroy();

header("location: login.php");
?>
