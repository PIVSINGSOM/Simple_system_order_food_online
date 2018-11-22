<?php
session_start();
if(empty($_SESSION['Cus_ID'])){
	header('Location: ../index.php');
}

?>