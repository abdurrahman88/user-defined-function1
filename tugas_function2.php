<?php
	function dataSantri($nama, $umur) {
		for ($i=0; $i < 2; $i++) {
		echo "<br>"; 
			for ($b=1; $b < 2; $b++) { 
				echo "Namanya : $nama <br> Umur nya $umur";
			}
			echo "<br>";
		}
	}
	dataSantri("Bilal",18);
	dataSantri("Yahya",21);
	
?>
