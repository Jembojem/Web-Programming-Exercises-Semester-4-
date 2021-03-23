<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
		$baris = 4;
		$kolom = 5;
		$bil = 1;
		echo "<table border='1'>";
			for ($i=1; $i <= $baris ; $i++) :

				echo"<tr>";
					for ($j=1; $j <= $kolom ; $j++) { 
						echo "<td>$bil</td>";
						$bil++;
					}
				echo "</tr>";
			endfor;
		echo "</table>";


	 ?>
</body>
</html>