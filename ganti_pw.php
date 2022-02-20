<nav aria-label="breadcrumb">
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="#">Beranda</a></li>
		<li class="breadcrumb-item active" aria-current="page">Ganti Password</li>
	</ol>
</nav>
<div class="card">
	<div class="card-body">
		<?php
		include 'koneksi.php';
		$iduser = $_SESSION['iduser'];

		if(isset($_REQUEST['submit'])){
			//pastikan bahwa password lama benar
			$pass1 = $_REQUEST['pass1'];
			$pass2 = $_REQUEST['pass2'];

			$sql = mysqli_query($koneksi,"SELECT password FROM user WHERE iduser='$iduser' AND password=md5('$pass1')");
			if(mysqli_num_rows($sql) > 0){
				$do = mysqli_query($koneksi,"UPDATE user SET password=md5('$pass2') WHERE iduser='$iduser'");
				if($sql > 0){
					 echo "<script>location='logout.php'</script>";
					die();
				} else {
					echo 'ada ERROR dg query';
				}
			} else 
			{
				//akses ilegal, paksa LOGOUT!
				echo '<div class="alert alert-danger force-logout"><strong>ERROR:</strong> Password lama tidak sesuai! Anda mungkin tidak memiliki akses ke halaman ini.</div>';
			}
		}
		?>
		<form method="post" action="admin.php?halaman=ganti_pw" class="form-horizontal" role="form">
			<div class="form-group">
				<label for="pass1" class="col-sm-3 control-label">Password Lama</label>
				<div class="col-sm-4">
					<input type="password" class="form-control" id="pass1" name="pass1" placeholder="Password lama" required autofocus>
				</div>
			</div>
			<div class="form-group">
				<label for="pass2" class="col-sm-3 control-label">Password Baru</label>
				<div class="col-sm-4">
					<input type="password" class="form-control" id="pass2" name="pass2" placeholder="Password baru" required>
					<small>setelah menekan tombol "Simpan", anda akan diminta melakukan Login ulang.</small>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-3 col-sm-9">
					<button type="submit" name="submit" class="btn btn-default">Simpan</button>
					<a href="./admin.php?hlm=user" class="btn btn-link">Batal</a>
				</div>
			</div>
		</form>
	</div>
</div>