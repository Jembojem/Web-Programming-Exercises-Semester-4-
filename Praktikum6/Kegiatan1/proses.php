<?php 
	session_start();
	// Daftar users
	$users = [
		["username1", "Rosihan Ari Yuana", "123456"],
		["username2", "Dwi Amalia Fitriani", "654321"],
		["username3", "Faza Fauzan Khosyiyaroh", "112233"]
	];

	// jika form login sudah submitted
	if (isset($_POST["submit"])) {
		$username = $_POST["username"];
		$password = $_POST["password"];

		// proses pengecekan ada tidaknya username dan password dlm daftar user
		foreach ($users as $profile_user):
			if (($profile_user[0]==$username)&&($profile_user[2]==$password)):
				// jika ada yang match maka bikin session untuk simpan nama user
				$_SESSION["namauser"]=$profile_user[1];

				// redirect ke halaman page1.php
				header("Location:page1.php");
			endif;
		endforeach;
		// jika tidak ada username dan password yg match
		echo "<h3>Login gagal</h3>";
		echo "<p>Silahkan <a href='form.html'>login kembali</a></p>";
	}
 ?>