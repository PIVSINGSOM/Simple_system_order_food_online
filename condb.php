<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "steak";

// Create connection
$conn = new mysqli($servername, $username, $password,$db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


if(empty($_SESSION['Cus_ID'])){
	header('Location: index.php');
}

?>