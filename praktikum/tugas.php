<?php 
	//array
	$customer = array(
	"A001" => "Andi",
	"A002" => "Budi",
	"A003" => "catur",
	);
	$barang = array(
		"B001" => array(
			"desc" => "Flash Disk Kingston 64GB",
			"harga" => 75000
		),
		"B002" => array(
			"desc" => "Connector HDMI",
			"harga" => 150000
		),
		"B003" => array(
			"desc" => "DVD Blank",
			"harga" => 2500
		), 
	);
	$belanja = array(
		array("A001","B001",3),
		array("A001","B003",10),
		array("A003","B001",1),
		array("A003","B002",1),
	);

	//output:
	//Andi membeli barang sbb:
	//1. Flash disk kingston 64GB 3 buah @75000, total Rp. 225000
	//2. ... dst
	//Total pembelian Andi adalah Rp...
	//echo "<ol>";

	foreach ($customer as $k => $v) {
		$total = 0;
		echo $v." membeli barang sbb:</br><ol>";
		foreach ($belanja as $belanjaan) {
			foreach ($barang as $ke => $va) {
				if ($k == $belanjaan[0] && $belanjaan[1]==$ke) {
					echo "<li>".$va["desc"]." ".$belanjaan[2]." buah @ ".$va["harga"].", total Rp. ".($va["harga"]* $belanjaan[2])."</li>";
					$total +=($va["harga"]*$belanjaan[2]);
				}
			}
		}
		echo "</ol></br>Total pembelian ".$v." adalah Rp. " .$total."</br></br><hr>";			
	}
	
?>