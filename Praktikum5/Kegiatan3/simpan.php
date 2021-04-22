<?php 
	if (isset($_POST["submit"])) {
		if(empty($_POST["nim"])||!empty($_POST["nama"])||empty($_POST["tgllhr"])||empty($_POST["tmptlhr"])):
			print "Lengkapi data terlebih dahulu";
		else:
			$nim=$_POST["nim"];
			$nama=$_POST["nama"];
			$tgllhr=$_POST["tgllhr"];
			$tmptlhr=$_POST["tmptlhr"];

			$bukafile=fopen("datamhs.dat","a");
			fwrite($bukafile, "NIM : ${nim} <br>");
			fwrite($bukafile, "Nama : ${nama} <br>");
			fwrite($bukafile, "Tanggal lahir : ${tgllhr} <br>");
			fwrite($bukafile, "Tempat lahir : ${tmptlhr} <br>");
			fclose($bukafile);
			print "Data berhasil disimpan";
		endif;
	}
 ?>