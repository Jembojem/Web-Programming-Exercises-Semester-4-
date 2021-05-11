<?php 
	function watermark(){
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
		}
		.header{
			width: 100vw;
			height: 100px;
			line-height: 50px;
			background-color: black;
			color: white;
			font-size: 20px;
			text-align: center;
		}
		.footer{
			position: absolute;
			bottom: 0;
			width: 100vw;
			height: 80px;
			line-height: 40px;
			background-color: black;
			color: white;
			font-size: 10px;
			text-align: center;
		}
		body{
			width: 100vw;
			height: 100vh;
			margin: 0;
			padding: 0;
		}
		.kotak-input{
			width: 60%;
		    height: 30px;
		    margin-top: 10px;
		}
		.button{
			margin-top: 15px;
		    width: 150px;
		    height: 30px;
		    background-color: red;
		    color: white;
		    font-weight: bolder;
		    border-radius: 20px;
		}
		.question{
			width: 100%;
			height: 50%;
			font-size: 20px;
			margin-top: 20px;
		}
		.container{
			position: absolute;
			width: 100vw;
			height: 76%;
			display: flex;
			align-items: center;
			justify-content: center;
		}
		.href-position{
			width: 100%;
			position: absolute;
			bottom: 5%;
		}
		.href{
			display: inline-block;
		    border: 2px solid black;
		    text-decoration: none;
		    width: 150px;
		    padding: 5px auto;
		    height: 50px;
		    font-size: 20px;
		    font-weight: bold;
		    line-height: 50px;
		}
		.href:hover{
			color: red;
		}
		.main{
			position: relative;
			width: 80%;
			height: 200px;
			border: black solid 2px;
			text-align: center;
			font-size: 20px;
		}
		.main h1{
			text-align: center;
		}
		form{
		}
		form label{
			width: 100px;
		}
	</style>

</head>
<body>
	<div class="header">
		<h1>Ujian Tengah Semester</h1>
		<h3>Game Penjumlahan Sederhana</h3>
	</div>
	<div class="footer">
		<h2>By Jefferson Iskandar <br> K3519044</h2>
	</div>
</body>
</html>

<?php 
	}
 ?>