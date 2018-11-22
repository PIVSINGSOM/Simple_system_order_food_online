<?php include('session.php');?>
<?php
$name= $_POST['name'];
$price= $_POST['price'];
$type= $_POST['type'];
$image= $_FILES["image"]["name"];
$connect=mysqli_connect("localhost","root","","steak");
$sql="Insert into menu (Menu_name,Menu_price,Image,Type) VALUES('".$name."','".$price."','".$image."','".$type."')";
mysqli_query($connect,$sql);

if(move_uploaded_file($_FILES["image"]["tmp_name"],"../images/".$_FILES["image"]["name"])){
	header('Location:management.php');
}



?>