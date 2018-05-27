


<!-- Left side column. contains the logo and sidebar -->
<aside class="left-side sidebar-offcanvas">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo $siteurl;?>/gambar/avatar3.png" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p>Hello, Jane</p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
                <span class="input-group-btn">
                    <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="active">
                <a href="<?php echo $siteurl;?>/admin/admin.php">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>

            <li class="treeview">
                <a href="<?php echo $siteurl;?>/admin/post.php">
                    <i class="fa fa-file-text"></i> <span>Post</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo $siteurl;?>/admin/tulis.php"><i class="fa fa-pencil-square-o"></i> Tulis Artikel</a></li>
                    <li><a href="<?php echo $siteurl;?>/admin/post.php"><i class="fa fa-files-o"></i> Artikel</a></li>
                    <li><a href="<?php echo $siteurl;?>/admin/add_kategori.php"><i class="fa fa-bookmark"></i> Kategori</a></li>

                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa  fa-comment-o"></i> <span>Komentar</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo $siteurl;?>/admin/Komentar.php"><i class="fa fa-comments-o"></i> Komentar </a></li>
                    <li><a href="<?php echo $siteurl;?>/admin/spam.php"><i class="fa fa-exclamation-triangle"></i> Spam</a></li>
                </ul>
            </li>


            <li class="treeview">
                <a href="<?php echo $siteurl;?>/admin/portofolio_dokumen.php">
                    <i class="fa fa-folder"></i> <span>Portofolio</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo $siteurl;?>/admin/input_portofolio.php"><i class="fa fa-pencil-square-o"></i> Masukan Portofolio </a></li>
                    <li><a href="<?php echo $siteurl;?>/admin/portofolio_dokumen.php"><i class="fa  fa-archive"></i> Daftar Portofolio</a></li>
                    <li><a href="<?php echo $siteurl;?>/admin/kategori_portofolio.php"><i class="fa  fa-archive"></i> Daftar Kategori Portofolio</a></li>

                </ul>
            </li>


            <li class="treeview">
                <a href="<?php echo $siteurl;?>/admin/data_user.php">
                    <i class="fa fa-user"></i> <span>Profil</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo $siteurl;?>/admin/profil.php"><i class="fa  fa-male"></i> Profil </a></li>
                    <li><a href="<?php echo $siteurl;?>/admin/pekerjaan.php"><i class="fa  fa-briefcase"></i> Pekerjaan</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="<?php echo $siteurl;?>/admin/data_user.php">
                    <i class="fa fa-users"></i> <span>Admin</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo $siteurl;?>/admin/data_user.php"><i class="fa  fa-users"></i> Daftar Admin </a></li>
                    <li><a href="<?php echo $siteurl;?>/admin/register.php"><i class="fa  fa-plus-square-o"></i> Register</a></li>
                    <li><a href="#"><i class="fa  fa-wrench"></i> Atur Akun</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="">
                    <i class="fa fa-wrench"></i> <span>Pengaturan</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                  <li><a href="<?php echo $siteurl;?>/admin/Pengaturan.php"><i class="fa  fa-cog"></i> Pengaturan Halaman </a>
                    <li><a href="<?php echo $siteurl;?>/admin/sosmed.php"><i class="fa  fa-users"></i> Sosial Media </a>
                      <li><a href="<?php echo $siteurl;?>/admin/edit_sosmed.php"><i class="fa  fa-users"></i> Update Sosial Media </a>


                    </li>

                </ul>
            </li>

        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
