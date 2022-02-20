<?php
session_start();
if (!isset($_SESSION['admin'])) 
{
    echo "<script>location='index.php'</script>";
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>SPP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta content="Admin Dashboard" name="description" />
    <meta content="ThemeDesign" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">

</head>

<body>

    <div class="header-bg">
        <!-- Navigation Bar-->
        <header id="topnav">
            <div class="topbar-main">
                <div class="container-fluid">

                    <!-- Logo-->
                    <div>
                        <a href="admin.php" class="logo">
                           <img src="logo.png" class="logo-lg" alt="" height="70">
                           <img src="assets/images/logo-sm.png" class="logo-sm" alt="" height="28">
                       </a>
                   </div>
                   <!-- End Logo-->

                   <div class="menu-extras topbar-custom navbar p-0">


                    <ul class="mb-0 nav navbar-right ml-auto list-inline">


                        <li class="list-inline-item notification-list d-none d-sm-inline-block">
                            <a href="#" id="btn-fullscreen" class="waves-effect waves-light notification-icon-box"><i class="fas fa-expand"></i></a>
                        </li>
                        <li class="dropdown">
                            <a href="" class="dropdown-toggle profile waves-effect waves-light" data-toggle="dropdown" aria-expanded="true">
                                <img src="assets/images/users/avatar-1.jpg" alt="user-img" class="rounded-circle">
                                <span class="profile-username">
                                    <?php echo $_SESSION['fullname']?> <span class="mdi mdi-chevron-down font-15"></span>
                                </span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="admin.php?halaman=profil" class="dropdown-item"> Profile</a></li>
                                <li><a href="admin.php?halaman=ganti_pw" class="dropdown-item"><span class="badge badge-success float-right"></span> Ganti Password </a></li>

                                <li><a href="logout.php" class="dropdown-item"> Logout</a></li>
                            </ul>
                        </li>

                        <li class="menu-item dropdown notification-list list-inline-item">
                            <!-- Mobile menu toggle-->
                            <a class="navbar-toggle nav-link">
                                <div class="lines">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </a>
                            <!-- End mobile menu toggle-->
                        </li>

                    </ul>

                </div>
                <!-- end menu-extras -->

                <div class="clearfix"></div>

            </div>
            <!-- end container -->
        </div>
        <!-- end topbar-main -->

        <!-- MENU Start -->
        <div class="navbar-custom">
            <div class="container-fluid">

                <div id="navigation">

                    <!-- Navigation Menu-->
                    <ul class="navigation-menu">

                        <li class="has-submenu">
                            <a href="admin.php"><i class="ti-home"></i> Halaman Utama</a>
                        </li>
                        <li class="has-submenu">
                            <a href="admin.php?halaman=pembayaran"><i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-wallet2" viewBox="0 0 16 16">
                              <path d="M12.136.326A1.5 1.5 0 0 1 14 1.78V3h.5A1.5 1.5 0 0 1 16 4.5v9a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 13.5v-9a1.5 1.5 0 0 1 1.432-1.499L12.136.326zM5.562 3H13V1.78a.5.5 0 0 0-.621-.484L5.562 3zM1.5 4a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-13z"/>
                          </svg></i> Pembayaran</a>
                      </li>

                      <li class="has-submenu">
                        <a href="#"><i class="ti-briefcase"></i> Laporan <i class="mdi mdi-chevron-down mdi-drop"></i></a>
                        <ul class="submenu megamenu">
                            <li>
                                <ul>
                                    <li><a href="admin.php?halaman=rekap">Rekap</a></li>
                                    <li><a href="admin.php?halaman=cetak_tagihan">Cetak </a></li>
                                    
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li class="has-submenu">
                        <a href="#"><i class="ti-harddrives"></i> Data<i class="mdi mdi-chevron-down mdi-drop"></i></a>
                        <ul class="submenu">
                            <li>
                                <ul>
                                    <li><a href="admin.php?halaman=jurusan">Jurusan</a></li>
                                    <li><a href="admin.php?halaman=siswa">Siswa </a></li>
                                    <li><a href="admin.php?halaman=kelas">Kelas </a></li>

                                    

                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="has-submenu">
                        <a href="#"><i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16">
                          <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"/>
                          <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"/>
                      </svg></i> Pengaturan <i class="mdi mdi-chevron-down mdi-drop"></i></a>
                      <ul class="submenu">
                        <li>
                            <ul>
                                <?php
                                if ($_SESSION['admin']=='1') 
                                    {?>
                                        <li><a href="admin.php?halaman=jenis">Jenis Bayar</a></li>
                                        <li><a href="admin.php?halaman=user">User</a></li>
                                        <li><a href="admin.php?halaman=tapel">Tahun Pelajaran</a></li>
                                    <?php }?>

                                </ul>
                            </li>
                        </ul>
                    </li>





                </ul>
                <!-- End navigation menu -->
            </div>
            <!-- end #navigation -->
        </div>
        <!-- end container -->
    </div>
    <!-- end navbar-custom -->
</header>
<!-- End Navigation Bar-->

</div>
<!-- header-bg -->

<div class="wrapper">
    <div class="container-fluid">
        <div style="margin-top: 40px"> 




         <?php


         if (isset($_GET['halaman'])) 
         {
            if ($_GET['halaman']=='pembayaran') 
            {
                include 'pembayaran.php';
            }
            elseif ($_GET['halaman']=='cetak') 
            {
                include 'cetak.php';
            }
            elseif ($_GET['halaman']=='cetak_bulan') 
            {
                include 'cetak_bulan.php';
            }
            elseif ($_GET['halaman']=='rekap') 
            {
                include 'rekap.php';
            }
            elseif ($_GET['halaman']=='cetak_tagihan') 
            {
                include 'cetak_tagihan.php';
            }
            elseif ($_GET['halaman']=='jurusan') 
            {
                include 'jurusan.php';
            }
            elseif ($_GET['halaman']=='kelas') 
            {
                include 'kelas.php';
            }
            elseif ($_GET['halaman']=='edit_jurusan') 
            {
                include 'edit_jurusan.php';
            }
            elseif ($_GET['halaman']=='hapus_jurusan') 
            {
               include 'hapus_jurusan.php';
           }
           elseif ($_GET['halaman']=='siswa') 
           {
            include 'siswa.php';
        }
        elseif ($_GET['halaman']=='edit_siswa') 
        {
            include 'siswa_edit.php';
        }
        elseif ($_GET['halaman']=='siswa_hapus') 
        {
            include 'siswa_hapus.php';
        }
        elseif ($_GET['halaman']=='tambah_kelas') 
        {
            include 'tambah_kelas.php';
        }
        elseif ($_GET['halaman']=='hapus_kelas') 
        {
            include 'hapus_kelas.php';
        }
        elseif ($_GET['halaman']=='jenis') 
        {
            include 'jenis.php';
        }
        elseif ($_GET['halaman']=='jenis_edit') 
        {
            include 'jenis_edit.php';
        }
        elseif ($_GET['halaman']=='user') 
        {
            include 'user.php';
        }
        elseif ($_GET['halaman']=='hapus_jenis') 
        {
            include 'hapus_jenis.php';
        }
        elseif ($_GET['halaman']=='user') 
        {
            include 'user.php';
        }
        elseif ($_GET['halaman']=='profil') 
        {
            include 'profil.php';
        }
        elseif ($_GET['halaman']=='tambah_user') 
        {
         include 'tambah_user.php';
     }
     elseif ($_GET['halaman']=='edit_user') 
     {
         include 'edit_user.php';
     }
     elseif ($_GET['halaman']=='hapus_user') 
     {
         include 'hapus_user.php';
     }
     elseif ($_GET['halaman']=='profil') 
     {
         include 'profil.php';
     }
     elseif ($_GET['halaman']=='ganti_pw') 
     {
         include 'ganti_pw.php';
     }
     elseif ($_GET['halaman']=='tapel') 
     {
       include 'tapel.php';
   }
   elseif ($_GET['halaman']=='tapel_tambah') 
   {
       include 'tapel_tambah.php';
   }
   elseif ($_GET['halaman']=='tapel_edit') 
   {
       include 'tapel_edit.php';
   }
   elseif ($_GET['halaman']=='tapel_hapus') 
   {
       include 'tapel_hapus.php';
   }



}
else
    {?>
        <div class="jumbotron">
            <h2 align="center">APLIKASI PEMBAYARAN SPP SMKN 1 KEPANJEN</h2>
            <p align="center">Jl. Raya Kedungpedaringan Kepanjen</p>
            <p align="center">Selamat Datang<strong> <?php echo $_SESSION['fullname']; ?></strong></p>
        </div>
    <?php }?>


    <!-- container -->

    
</div>
</div>
</div>
<!-- end wrapper -->

<!-- Footer -->
<footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                © 2019 Hexzy <span class="d-none d-md-inline-block"> - Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesdesign.</span>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer -->

<!-- jQuery  -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/modernizr.min.js"></script>
<script src="assets/js/detect.js"></script>
<script src="assets/js/fastclick.js"></script>
<script src="assets/js/jquery.slimscroll.js"></script>
<script src="assets/js/jquery.blockUI.js"></script>
<script src="assets/js/waves.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/jquery.nicescroll.js"></script>
<script src="assets/js/jquery.scrollTo.min.js"></script>

<script src="assets/js/app.js"></script>



</body>

</html>