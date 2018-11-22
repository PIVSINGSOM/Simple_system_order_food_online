<?php 
session_start();
include('condb.php');
$start = 0;
$sql = "SELECT * FROM menu WHERE Type = 2 ";
$result = $conn ->query($sql);
$numrow = mysqli_num_rows($result);
$numrow = $numrow /3;
$numrow = ceil($numrow);

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
					<li class="active"><a href="promotion.php">PROMOTION</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="myorder.php">My Orders</a></li>
					<li><a href="logout.php">LOGOUT</a></li>
				</ul>
				<form  action="search.php" method="post" class="navbar-form navbar-right">
					<div class="form-group">
						<input type="text" class="form-control" name="name" placeholder="Name,Menu,Promotion">
					</div>
					<button type="submit" class="btn btn-default">Search</button>
				</form>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>

	<div class="container">
		<?php for($i=0;$i<$numrow;$i++) {
			$sql2 = "SELECT * FROM menu  WHERE Type = 2 LIMIT $start, 3";
			$result2 = $conn ->query($sql2);
			?>
			<div class="row">
				<?php while($row2 = $result2->fetch_assoc()) {  ?>
				<div class="col-md-4 " style="padding: 10px;">
					<div class="thumbnail">
						<img src="images/<?php echo $row2['Image'];?>" style="width: 360px;height: 250px">
						<h4><?php echo $row2['Menu_name'];?></h4>
						<h5 style="color: red;"><?php echo $row2['Menu_price'];?> baht</h5>
						<div>
							<form action="saveorder" method="post">
								<input type="hidden" name="menu" value="<?php echo $row2['Menu_ID'];?>">
								<input type="hidden" name="menuname" value="<?php echo $row2['Menu_name'];?>">
								<input type="submit" class="btn btn-info" value="Add to order">
							</form>
						</div>
					</div>
				</div>
				<?php  } ?>
			</div>
			<?php  $start = $start+3; }?>
		</div>



		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
	</html>