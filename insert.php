<?php
include"connect.php";
if(isset($_POST['submit']))
	{

		$balance=$_POST['balance'];
		$query=mysqli_query($conn, "INSERT INTO wallet (balance) VALUES ('$balance')");
	}
	
	?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="POST">
	<input type="text" name="balance" placeholder="balance">
	<button class="" name="submit"></button>
</form>
</body>
</html>