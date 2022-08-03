<?php
	$servername="localhost";
	$username="username";
	$password="";
	$db= "account";
	$conn=mysqli_connect('localhost','root','','account');
	if(!$conn)
	{
		die("connection failed:".$mysqli_connect_error());
	}
	session_start();

?>


