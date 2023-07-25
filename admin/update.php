<?php
include 'connect.php';

$id = $_POST['id'];
$fname = $_POST['firstName'];
$lname = $_POST['lastName'];
$email = $_POST['email'];
$mno = $_POST['mobileno'];  
$gen = $_POST['gender'];
$addr = $_POST['address'];
$city = $_POST['city'];
$pin = $_POST['areapin'];
$state = $_POST['state'];
$pass = $_POST['password'];


$sql = "UPDATE signup SET firstName='$fname',lastName='$lname',email='$email',mobileno='$mno',gender='$gen',address='$addr',city='$city',areapin='$pin',state='$state',password='$pass'";

$rs = $conn->query($sql);

if ($rs) {
 	// code...
 	header("location:showdata.php");
 } 
?>