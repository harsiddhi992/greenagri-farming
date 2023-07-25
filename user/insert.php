<?php


include 'connect.php'; //here i have coonnected file for check connection fo db

if (isset($_POST['post'])){


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


$sql = "INSERT INTO signup (firstName,lastName,email,mobileno,gender,address,city,areapin,state,password) VALUES ('$fname','$lname','$email','$mno','$gen','$addr','$city','$pin','$state','$pass')";

$link = $conn->query($sql);  // here $conn is a variable which is create during connection file so the name have to be same as written in connection file

if($link)
{
	header("location:showdata.php?err=Successfully Register");
	    // echo "insert Successfully";
}
else 
{
	echo "failed";
}


}
?>