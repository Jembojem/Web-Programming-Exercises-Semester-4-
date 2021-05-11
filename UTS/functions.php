<?php 
	function inputScore($dbhost, $dbuser, $dbpass, $dbname, $port, $Player, $Score){
        $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname, $port);
        if ($conn):
            echo "<script>console.log('Koneksi Berhasil');</script>";
        else:
            echo "<script>console.log('Koneksi Gagal');</script>";
        endif;
        $query = "INSERT INTO topscore (Player, Score)
            VALUES ('$Player', '$Score')";
        if (mysqli_query($conn, $query)):
             echo "<script>console.log('Input Data Berhasil');</script>";
        else:
            echo "<script>console.log('Input Data Gagal');</script>";
        endif;
    
        mysqli_close($conn);
    }
    function tableRank($dbhost, $dbuser, $dbpass, $dbname, $port){
        $index = 1;
        $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname, $port);
        if ($conn):
             echo "<script>console.log('Koneksi Berhasil');</script>";
        else:
            echo "<script>console.log('Koneksi Gagal');</script>";
        endif;
        $query = "SELECT * FROM topscore ORDER BY Score DESC LIMIT 10";
        $search = mysqli_query($conn, $query);

        if (mysqli_num_rows($search) > 0):
        ?>
            <h1 style="position: absolute; top: 5%; font-size: 40px;">HALL of FAME</h1>
            <div class="main" style="height: auto;">
                <table style="width: 100%; margin: 5px 0; border-spacing: 10px; height: 100%;  ">
	            <tr>
	                <th>No</th>
	                <th>Player</th>
	                <th>Score</th>
	            </tr>
	        <?php while ($row = mysqli_fetch_assoc($search)): ?>
                <tr style="text-align: center;">
                    <td><?= $index ?></td>
                    <td><?= $row['Player']; ?></td>
                    <td><?= $row['Score']; ?></td>
                </tr>    
            <?php
                $index++;
            endwhile;
            ?>         
	         	</table>
            </div>
	    <?php 
		else:
			echo("Data tidak ada");
		endif;
	mysqli_close($conn);     
    }
	     ?>
