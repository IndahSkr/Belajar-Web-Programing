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
		$sql = "SELECT * FROM mahasiswa";
		return mysqli_query($koneksi, $sql);
	}
	function hapus_mhs($nim)
	{
		$koneksi = connect_to_db();
		$sql = "DELETE from mahasiswa where nim=".$nim;
		mysqli_query($koneksi,$sql);
	}
	function simpan_mhs($nim,$nama,$alamat)
	{
		$koneksi = connect_to_db();
		$sql = "INSERT into mahasiswa values('$nim','$nama', '$alamat')";

		mysqli_query($koneksi,$sql);
	}
	function get_mhs_by_nim($nim)
	{
		$koneksi = connect_to_db();
		$sql = "SELECT * from mahasiswa where nim=".$nim;
		$query = mysqli_query($koneksi,$sql);
		return mysqli_fetch_array($query);
	}
	function update_mhs($nim,$nama,$alamat)
	{
		$koneksi = connect_to_db();
		$sql = "UPDATE mahasiswa 
				set nama='$nama', alamat='$alamat'
				where nim='$nim'";

		mysqli_query($koneksi,$sql);
	}
	function cek_login($username,$password)
	{
		$koneksi = connect_to_db();
		$sql = "SELECT * FROM pengguna 
			WHERE username='$username' AND pass='".md5($password)."'";
		$query = mysqli_query($koneksi,$sql);

		$num = mysqli_num_rows($query);
		return ($num > 0);
	}
	function get_level_by_username($username){
		$koneksi = connect_to_db();
		$sql= "SELECT a.id_level, c.nama_level  
			FROM level_pengguna AS a 
			JOIN pengguna AS b ON a.id_pengguna=b.id 
			JOIN level AS c ON c.id 
			WHERE b.username='".$username."' 
			limit 1";
		$query = mysqli_query($koneksi,$sql);

		if(mysqli_num_rows($query) == 0){
			return false;
		}
		return mysqli_fetch_array($query);
	}
	function get_menu_by_level($level){
		$koneksi = connect_to_db();
		$sql = "SELECT * FROM level_menu AS a JOIN menu AS b ON a.id_menu=b.id WHERE a.id_level='".$level."'";
		$query = mysqli_query($koneksi,$sql);
		return $query;
	}
	
