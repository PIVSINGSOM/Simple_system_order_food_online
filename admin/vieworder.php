<?php include('session.php');?>
<?php 
$id = $_POST['id'];
$connect = mysqli_connect("localhost","root","","steak");

$sql = "SELECT * FROM payment where Pay_ID = '".$id."' ";
$result = $connect->query($sql);
$row = mysqli_fetch_assoc($result);



$sqlmenu = "SELECT * FROM menu WHERE Menu_ID in (SELECT Menu_ID FROM orders WHERE Order_ID = '".$row['Order_ID']."') ";
$resultmenu = $connect->query($sqlmenu);


$total = 0;
?>
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
				<div class="row">
					<div class="col-md-4">
					</div>
					<div class="col-md-4" style=" border: 1px solid;padding: 10px;box-shadow: 5px 10px #888888;">
						<h1>OrderID: <?php echo $row['Order_ID'];?> </h1>
						<br>

						<?php while($rowmenu = mysqli_fetch_assoc($resultmenu)){
							$countamount = 0;

							$count = "SELECT *  FROM orders WHERE Menu_ID = '".$rowmenu['Menu_ID']."' AND Order_ID = '".$row['Order_ID']."' ";
							$resultcount = mysqli_query($connect,$count);

							while ($rowcount = mysqli_fetch_assoc($resultcount)){
								$countamount++;
							}

							$total = $total+($rowmenu['Menu_price']*$countamount)
							?>

							<h5 style="text-align: left;"><b>Menu Name:</b> <a><?php echo $rowmenu['Menu_name'];?></a></h5>
							<h5 style="text-align: left;"><b>Amount:</b><a><?php echo $countamount;?></a></h5>
							<h5 style="text-align: left;"><b>Price:</b><a><?php echo $rowmenu['Menu_price'];?></a></h5>
							<br>
							<?php }?>
							<h5 style="text-align: left;"><b>Total:</b> <a><?php echo number_format($total,2);?> baht</a></h5>
							<h5 style="text-align: left;"><b>Address:</b> <a><?php echo $row['address'];?></a></h5>

						</div>
						<div class="col-md-4">
						</div>
					</div>
				</div>
			</body>

			</html>

