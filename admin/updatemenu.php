<?php include('session.php');?>
<?php
$connect=mysqli_connect("localhost","root","","steak");
$uid=$_POST['updateid'];
$sql="select * from menu WHERE Menu_ID='".$uid."'";
$result=mysqli_query($connect,$sql);
$row=mysqli_fetch_assoc($result);


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
						<form action="saveupdate.php" method="post" enctype="multipart/form-data">
							<div class="form-group">
								<label >Menu name</label>
								<input type="text" name="name" class="form-control" value="<?php echo $row['Menu_name'];?>">
								
							</div>
							<div class="form-group">
								<label >Menu_price</label>
								<input type="text" name="price" class="form-control" value="<?php echo $row['Menu_price'];?>" >
							</div>
							<div class="form-group">
								<label >Type(1=menu,2=promotion)</label>
								<input type="text" name="type" class="form-control" value="<?php echo $row['Type'];?>" >
							</div>
							<input type="hidden" name="id" value="<?php echo $row['Menu_ID'];?>">
							
							<button type="submit" class="btn btn-success">Update</button>
						</form>
						<form action="savepic.php" method="post" enctype="multipart/form-data">
							<div class="form-group">
								<label >IMAGE</label>
								<input type="file" name="picname" class="form-control" >

							</div>
							<input type="hidden" name="id" value="<?php echo $row['Menu_ID'];?>">
							<button type="submit" class="btn btn-warning">Update picture</button>
						</form>
					</div>
					<div class="col-md-4">
					</div>
				</div>
			</div>
		</body>

		</html>

