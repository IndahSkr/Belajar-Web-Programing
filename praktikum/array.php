<?php
	$transportasi = array(
		"c" => "Kereta",
		"d" => "mobil",
		"e" => "sepeda"
	);
	echo "Contoh alat transportasi antara lain: <br />";
	echo "<ol>";
	foreach ($transportasi as $k => $v) {
		echo "<li>".$v."</li>";
	}
	echo "</ol>";
	//contoh alat transportasi antar lain:
	//1. Kereta Api
	//2. Mobil
	//3. Sepeda
print_r($transportasi);
echo "//////////////////////////////////////////////////////////////////////////////////////////////////";
	$arr = array(
		"Budi" => array(
			"hobi" => array("memancing" , "membaca")
		), 
		"andi" => array(
			"hobi" => array("menyanyi","travelling","belanja")
		)
	);
	foreach ($arr as $orang => $desc) {
		echo $orang." memiliki hobi ";
		$hobi = $desc['hobi'];
		foreach ($hobi as $k => $h) {
			$penghubung = "";
			if ($k == count($hobi)-2) {
				$penghubung = " dan ";
			}
			else
			{
				if ($k == 0) {
					$penghubung = ", ";
				}
			}
			echo $h.$penghubung;
		}
		echo ".<br/>";
	}

	$arrr = array(
		array(
			"desc" => "uang saku bulanan" ,
			"nominal" => 500000,
			"sifat" => "masuk"),
		array(
			"desc" => "sarapan",
			"nominal" => 7000,
			"sifat" => "keluar"
		),
		array(
			"desc" => "beli buku",
			"nominal" => 6000,
			"sifat" => "keluar"
		)
	);
	echo "//////////////////////////////////////////////////////////////////////////////////////////////";
	//Total Pemasukan adalah.... Total pengeluaran adalah Rp...
	//Jadi saldo uang adalah Rp...
	$masuk = 0;
	$keluar = 0;
	foreach ($arrr as $v) {
		if ($v['sifat']=="masuk") {
			$masuk += $v['nominal'];
		}
		else{
			$keluar += $v['nominal'];
		}
	}
	echo "Total Pemasukan adalah Rp. ".$masuk.".<br />";
	echo "Total Pengeluaran adalah Rp. ".$keluar.".<br />";
	echo "Saldo uang adalah Rp. ".($masuk-$keluar);
?>