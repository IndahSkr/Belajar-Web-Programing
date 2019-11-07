<?php
	if (defined("INDEX")==false) {
		die("you shall not pass!");
	}

	$username = $_POST['username'];
	$password = $_POST['pass'];
	
	$cek = cek_login($username,$password);
	
	if ($cek) {
		// set sessoion
		$_SESSION['username'] = $username;

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
