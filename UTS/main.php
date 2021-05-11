<?php 
	session_start();
	include('watermark.php');
	include('configuration.php');
	include('functions.php');
	watermark();

	if (isset($_COOKIE['login'])):
	    $jml = $_SESSION['bil1'] + $_SESSION['bil2'];
	    if ($_SESSION['nyawa'] < 1): 
?>
	    	<div class="container">
	        	<div class='main'>
		            <h1>
		                Hello, <?= $_COOKIE['player'] ?> Sayang permainan sudah selesai. Semoga kali lain bisa lebih baik.
		                Score Anda : <?= $_SESSION['score'] ?>
		            </h1>
		            <a href='reset.php'>Main Lagi</a>
		            <a href='rank.php' target='_blank' rel='noopener noreferrer'>Hall of Fame</a>
	            </div>	    		
	    	</div>
			<?php
	        inputScore($dbhost, $dbuser, $dbpass, $dbname, $port, $_COOKIE['player'], $_SESSION['score']);
	        $_SESSION['bil1'] = rand(0, 20);
	        $_SESSION['bil2'] = rand(0, 20);
	        $_SESSION['nyawa'] = 5;
	        $_SESSION['score'] = 0;
	    else:
 			?>
 		<div class="container">
 			<div class="main">
 			<?php 
 				if (isset($_POST['jawab'])):
	                if (intval($_POST['jawaban']) == $jml):
	                    $_SESSION['score'] += 10;
	        ?>
	                    <strong>
	                        Hello <?= $_COOKIE['player'] ?>, Selamat jawaban Anda benar <br>
	                        Lives: <?= $_SESSION['nyawa'] ?> | Score: <?= $_SESSION['score'] ?>
	                    </strong>
	                <?php 
	                else:
	                    $_SESSION['score'] -= 2;
	                    $_SESSION['nyawa'] -= 1;
	                ?>
	                    <strong>
	                        Hello <?= $_COOKIE['player'] ?>, sayang jawaban Anda salah… tetap semangat ya <br>
	                        Lives: <?= $_SESSION['nyawa'] ?> | Score: <?= $_SESSION['score'] ?>
	                    </strong>
	           		<?php 
	           		endif;
                	$_SESSION['bil1'] = rand(0, 20);
                	$_SESSION['bil2'] = rand(0, 20);
 					?>
 					<div class="href-position">
 						<a href="main.php" class="href">Soal Selanjutnya</a>
 					</div>
 					
 				<?php 
 				else:
 				?>
	                <h4>
	                    Hello <?= $_COOKIE['player'] ?>, tetap semangat ya… you can do the best<br>
	                    Lives: <?= $_SESSION['nyawa'] ?> | Score: <?= $_SESSION['score'] ?>
	                </h4><hr>
	                <div class="question">
	                	<span>Berapakah <?= $_SESSION['bil1'] ?> + <?= $_SESSION['bil2'] ?> = </span>
	 			 		<form method="post" class="">
		                    <input type="number" name='jawaban' class="kotak-input"><br>
		                    <button type="submit" name='jawab' class="button">Jawab</button>
	             		</form>
	                </div>
	                
        	</div>
        </div>

<?php
				endif;
		endif;
	else:
			echo ('<script>alert("Silahkan Login Terlebih Dahulu");
            window.location.href=(\'login.php\')
        </script>');
	endif;
 ?>