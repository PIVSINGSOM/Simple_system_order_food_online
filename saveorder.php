<?php
session_start();
include('condb.php');
$id_cus = $_SESSION["Cus_ID"];
$id_order = $_SESSION["Order_ID"];
$menu =  $_POST['menu'];
$menuname = $_POST['menuname'];

$sql = "INSERT INTO orders (Order_ID,Menu_ID,Cus_ID) VALUES ('".$id_order."','".$menu ."','".$id_cus."') ";
$conn->query($sql);

$sql2 = "INSERT INTO report (Menu_ID,Menu_name,Order_ID,Date_report) VALUES ('".$menu ."','".$menuname."','".$id_order."',Now()) ";
$conn->query($sql2);

$message = "Add menu to order complete !!";
echo "<script type='text/javascript'>alert('$message');</script>";
echo "<script type='text/javascript'>setTimeout(function(){window.location = 'menu.php';}, 1);</script>";
?>