<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.ganjil{
			color: red;
			background-color: white;
		}
		.genap{
			color: white:;
			background-color: red;
		}
	</style>
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
						if($bil%2==0){
							echo "<td class='genap'>$bil</td>";
						}else{
							echo "<td class='ganjil'>$bil</td>";
						}
						
						$bil++;
					}
				echo "</tr>";
			endfor;
		echo "</table>";


	 ?>
</body>
</html>