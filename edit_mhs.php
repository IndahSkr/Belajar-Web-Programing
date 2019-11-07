<?php
	if (defined("INDEX")==false) {
		die("you shall not pass!");
	}
?>
<h3>
	Form Edit Mahasiswa
	<span class="float-right">
		<a href="index.php?page=mahasiswa" class="btn btn-primary">
			Kembali
		</a>
	</span>
</h3>

<?php
	$nim = $_GET['nim'];
	$mhs = get_mhs_by_nim($nim);
?>

<form action="index.php?page=update_mhs" method="post">
	<input type="hidden" name="nim" value="<?php echo $mhs['nim'];?>"/>
	<table>
		
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="text" name="nama" value="<?php echo $mhs['nama'];?>"></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td><input type="text" name="alamat" value="<?php echo $mhs['alamat'];?>"></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td><input type="submit" class="btn btn-primary" value="simpan"></td>
		</tr>
	</table>
</form>