<nav aria-label="breadcrumb">
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="#">Beranda</a></li>
		<li class="breadcrumb-item active" aria-current="page">Profil</li>
	</ol>
</nav>
<?php
echo '<h2>Profil Anda</h2><br><br>';
echo '<div class="col-md-12"><table class="table table-striped">';
echo '<tr><td width="130">Nama Lengkap</td><td>: '.$_SESSION['fullname'].'</td></tr>';
echo '<tr><td width="130">Username</td><td>: '.$_SESSION['username'].'</td></tr>';
echo '<tr><td width="130">Password</td><td>: <em>tidak ditampilkan</em>';
echo '<a href="admin.php?halaman=ganti_pw" class="btn btn-warning btn-xs pull-right">Ganti Password</a>';
echo '</td></tr>';
echo '</table></div>';
?>