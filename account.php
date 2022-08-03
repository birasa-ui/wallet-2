
<?php
	include "connect.php";
	$result=$conn->query("SELECT final_balance,balance FROM  wallet ORDER BY id DESC LIMIT 1");
	$row=mysqli_fetch_array($result)    
?>                       
<!DOCTYPE html>
	<html>
		<head>
			<title>My wallet</title>
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
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
			<!------------------------------------------------------------------------------------->
			<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
			<!------------------------------------------------------------------------------------->
		  	<link rel="stylesheet" type="text/css" href="css/account.css">
		  	<!------------------------------------------------------------------------------------->
		</head>
		<body>
			<nav class="navbar navbar-expand-lg navbar-light bg-dark">
				<h1 style="color: white; text-align: center;">My wallet</h1>
				<?php
					if(isset($_SESSION['Username']))
					{

						echo"<a href='logout.php' style='margin-left:80%; font-size:30px;text-decoration:none; color:#808080;'><b>". $_SESSION['Username']."</a></a>";
					}
				?>
			</nav>
			<div class="container-fluid col-lg-6 container-1">
				<h1 class="balance">BALANCE</h1>
				<center>
					<H1 class="initial_balance"><B><?php echo $row['final_balance']; ?> RWF</B></H1>
				</center>
			</div>
			<div class="container-fluid col-lg-6">
       			<div class="service">
					<center>
						<h1 class="balance">SERVICE</h1>
						<div class="row service-1 b ">
							<div class="col-lg-6 v ">
								<i class="fas fa-users icon "> <br><a class="link" data-toggle="modal" data-target="#myModal">Send</a></i>
							</div>
							<div class="col-lg-6 ">
								<i class="fa fa-bell icon "><br><a class="link"> Received</a></i>
							</div>
						</div>
						<div class="row service-1">
							<div class="col-lg-6 v">
								<i class="fa fa-history icon"> <rr><a class="link"   data-toggle="modal" data-target="#myModall">transaction history</a></i>
							</div>
							<div class="col-lg-6">
								<i class="fa fa-money icon"> <br><a class="link" data-toggle="modal" data-target="#myModalll">My balance</a></i>
							</div>
						</div>
					</center>    	
				</div>
	        </div>
	        <?php

				if(isset($_POST['submit']))
				{
					$name=$_POST['name'];
					$initial_balance=$_POST['balance'] ;
					$amount=$_POST['amount'];
		
					if($amount>10000 && $amount <=100000)
					{
					 	$final_balance=$initial_balance-$amount-200;
					}
					else if($amount>100000)
					{
						$final_balance=$initial_balance-$amount-1000;
					}
					else
					{
					 	$final_balance= $initial_balance - $amount;
					}

					 $sql=mysqli_query($conn, "INSERT INTO wallet (name,balance,final_balance,send) VALUES ('$name','$initial_balance','$final_balance','$amount')");
				}
			?>

			<div id="myModal" class="modal fade" role="dialog">
		  		<div class="modal-dialog">
		   			<div class="modal-content">
		      			<div class="modal-body">
		       				<form method="POST">
								<h1 style="text-align: center; padding-top: 30px;" ><B>Send</B></h1>
								<input placeholder="balance" name="balance" type="" required=""  value='<?php echo $row['final_balance']?>' 
										style="margin: 40px 25px;width: 90%;display: block;border: none;padding: 10px 0;border-bottom: solid 1px black;&:focus, &:valid {box-shadow: none;outline: none;background-position: 0 0;&::-webkit-input-placeholder {color: black;font-size: 11px;transform: translateY(-20px);visibility: visible !important;">
						 		<input placeholder="name" name="name" type="text" required="" style="margin: 40px 25px;width: 90%;display: block;border: none;padding: 10px 0;border-bottom: solid 1px black;&:focus, &:valid {box-shadow: none;outline: none;background-position: 0 0;&::-webkit-input-placeholder {color: black;font-size: 11px;transform: translateY(-20px);visibility: visible !important;">
  	
						  		<input placeholder="amount"  name="amount" type="text" required="" style="margin:40px 25px;width: 90%;display: block;border: none;padding: 10px 0;border-bottom: solid 1px black;&:focus, &:valid {box-shadow: none;outline: none;background-position: 0 0;&::-webkit-input-placeholder {color: black;font-size: 11px;transform: translateY(-20px);visibility: visible !important;">
						  		<input placeholder="amount"  name="final_balance" type="hidden" required="" style="margin: 40px 25px;width: 90%;display: block;border: none;padding: 10px 0;border-bottom: solid 1px black;&:focus, &:valid {box-shadow: none;outline: none;background-position: 0 0;&::-webkit-input-placeholder {color: black;font-size: 11px;transform: translateY(-20px);visibility: visible !important;">
 
		  						<button class="btn-3" name="submit" style=" border: none;background: black;cursor: pointer;border-radius: 20px;padding: 8px 24px;width: 200px;color: white;margin-left: 25px;margin-bottom: 20%;">Submit</button>
					        </form>
		                </div>
		            </div>
				</div>
			</div>
			<?php
				$result=$conn->query("SELECT * FROM  wallet ");
					if (mysqli_num_rows($result) > 0) {
						?>
					<div id="myModall" class="modal fade" role="dialog">
		  				<div class="modal-dialog">
		   					<div class="modal-content">
		      					<div class="modal-body">
					        		<table class='table table-bordered table-striped'>
					        	<tr>
					        		<td>id</td>
					        		<td>name</td>
					        		<td>balance</td>
					        		<td>send</td>
					        		
					        	</tr>
					        	<?php
					        		while($row = mysqli_fetch_array($result)) 
					        		{
					        	?>
					        			<tr>
							        			<td><?php echo $row['id']; ?></td>
							        			<td><?php echo $row['name']; ?></td>
							        			<td><?php echo $row['final_balance']; ?></td>
							        			<td><?php echo $row['send']; ?></td>  		
					        			</tr>
					        		<?php
					        		  	}
					        		?>
					        		</table>
		                		</div>
		            		</div>
						</div>
					</div>
					<?php
						}
					?>
<						<?php
							$result=$conn->query("SELECT final_balance,balance FROM  wallet ORDER BY id DESC LIMIT 1");
							$row=mysqli_fetch_array($result)  
						?>
						<div id="myModalll" class="modal fade" role="dialog">
		  						<div class="modal-dialog">
		   							<div class="modal-content">
		      							<div class="modal-body">		
												<h1> <?php echo $row['final_balance']; ?> RWF</h1>
		                				</div>
		            				</div>
								</div>
							</div>
						</body>
					</html>