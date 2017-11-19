<?php
	function  beratSaya($berat = array(50, 60)) {
		$index = rand(0, 1);
		echo "Berat saya ".$berat[$index]."kg"."<br>";
	}
	beratSaya(array(50, 20));
	beratSaya(array(30,40));
	beratSaya(array(50, 20));
	beratSaya(array(50, 20));
?>