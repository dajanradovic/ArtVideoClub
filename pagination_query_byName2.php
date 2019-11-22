<?php

include_once 'databaseconnection.php';

$sql="SELECT title, year, director, posteraddress FROM listafilmova ORDER BY title ASC LIMIT 5 OFFSET 10;";

$result = mysqli_query($conn, $sql);
$resultcheck = mysqli_num_rows($result);

if ($resultcheck > 0){
		while ($row = mysqli_fetch_assoc($result)){
				echo '<div class="col s2">
				 <div class="slikica" style="background-image: url('.$row['posteraddress'].'); background-repeat: no-repeat; background-size: cover;">
				
				</div>
				<div class="tekstzaslikicu">
					<p class="generiranitekst" id="redatelj">' .  $row['director'] . '</p>
					<p class="generiranitekst" id="drzava">' .  $row['year'] . '</p>
					<p class="generiranitekst" id="imefilma">' .  $row['title'] . '</p>
				</div>
			</div>';
			
		}

}




?>