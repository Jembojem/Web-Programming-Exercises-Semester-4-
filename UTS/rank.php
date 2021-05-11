<?php 
	include('watermark.php');
    include('configuration.php');
    include('functions.php');
    watermark();
 ?>
 <div class="container">
 	<?php 
		tableRank($dbhost, $dbuser, $dbpass, $dbname, $port);
	?>
</div>