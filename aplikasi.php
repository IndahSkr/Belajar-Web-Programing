<?php  
	function connect_to_db()
	{
		$koneksi = mysqli_connect("127.0.0.1","root","","testi");

		if ($koneksi == false) {
			echo mysqli_error($koneksi);
			die;
		}
		return $koneksi;
	}
	function get_data_mahasiswa()
	{
		$koneksi = connect_to_db();
		$sql = "select * from mahasiswa";
		return mysqli_query($koneksi, $sql);
	}
	function hapus_mhs($nim)
	{
		$koneksi = connect_to_db();
		$sql = "delete from mahasiswa where nim=".$nim;
		mysqli_query($koneksi,$sql);
	}
	function simpan_mhs($nim,$nama,$alamat)
	{
		$koneksi = connect_to_db();
		$sql = "insert into mahasiswa values('$nim','$nama', '$alamat')";

		mysqli_query($koneksi,$sql);
	}
	function get_mhs_by_nim($nim)
	{
		$koneksi = connect_to_db();
		$sql = "select * from mahasiswa where nim=".$nim;
		$query = mysqli_query($koneksi,$sql);
		return mysqli_fetch_array($query);
	}
	function update_mhs($nim,$nama,$alamat)
	{
		$koneksi = connect_to_db();
		$sql = "update mahasiswa 
				set nama='$nama', alamat='$alamat'
				where nim='$nim'";

		mysqli_query($koneksi,$sql);
	}
	function cek_login($username,$password)
	{
		$koneksi = connect_to_db();
		$sql = "select * from pengguna 
		where username='$username' AND pass='".md5($password)."'";
		$query = mysqli_query($koneksi,$sql);

		$num = mysqli_num_rows($query);
		return ($num > 0);
	}
?>