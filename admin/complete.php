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
			</html>
			<div class="container">
				<?php
				$connect = mysqli_connect("localhost","root","","steak");
				if(!isset($smtUpdate)){

					$sql='select* from payment WHERE Status=1';
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



					if(!$result) 
						echo '<b>Error</b>'.mysqli_errno().':'.mysqli_error().'<br>';
					else if ($numrows==0) 
						echo '<b>Query Executed Successfully But no Row return !!</b>';
					else {	
						while ($row = mysqli_fetch_array($result)){	

							echo '<form name="frmUpdate'.$row['Pay_ID'].'"method="post" action="update2.php">'."\n";
							echo '<tr>';
							for($i=0;$i<$numfields-1;$i++){
								echo '<td>'.$row[$i].'&nbsp;</td>'."\n";
							}
							echo '<input type="hidden" name="adid" value="'.$row['Pay_ID'].'">'."\n";


							echo'</form>'."\n";
						}
						echo'</table>';
					}	
				}
				mysqli_close($connect);
				?>
			</div>
		</body>
		</html>
