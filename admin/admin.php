<?php require_once "../resources/header_admin.php"; ?>

<?php
$id = $_SESSION["user"];

?>


<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Selamat Datang <?php echo $_SESSION["user"]; ?></h1>

    </section><!-- /.content -->
</aside><!-- /.right-side -->

<?php require_once "../resources/footer_admin.php"; ?>
