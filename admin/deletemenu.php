<?php include('session.php');?>
<?php
$id= $_POST['deleteid'];
$connect=mysqli_connect("localhost","root","","steak");
$sql="delete from menu WHERE Menu_ID='".$id."'";
mysqli_query($connect,$sql);
header('location:management.php');


?>