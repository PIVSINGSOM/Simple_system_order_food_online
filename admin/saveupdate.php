<?php include('session.php');?>
<?php
$id= $_POST['id'];
$name= $_POST['name'];
$price= $_POST['price'];
$type= $_POST['type'];


$connect=mysqli_connect("localhost","root","","steak");
$sql="update menu set Menu_name='".$name."',Menu_price='".$price."',Type='".$type."' WHERE Menu_ID='".$id."'";
mysqli_query($connect,$sql);
header('location:management.php');


?>