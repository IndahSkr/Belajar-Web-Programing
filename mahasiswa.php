<?php
	if (defined("INDEX")==false) {
		die("you shall not pass!");
	}
?>

<h3>
	Data Mahasiswa
	<span class="float-right">
		<a href="index.php?page=form_mhs" class="btn btn-primary">
			Tambah Baru
		</a>
	</span>
</h3>
<?php 
	$data = get_data_mahasiswa();
 ?>

 <table  class="table table-bordered">
 	<tr>
 		<th>NIM</th>
 		<th>Nama</th>
 		<th>Alamat</th>
 	</tr>
 	<?php 
 		while ($row = mysqli_fetch_assoc($data)) {
 			echo "<tr>
 				<td>".$row['nim']."</td>
 				<td>".$row['nama']."</td>
 				<td>".$row['alamat']."</td>
 				<td>
 					<a href='index.php?page=edit_mhs&nim=".$row['nim']."'>Edit</a> ||
 					<a href='index.php?page=hapus_mhs&nim=".$row['nim']."'>Hapus</a>
 				</td>
 			</tr>"
 			;
 		}
 	 ?>
 </table>