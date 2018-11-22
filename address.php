<?php 
session_start();
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
			<div class="col-md-4" style=" border: 1px solid;padding: 10px;box-shadow: 5px 10px #888888;">
				<form action="payment.php" method="post" align="center">
					<br>
					<br>
					<h1>INSERT ADDRESS</h1>
					<div class="form-group">
						<label for="comment">Address:</label>
						<textarea class="form-control" rows="5" name="address"></textarea>
					</div>
					<input type="submit" class="btn btn-success" name="submit" value="Confrim">
					<input type="reset" class="btn btn-warning"  name="reset" value="click reset ">
				</form>
			</div>
			<div class="col-md-4">
			</div>
		</div>
	</div>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>

