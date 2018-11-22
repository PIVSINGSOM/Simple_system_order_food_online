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
				<div class="row">
					<div class="col-md-4">
					</div>
					<div class="col-md-4">
						<br><br>
						<form action="viewreport.php" method="post">
							<label >Report day:</label>
							<select name="report" multiple class="form-control" style="height: 250px; width: 150px;">
							<?php for($i=0;$i<366;$i++) {?>
							<option value="<?php echo $i;?>">prievious <?php echo $i;?> day </option>
							<?php }?>
							</select>
							<br>
							<button type="submit" class="btn btn-primary">View report</button>
						</form>
					</div>
					<div class="col-md-4">
					</div>
				</div>

			</div>
		</body>

		</html>

