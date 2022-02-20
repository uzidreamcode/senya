<?php
session_start();
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

    <!-- Begin page -->
    <div class="accountbg"></div>
    <div class="wrapper-page">
        <div class="card card-pages">

            <div class="card-body">
                <div class="text-center m-t-20 m-b-30">
                    <a style="color: #ef5c6a; font-family: cursive" href="index.html" class="logo logo-admin">PEDULI DIRI</a>
                </div>
                <h4 class="text-muted text-center m-t-0"><b>Daftar</b></h4>

                <form class="form-horizontal m-t-20" method="post">

                    <div class="form-group">
                        <div class="col-12">
                            <input name="nik" class="form-control" type="text" required="" placeholder="MASUKAN NIK">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-12">
                            <input name="nama" class="form-control" type="text" required="" placeholder="NAMA PANJANG">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-12">
                            <input name="email" class="form-control" type="text" required="" placeholder="EMAIL">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-12">
                            <input name="telepon" class="form-control" type="text" required="" placeholder="TELEPON">
                        </div>
                    </div>
                    



                    <div class="form-group text-center m-t-40">
                        <div class="col-12">
                            <button name="submit" class="btn btn-primary btn-block btn-lg waves-effect waves-light">Daftar</button>
                        </div>
                    </div>


                </form>
                <?php
                    include 'koneksi.php';
                    if (isset($_POST['submit'])) 
                    {
                        $nik=$_POST['nik'];
                        $nama=$_POST['nama'];
                        $email=$_POST['email'];
                        $telepon=$_POST['telepon'];

                        $koneksi->query("INSERT INTO user VALUES('$nik','$nama','$email','$telepon') ");
                        echo "<script>alert('berhasil mendaftar')</script>";
                        echo "<script>location='daftar.php'
                    }</script>";    

                }
                ?>
        </div>

    </div>
</div>



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