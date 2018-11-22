<?php

session_start();
$id = $_SESSION["Cus_ID"];
$connect=mysqli_connect("localhost","root","","steak");

$sql =  "INSERT INTO order (Order_ID,Menu_ID,Cus_ID,Pro_ID,Quantity,Dateorders) VALUES (1,'101','".$id."',,'10',Now()) " ;
if ($connect->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $connect->error;
}

?>