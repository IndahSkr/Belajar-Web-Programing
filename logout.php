<?php 
	if (defined("INDEX")==false) {
		die("you shall not pass!");
	} 

	// logout process
	session_destroy();

	//redirect ke halaman login
	echo "<script> 
			window.location='index.php?page=login_form';
		</script>";
?>