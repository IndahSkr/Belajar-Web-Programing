<?php
	if (defined("INDEX")==false) {
		die("you shall not pass!");
	}

	simpan_mhs($_POST['nim'],$_POST['nama'],$_POST['alamat']);
	
	echo "<script> window.location='index.php?page=mahasiswa';
	</script>";
?>