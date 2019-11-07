<?php
	if (defined("INDEX")==false) {
		die("you shall not pass!");
	}
?>
<form action="index.php?page=login_process" method="post">
	Username<br/>
	<input type="text" name="username" style="width: 180px;" />
	<br/>
	Password<br/>
	<input type="password" name="pass" style="width: 180px;" />
	<br/>
	<input type="submit">
</form>
