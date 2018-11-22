<?php 
session_start();
include('condb.php');
$sql = "SELECT *  FROM menu WHERE Menu_ID in (SELECT Menu_ID FROM orders WHERE Order_ID =  '".$_SESSION['Order_ID']."' ) ";
$result = mysqli_query($conn,$sql);
$num = 1;
$total = 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>เมนู</title>
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

	<div class="container">
		<h2>My order</h2>
		<p>Please check your orders</p>            
		<table class="table table-hover">
			<thead>
				<tr>
					<th>#</th>
					<th>Menu_name</th>
					<th>Amount</th>
					<th>Price</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				<?php while($row = mysqli_fetch_assoc($result)) { 
					$countamount = 0;
					$count = "SELECT *  FROM orders WHERE Menu_ID = '".$row['Menu_ID']."' AND Order_ID = '".$_SESSION['Order_ID']."' ";
					$resultcount = mysqli_query($conn,$count);
					while ($rowcount = mysqli_fetch_assoc($resultcount)){
						$countamount++;
					}
					?>
					<tr>
						<td><?php echo $num;?></td>
						<td><?php echo $row['Menu_name'];?></td>
						<td><?php echo $countamount; ?></td>
						<td><?php echo $row['Menu_price'];?></td>
						<td>
							<form action="deleteorder.php" method="POST">
								<input type="hidden" name="id" value="<?php echo $row['Menu_ID'];?>">
								<input type="submit" class="btn btn-danger" value="delete">
							</form>
						</td>
					</tr>
					<?php 
					$total = $total+($row['Menu_price']*$countamount);
					$num++;}

					?>
					<tr>
						<td colspan="3" style="text-align: right;"><b>Total price + delivery 50 baht = </b></td>
						<td><b><i><?php echo number_format($total+50,2);?></i> baht</b></td>
					</tr>
				</tbody>
			</table>
			<?php if($total!=0){?>
			<a href="address.php" class="btn btn-info" style="float: right;">checkout</a>
			<?php }?>
		</div>



		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
	</html>