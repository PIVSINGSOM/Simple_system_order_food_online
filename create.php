<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>Bootstrap 101 Template</title>

	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body>
	<br>
	<br>
	<div class="container">
		<div class="row">
			<div class="col-md-4">
			</div>
			<div class="col-md-4">
				<h1> CREATE ACCOUNT </h1>
				<form name="formjob" action="check_register.php" method="post" enctype="multupart/form-data"><br>
					Firstname <input name="Fname" class="form-control" type="text" placeholder ="firstname" autofocus="autofocus"><br><br>
					Lastname <input name="Lname" class="form-control" type="text" placeholder ="lastname"><br><br>
					Email <input name="email" class="form-control" type="email" placeholder ="example@hotmail.com"><br><br></center>
					Telephone <input name="telephone" class="form-control" type="text" placeholder ="09x-xxxxxx"><br><br>
					Address  <input name="address"  class="form-control" type="text"placeholder ="adress"><br><br>

					Password  <input name="password" class="form-control" type="password" placeholder ="password"><br><br>

					<input type="Submit" name="Insert" class="btn btn-success" value="Insert">
					<a  class="btn btn-danger" href="index.php">Cancle</a>
				</form>
			</div>
			<div class="col-md-4">
			</div>
		</div>
	</div>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/bootstrap.min.js"></script>
</body>
</html>

