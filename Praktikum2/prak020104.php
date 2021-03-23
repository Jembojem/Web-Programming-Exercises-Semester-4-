<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
		$i = 1;
		while($i <= 6):
			if($i%2==0):
				echo "<h".$i." style='color:red;'>Heading".$i."</h".$i.">";
			else:
				echo "<h".$i.">Heading".$i."</h".$i.">";
			endif;
			$i++;
		endwhile;

	 ?>
</body>
</html>