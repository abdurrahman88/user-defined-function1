<?php
	function tugasSekolah($pelajaran) {
		for ($i=0; $i < 4; $i++ ) { 
			echo "<br>";
			echo "Saya memiliki pelajaran $pelajaran";
		}
		echo "<br>";
	}
	tugasSekolah("Aqidah");
	tugasSekolah("Fiqih");
	tugasSekolah("Tahfizd");

?>