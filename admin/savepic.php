<?php include('session.php');?>
<?php
$image= $_FILES["picname"]["name"];
$id=$_POST['id'];
$connect=mysqli_connect("localhost","root","","steak");
$sql="update menu set Image='".$image."'where Menu_ID='".$id."'";
mysqli_query($connect,$sql);

if(move_uploaded_file($_FILES["picname"]["tmp_name"],"../images/".$_FILES["picname"]["name"])){
	header('Location:management.php');
}



?>