<?php
include "connect.php";

	if(isset($_POST['submit']))
	{

		$Username=$_POST['Username'];
		$email=$_POST['Email'];
		$password=$_POST['Password'];
		$sql=mysqli_query($conn, "SELECT email FROM account  WHERE email='$email'");
		$result = mysqli_fetch_array($sql);
		if($result>0)
		{
			echo "<script> alert ('Email taken');</script>";
		}
		else
		{
			$query=mysqli_query($conn, "INSERT INTO account (username, email,password) VALUES ('$Username', '$email','$password')");
			if ($query)
			{
				echo "<script> alert('successfully logged in;);</script>";
				echo "<script> window.location.href= 'index.php'</script>";
			}
			else
			{
				echo "<script> alert('something wen wrong;');</script>";
				echo "<script> window.location.href='index.php'</script>";
			}
		}
	}
	if(isset($_POST['login']))
	{
		$username=$_POST['Username'];
		$email=$_POST['Email'];
		$password=$_POST['Password'];
		$query=mysqli_query($conn, "SELECT  email FROM account WHERE (username = '$username' || email= '$email') && password ='$password'");
		 $_SESSION['Username']=$username;
		$ret = mysqli_fetch_array($query);

		if($ret>0)
		{
			echo "<script> window.location.href='account.php'</script>";
		}
		else
		{
			echo "please first do the registartion";
		}
	}
?>
<!DOCTYPE html>
	<html>
		<head>
			<title></title>	
			<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
			<!------------------------------------------------------------------------------------->
			<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
			<!------------------------------------------------------------------------------------->
	  		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	  		<!------------------------------------------------------------------------------------->
	  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	  		<!------------------------------------------------------------------------------------->
	  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	  		<!------------------------------------------------------------------------------------->
	  		<script type="text/javascript"></script>
	  		<!------------------------------------------------------------------------------------->
			<link rel="stylesheet" type="text/css" href="css/index.css">
		</head>
		<body>
			<div class="container-fluid " style="padding:0">
				<img src="over.jpg">
				<div class="overlay">
				</div>
				<div class="container black">
					<div class="content">
						<p class="big-text col-lg-9 content-1"><B>Welcome to E-wallet</B></p>
						<h4 class="small-text col-lg-6">
							E-wallet  dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua.
						</h4>
					</div>
					<button class="btn btn-default btn-1 mr-4" data-toggle="modal" data-target="#myModal"><b>Log In</b></button>
					<button class="btn btn-default btn-2 ml-4" data-toggle="modal" data-target="#myModall"> <B>Sign Up</B></button>
				</div>
			</div>
			<div id="myModal" class="modal fade" role="dialog">
  				<div class="modal-dialog">
   					<div class="modal-content">
      					<div class="modal-body">
       						<form method="POST">
								<h1 style="text-align: center; padding-top: 30px;" ><B>Log In</B></h1>
								<input placeholder="username" type="text" name="Username" required="">
				 				<input placeholder="email" type="text" name="Email" required="">
  								<input placeholder="Password" type="password" name="Password" required="">
  								<button class="btn-3" name="login">Submit</button>

							</form>
      					</div>
    				</div>
				</div>
			</div>
			<div id="myModall" class="modal fade" role="dialog">
  				<div class="modal-dialog">
   					<div class="modal-content">
      					<div class="modal-body">
       						<form method="POST">
								<h1 style="text-align: center; padding-top: 30px;" ><B>Sign Up</B></h1>
				 				<input placeholder="Username" name="Username" type="text" required="">
				  				<input placeholder="Email"  name="Email" type="email" required="">
  								<input placeholder="Password" name="Password" type="password" required="">
  								<button class="btn-3" name="submit">Submit</button>
			        		</form>
                		</div>
            		</div>
				</div>
			</div>
		</body>
	</html>