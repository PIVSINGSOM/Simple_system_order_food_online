<?php
$A=$_POST['mid'];
$B=$_POST['mname'];
$C=$_POST['mprice'];
$D=$_POST['typeid'];
$connect = mysqli_connect("localhost","root","","steak");
$sql ="INSERT INTO menu (Menu_ID,Menu_name,Menu_price,Type_ID) VALUES('".$A."','".$B."','".$C."','".$D."')";
$result = mysqli_query($connect,$sql);

	if(!$result)	{

echo mysql_error().'<br>';
	}
	

else { 
	echo '';}

	$sql='SELECT * FROM menu';
	$result = mysqli_query($connect,$sql);
	if(!$result)	
		{
	echo mysql_error().'<br>';
	die('Can not access database');
	}
else
	{
echo '<table border="1" cellpading="0" cellspacing="0" >';
echo '<tr>';
	echo '<td>';
	echo 'Menu_ID';
	echo '</td>';

	echo '<td>';
	echo 'Menu_name';
	echo '</td>';

	echo '<td>';
	echo 'Menu_price';
	echo '</td>';

	echo '<td>';
	echo 'Type_ID';
	echo '</td>';
     echo '</tr>';
	while($row=mysqli_fetch_array($result)){
echo '<tr>';
	echo '<td>'.$row['Menu_ID'].'</td>';
	echo '<td>'.$row['Menu_name'].'</td>';
	echo '<td>'.$row['Menu_price'].'</td>';
	echo '<td>'.$row['Type_ID'].'</td>';
}
	}
mysqli_close($connect);
?>