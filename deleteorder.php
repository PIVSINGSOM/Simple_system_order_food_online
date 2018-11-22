<?php
session_start();
include('condb.php');
$id_cus = $_SESSION["Cus_ID"];
$id_order = $_SESSION["Order_ID"];
$id_menu = $_POST['id'];


$sql = "DELETE FROM orders WHERE Cus_ID = '".$id_cus."' and Order_ID = '".$id_order."' and Menu_ID = ".$id_menu." ";

$sql2 = "DELETE FROM report WHERE Order_ID = '".$id_order."' and Menu_ID = ".$id_menu." ";

$conn->query($sql2);

if ($conn->query($sql) === TRUE) {

$message = "Delete order complete !!";
echo "<script type='text/javascript'>alert('$message');</script>";
echo "<script type='text/javascript'>setTimeout(function(){window.location = 'myorder.php';}, 1);</script>"; 

} else {
    echo "Error deleting record: " . $conn->error;
}


?>