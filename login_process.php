<?php
	session_start();
	require_once("aplikasi.php");
//	if (defined("INDEX")==false) {
//		die("you shall not pass!");
//	}

	$username = $_POST['username'];
	$password = $_POST['pass'];
	
	$cek = cek_login($username,$password);
	//var_dump($_SESSION['username']);
	//		var_dump($level);
	//		die;
	if ($cek) {
		// set sessoion
		$_SESSION['username'] = $username;

		//cek level
		$level = get_level_by_username($username);

		if($level == false)
		{
			echo "<script> 
				window.location='index.php?page=logout';
			</script>";
		}
		else{
		//	var_dump($_SESSION['username']);
		//	var_dump($level);
		//	die;
			$_SESSION['level']=$level['id_level'];
		}

		//redirect ke dashboard
		echo "<script> 
			window.location='index.php?page=dashboard';
		</script>";
	}
	else
	{
		echo "<script> 
			window.location='index.php?page=login_form';
		</script>";
	}
?>
