<?php
	session_start();
	if(isset($_SESSION['login_ad']))
	{
		unset($_SESSION['login_ad']);
	}
	header("location:index.php");
?>