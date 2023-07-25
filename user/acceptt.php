<?php
include 'connect.php';
$id = $_GET['id'];
$op = $_GET['op'];

$sql = "UPDATE userpost SET status='$op' WHERE id='$id'";
$rs = $conn->query($sql);

if ($rs) {
 	// code...
 	header("location:userpostt.php");
 } 
?>