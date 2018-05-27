<?php require_once "../resources/header_admin.php"; ?>

<?php



$id = $_SESSION["user"];
$query= "SELECT user.nama, user.username, user.email, level_admin.jenis_admin
         FROM user
         LEFt JOIN level_admin ON user.status = level_admin.id
         WHERE nama='$nama'";
$result=mysqli_query($link,$query);
$row= mysqli_fetch_assoc($result);
$nama= $row['nama'];
$username = $row ['username'];
$email = $row ['email'];
$status = $row ['jenis_admin'];

?>


<aside class="right-side">

  <section class="content invoice">
                      <!-- title row -->
                      <div class="row">
                          <div class="col-xs-12">
                              <h2 class="page-header">
                                  <i class="fa fa-user"></i> Your Profil
s                              </h2>
                          </div><!-- /.col -->
                      </div>
                      <!-- info row -->
                      <div class="row invoice-info">
                          <div class="col-sm-12 invoice-col">
                            <div class="table-responsive">
                                <table class="table">
                                    <tbody><tr>
                                        <th style="width:50%">nama:</th>
                                        <td><?php echo $nama;?></td>
                                    </tr>
                                    <tr>
                                        <th>username</th>
                                        <td><?php echo $username?></td>
                                    </tr>
                                    <tr>
                                        <th>email:</th>
                                        <td><?php echo $email?></td>
                                    </tr>
                                    <tr>
                                        <th>status:</th>
                                        <td><?php echo $status?></td>
                                    </tr>
                                </tbody></table>
                            </div>

                          </div>
                      </div>
                  </section>


</aside><!-- /.right-side -->

<?php require_once "../resources/footer_admin.php"; ?>
