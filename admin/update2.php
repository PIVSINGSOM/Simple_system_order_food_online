<?php include('session.php');?>
<?php
$id= $_POST['updateid'];
$connect=mysqli_connect("localhost","root","","steak");
$sql="update payment set Status=1 WHERE Pay_ID='".$id."'";
mysqli_query($connect,$sql);
header('location:index.php');


?>