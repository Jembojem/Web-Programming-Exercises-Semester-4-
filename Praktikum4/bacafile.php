<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
		$namaFile = "myfile.txt";
		$myfile = fopen($namaFile, "r") or die("Tidak bisa buka file!");
		echo fread($myfile, filesize($namaFile));
		fclose($myfile);
	 ?>
</body>
</html>