<?php
	if (defined("INDEX")==false) {
		die("you shall not pass!");
	}
	$nim = $_GET['nim'];

	hapus_mhs($nim);
	
	echo "<script> window.location='index.php?page=mahasiswa';
	</script>";
?>