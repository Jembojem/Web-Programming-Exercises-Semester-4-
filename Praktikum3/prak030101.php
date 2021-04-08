<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
		function gandakanString($n, $s){
			if($s==3):
				for ($i=0; $i < $s; $i++) : 
					echo $n;		
				endfor;
			endif;
		}

	 ?>
	 <h1><?= gandakanString("K351944", 3) ?></h1>
</body>
</html>