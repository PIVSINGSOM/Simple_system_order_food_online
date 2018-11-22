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
	
	<br><br>
	<br>
	<br>
	<br>


	<?php 

	$select = $_POST['select'];

	if($select=="Menu"){

		?>
		<div class="container">
			<div class="row">
				<div class="col-md-4">
				</div>
				<div class="col-md-4" style=" border: 1px solid;padding: 10px;box-shadow: 5px 10px #888888;">
					<h1>TYPE</h1>
					<form name=frminsert action="menu.php" method="post"><br><br>
						<div class="form-group">
							<select class="form-control" name='me'  >
								<?php
								$connect=mysqli_connect("localhost","root","","steak");
								$sql='select*from type'; 
								$result=mysqli_query($connect,$sql);
								if(!$result){
									echo mysqli_error().'<br>';
									die('Can not access database!');
								}else{
									while($row=mysqli_fetch_array($result)){
										echo'<option value=';
										echo $row[0];
										echo '>';
										echo $row[1];
										echo'</option>';
									}
									mysqli_close($connect);
								}
								?>
							</select>
						</div>
						<button type="submit" class="btn btn-success">SELECT</button>
					</form>
				</div>
				<div class="col-md-4">
				</div>
			</div>
		</div>

<?php }  //select == menu

if($select=="Promotion") { ?>
<div class="container">
	<form name=frminsert action="promotion.php" method="post">
		<div class="form-group">
			<label >Promotion</label>
			<select class="form-control" name='me'  >
				<?php
				$connect=mysqli_connect("localhost","root","","steak");
				$sql='select*from promotion'; 
				$result=mysqli_query($connect,$sql);
				if(!$result){
					echo mysqli_error().'<br>';
					die('Can not access database!');
				}else{
					while($row=mysqli_fetch_array($result)){
						echo'<option value=';
						echo $row['Pro_ID'];
						echo '>';
						echo $row['Pro_name'];
						echo'</option>';
					}
					mysqli_close($connect);
				}
				?>
			</select>
		</div>
		<button type="submit" class="btn btn-success">SELECT</button>
	</form>
</div>
<?php } //select == promotion?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>