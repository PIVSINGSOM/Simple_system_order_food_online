<?php
$fname = $_POST['Fname'];
$lname =  $_POST['Lname'];
$email = $_POST['email'];
$telephone = $_POST['telephone'];
$pass = $_POST['password'];
$address= $_POST['address'];


if(empty($fname)||empty($lname)||empty($email)||empty($telephone)||empty($pass)||empty($address)){
	$message = "Check Information agian !!";
	echo "<script type='text/javascript'>alert('$message');</script>";
	echo "<script type='text/javascript'>setTimeout(function(){window.location = 'create.php';}, 1);</script>";
}else{

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "steak";
// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	$sql = "INSERT INTO customer (Cus_ID,Cus_name, Cus_lname, Cus_Telephone,Cus_pass,Cus_email,Status,cus_address)
	VALUES (null,'".$fname."','".$lname."','".$telephone."','".$pass."','".$email."','u','".$address."')";
	if ($conn->query($sql) === TRUE) {
		header('Location: index.php');
	} else {
		$message = "Information is worng !!";
		echo "<script type='text/javascript'>alert('$message');</script>";
		echo "<script type='text/javascript'>setTimeout(function(){window.location = 'create.php';}, 1);</script>";
	}
}
?>