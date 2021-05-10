<?php 
	include("tittle.php");
    headerDecor();
    if(isset($_COOKIE["login"])):
        echo("<div class='container container-fluid'>
            <h1>Halo {$_COOKIE['player']} , selamat datang kembali di permainan ini!!!</h1>
            <a href='dashboard.php' class='btn btn-primary'>Start Game</a>
            <p>Bukan Anda ? <a href='reset.php'>Klik Disini</a></p>
        </div>");
    else:
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
	<style type="text/css">
		form{
			width: 100vh;
			height: 100vh;
			
		}
		form label{
			width: 100px;
		}
	</style>
</head>
<body>
	<form>
		<label>Nama :</label>
		<input type="text" name="nama" placeholder="Masukkan nama"> <br>
		<label>Email  :</label>
		<input type="password" name="pass" placeholder="Masukkan password"> <br>
		<input type="submit" name="submit" value="Login">
	</form>
</body>
</html>

<?php 
	endif;
 ?>