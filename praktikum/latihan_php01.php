<?php 
	echo "<h1>Hello World</h1>";

	$angka_bagus = 10;

	echo "$angka_bagus</br>";

	echo "Angka bagus adalah angka ".$angka_bagus;

	$nilai = 90;
	if ($nilai > 80) {
		echo "</br>Good Job!";
	}
	elseif ($nilai > 70) {
		echo "</br>Ok, not bad...";
	}
	else
	{
		echo "</br>Sinau maning....</br>";
	}

	for ($i=1; $i < 10; $i++) { 
		echo "</br>". $i."<br/>";
	}
?>