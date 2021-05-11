<?php 
	include("watermark.php");
    watermark();
    if(isset($_COOKIE['login'])):
?>
		<div class='container'>
        	<div class='main'>
	            <h1>Halo <?= $_COOKIE['player'] ?> , selamat datang kembali di permainan ini!!!</h1>
	            <div class="href-position">
	            	<a href='main.php' class="href">Start Game</a>
	            	<p>Bukan Anda ? <a href='reset.php'>Klik Disini</a></p>
	            </div>
	            
            </div>
        </div>
    <?php else: ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
</head>
<body>
	<div class="container">
		<div class="main">
		<h1>Silahkan Login Untuk Memulai Permainan</h1>
		<form action="session.php" method="post">
			<label for="nama">Nama :</label>
			<input type="text" name="nama" placeholder="Masukkan nama" id="nama" class="kotak-input"> <br>
			<label for="email">Email  :</label>
			<input type="email" name="email" placeholder="Masukkan email" id="email" class="kotak-input"> <br>
			<input type="submit" name="submit" value="Login" class="button">
		</form>
	</div>
	</div>
	
	
</body>
</html>
<?php endif; ?>