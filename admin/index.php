<?php include('session.php');?>
<html>
<body>
	<center>
		<!DOCTYPE html>
		<html lang="en">
		<head>
			<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<title>Update</title>
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
						<a class="navbar-brand" href="">Steak Delivery</a>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav">
							

							<li><a href="index.php">Update</a></li>
							<li><a href="complete.php">Complete</a></li>
							<li><a href="management.php">Management</a></li>
							<li><a href="insert.php">Add menu</a></li>
					


						</ul>
						<ul class="nav navbar-nav navbar-right">
							<li><a href="report.php">Report</a></li>
							<li><a href="logout.php">LOGOUT</a></li>
						</ul>
					</div><!-- /.navbar-collapse -->
				</div><!-- /.container-fluid -->
			</nav>
			<div class="container">
				<?php
				$connect = mysqli_connect("localhost","root","","steak");


				$sql='select* from payment WHERE Status=0';
				$result = mysqli_query($connect,$sql);
				$numrows = mysqli_num_rows($result);
				$numfields = mysqli_num_fields($result);

				echo '<table class="table" >';
				echo '<tr><td><b>Pay_ID</b></td>';
				echo '<td><b>Cus_ID</b></td>';
				echo '<td><b>Order_ID</b></td>';
				echo '<td><b>bank</b></td>';
				echo '<td><b>amont</b></td>';
				echo '<td><b>datepayment</b></td>';
				echo '<td><b>address</b></td>';
				echo '<td></td>';
				echo '<td></td></tr>';
				while ($row = mysqli_fetch_array($result)){	
					echo '<tr>';
					echo '<td>'.$row['Pay_ID'].'</td>';
					echo '<td>'.$row['Cus_ID'].'</td>';
					echo '<td>'.$row['Order_ID'].'</td>';
					echo '<td>'.$row['bank'].'</td>';
					echo '<td>'.$row['amount'].'</td>';
					echo '<td>'.$row['datepayment'].'</td>';
					echo '<td>'.$row['address'].'</td>';
					echo '<td>
					<form action="update2.php" method="post">
					<input type="hidden" name="updateid" value="'.$row['Pay_ID'].'">
					<input type="submit" class="btn btn-warning" value="update" >
					</form>
					</td>';
					echo '<td>
					<form action="vieworder.php" method="post">
					<input type="hidden" name="id" value="'.$row['Pay_ID'].'">
					<input type="submit" class="btn btn-info" value="vieworder" >
					</form>
					</td>';
					echo '</tr>';
				}
				echo'</table>';


				mysqli_close($connect);
				?>
			</div>
		</body>

		</html>

