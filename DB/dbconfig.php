<?php
	$db = mysqli_connect("127.0.0.1", "root", "apmsetup", "homepage");
	if(mysqli_connect_errno()){
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
?>
