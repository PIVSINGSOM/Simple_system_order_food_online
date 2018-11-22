<html>
<body>

<center>
<u><h2>UPDATE DETAIL</h2></u>
<?php

	$connect = mysqli_connect("localhost","root","","steak");
	if(!isset($smtUpdate)){
	
	$sql='select* from menu';
	$result = mysqli_query($connect,$sql);

	$numrows = mysqli_num_rows($result);
	$numfields = mysqli_num_fields($result);

	echo '<table border="1" cellspacing="0" cellpadding="3">';

	echo '<tr><td>Menu_ID</td>';
	echo '<td>Menu_name</td>';
	echo '<td>Menu_price</td>';
	echo '<td>Type_ID</td>';
	echo '<td>Update?</td></tr>';

	if(!$result) 
		echo '<b>Error</b>'.mysqli_errno().':'.mysqli_error().'<br>';
	else if ($numrows==0) 
		echo '<b>Query Executed Successfully But no Row return !!</b>';
	else {	
		while ($row = mysqli_fetch_array($result)){	
			
		echo '<form name="frmUpdate'.$row['Menu_ID'].'"method="post" action="updateform2.php">'."\n";
		echo '<tr>';
		for($i=0;$i<$numfields;$i++){
		echo '<td>'.$row[$i].'&nbsp;</td>'."\n";
		}
		echo '<input type="hidden" name="adid" value="'.$row['Menu_ID'].'">'."\n";
		
		echo '<td><input name="smtUpdate" type="submit" value="Update" ></td>'."\n";
		echo'</tr>'."\n";
		echo'</form>'."\n";
		}
	echo'</table>';
	}	
}
mysqli_close($connect);
?></center>
<form name ="Back" action="showreserve.php"method="post">
<p align="center"><input type='submit' value='Back'>
</form>
<form name ="logout" action="logout.php"method="post">
<p align="center"><input type='submit' value='Logout'>
</form>
</body>
