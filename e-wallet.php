<!DOCTYPE html>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  	<script type="text/javascript"></script>
	<title></title>
	<style type="text/css">
		body{
			font-family: arial;
		}
		.white-b
		{
			
		}
		.small-box
		{
			width: 90%;height: 20vh;
			background-color: rgba(240,240,240);
			margin-top: 1%;
			border-radius: 50px;
			margin: 80px;
			padding: 30px;
			box-shadow: 5px 10px 8px #333333;

		}
		.large-box
		{
			width: 90%;height: 80vh;
			background-color: rgba(240,240,240);
			margin-top: 2%;
			border-radius: 50px 50px 0px 0px;
			margin: 80px;
			box-shadow: 5px 10px 8px #333333;
		}
		.btn{
			padding: 9px 24px;
			border-radius: 40px;
			float: right;
			width: 85px;
			border: 2px solid black;
		}
		input
{

	margin: 40px 25px;
  	width: 90%;
  	display: block;
  	border: none;
  	padding: 10px 0;
    border-bottom: solid 1px black;
    &:focus, &:valid {
    box-shadow: none;
    outline: none;
    background-position: 0 0;
    &::-webkit-input-placeholder {
      color: black;
      font-size: 11px;
      transform: translateY(-20px);
      visibility: visible !important;
    }
	}
}
.send-btn{
	padding: 9px 24px;
			border-radius: 40px;
}

	</style>
</head>
<body style="padding: 0;
margin: 0;">
<div class="container-fluid white-b" style="background-color:rgba(0,0,0,0.10); width: 100%; height: 160vh; padding: 0; margin: 0;">
	<div class="container-fluid" style=" background-color: black; width: 100%; height: 20vh;padding: 0; margin: 0;">
		<center>
		<div class="row">
			<div class="col-lg-6">
				<h1 style="color: white;">My wallet</h1>
			</div>
			<div class="col-lg-6">
				<i class="fas fa-user"></i>
			</div>
		</div>
	</center>
		</div>
	
		<div class="small-box">
			<center>
			<p  style="font-size: 18px;">Balance</p>
			<h1 style="font-size: 59px;"><b>$10000</b></h1>
			
		</center>
		</div>
		<div class="large-box">
			<h1 style="padding-top:70px;margin-left: 90px;">Transaction History</h1>
			<div class="row" style="padding-top:70px; width: 85%;margin-left: 90px; border-bottom: 1px solid #333333;">
				<div class="col-lg-12">
					<p><b>Send</b></p>
				</div>
			</div>
			<div class="row" style="padding-top:70px;  width: 85%;;margin-left: 90px;  border-bottom: 1px solid #333333;">
				<div class="col-lg-12">
					<p><b>Received</b></p>
				</div>
			</div>
			<div class="row" style="padding-top:70px; width: 85%;;margin-left: 90px;">
				<div class="col-lg-12">
					<p><b>Send</b></p>
				</div>
				<button class="btn" data-toggle="modal" data-target="#myModal">send</button>
			</div>
		</div>
	
	
</div>


<div id="myModal" class="modal fade" role="dialog">
  		<div class="modal-dialog">
   			<div class="modal-content">
      			<div class="modal-body">
       				<form method="POST">
						<h1 style="text-align: center; padding-top: 30px;" ><B>Send</B></h1>
						<input placeholder="Name" type="text" name="name" required="">
				 		<input placeholder="Amount" type="number" name="amount" required="">
  						<button class="btn btn-dafult col-lg-2 send-btn" name="login">Send</button>

					</form>
      			</div>
    		</div>

  		</div>
	</div>
</body>
</html>