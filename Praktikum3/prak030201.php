<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
		function hitungGaji($gol, $masaKerja){
			if ($gol==A):
				if ($masaKerja<10):
					$gaji = 5000000;
				else:
					$gaji = 7000000;
				endif;
			elseif ($gol==B):
				if ($masaKerja<10):
					$gaji = 6000000;
				else:
					$gaji = 8000000;
				endif;
			endif;
			return "$gol, $masaKerja, $gaji";		
		}
	 ?>
</body>
</html>