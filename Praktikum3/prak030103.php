<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
		function buatBintangLagi($n){
			echo "<pre>";
			for ($i=0; $i < $n; $i++) { 
				for ($j=$n; $j > $i; $j--) { 
					echo "*";
				}
				echo "\n";
			}
			echo "</pre>";
		}

		buatBintangLagi(10);
	 ?>
</body>
</html>