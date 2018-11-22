<?php
session_start();
include('condb.php');
$bank = $_POST['bank'];
$date = $_POST['date'];
$mouth = $_POST['mouth'];
$year = $_POST['year'];
$hours1 = $_POST['hours1'];
$hours2 = $_POST['hours2'];
$min1 = $_POST['min1'];
$min2 = $_POST['min2'];
$amount = $_POST['amount'];
$address = $_POST['address'];

$datetime = $date."-".$mouth."-".$year." ".$hours1.$hours2.":".$min1.$min2;

$sql = "INSERT INTO payment (Cus_ID,Order_ID,bank,amount,datepayment,address,Status) VAlUES ('".$_SESSION['Cus_ID']."','".$_SESSION['Order_ID']."','".$bank."','".$amount."','".$datetime."','".$address."',0)" ;
if ($conn->query($sql) === TRUE) {
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$_SESSION['Order_ID'] =  $_SESSION['Order_ID']+1;

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bootstrap 101 Template</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<nav class="navbar navbar-inverse">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="menu.php">Steak Delivery</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li ><a href="menu.php">MENU <span class="sr-only">(current)</span></a></li>
					<li><a href="promotion.php">PROMOTION</a></li>
				</ul>

				<ul class="nav navbar-nav navbar-right">

					<li class="active"><a href="myorder.php">My Orders</a></li>
					<li ><a href="logout.php">LOGOUT</a></li>

				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>

	<br><br><br>
	<div class="container">
		<div class="row">
			<div class="col-md-4">
			</div>
			<div class="col-md-4" style=" border: 1px solid;padding: 10px;box-shadow: 5px 10px #888888;text-align: center;">
				<h1 style="text-align: center;">Thank you !!</h1>
				<a href="menu.php" class="btn btn-success" style="text-align: center;">back to frist page</a>
			</div>
			<div class="col-md-4">
			</div>
		</div>
	</div>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>