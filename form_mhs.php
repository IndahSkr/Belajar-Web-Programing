<?php
	if (defined("INDEX")==false) {
		die("you shall not pass!");
	}
?>
<h3>
	Form Tambah Mahasiswa
	<span class="float-right">
		<a href="index.php?page=mahasiswa" class="btn btn-primary">
			Kembali
		</a>
	</span>
</h3>

<form action="index.php?page=simpan_mhs" method="post">
	<table>
		<tr>
			<td>Nim</td>
			<td>:</td>
			<td><input type="text" name="nim"></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="text" name="nama"></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td><input type="text" name="alamat"></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td><input type="submit" class="btn btn-primary"></td>
		</tr>
	</table>
</form>