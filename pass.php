<html>
<body>
	<?php 
	session_start();
	$connect = mysqli_connect ("localhost","root","","steak");
	$sql = 'SELECT * FROM customer WHERE Cus_email = "'.$_POST['cus_mail'].' " AND cus_pass = "'.$_POST['cus_pass'].'"' ;
	$result = mysqli_query($connect, $sql);
	$numrows = mysqli_num_rows($result);
	$email = $_POST['cus_mail'];
	if ($numrows == 0){
		$message = "Email or Password is Wrong !!";
		echo "<script type='text/javascript'>alert('$message');</script>";
		echo "<script type='text/javascript'>setTimeout(function(){window.location = 'index.php';}, 1);</script>";
	}else{
		$sql    = "SELECT * FROM customer  WHERE  Cus_email =  '".$email."'  ";
		$result2 =  mysqli_query($connect, $sql);
		$row2 =  mysqli_fetch_assoc($result2);		
		while ($row = mysqli_fetch_array($result)) {

			if($row['Status']=="u"){
				
				$sqlorder = "SELECT * FROM orders  order by Order_ID desc  ";
				$resultorder = mysqli_query($connect, $sqlorder);
				$roworder = mysqli_fetch_assoc($resultorder);
				$orderid = $roworder['Order_ID']+1;
				$_SESSION["Cus_ID"] = $row2['Cus_ID'];
				$_SESSION["Order_ID"] = $orderid;

				header("location:menu.php");
			}
			else if($row['Status']=="A"){
				$_SESSION["Cus_ID"] = $row2['Cus_ID'];
				header("location:admin/index.php");
			}

		}
		mysqli_close($connect);
	}
	?>
</body>
</html>

