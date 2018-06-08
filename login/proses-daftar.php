<?php
include("config.php");
extract($_REQUEST);

			$sql = ("INSERT INTO users (nama, username, password, level_user) VALUES('$nama','$username','$password','member')");
			$encrypted = md5($password);
			
			$qry = mysqli_query($dbconnect,$sql);
				if ($qry === TRUE) {
					echo"<script>alert('Pendaftaran berhasil !'); document.location='login.php';</script>";
				}else{
					echo"<script>alert('Pendaftaran gagal !'); document.location='registrasi.php';</script>";
				}
		

$dbconnect->close();

 ?>