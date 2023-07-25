<?php

include 'connect.php';

if (isset($_POST['send'])){


$name = $_POST['Name'];
$email = $_POST['Email'];
$mno = $_POST['Phone'];
$mes = $_POST['Message'];

$sql = "INSERT INTO contact (Name,Email,Phone,Message) VALUES ('$name','$email','$mno','$mes')";

$link = $conn->query($sql);  // here $conn is a variable which is create during connection file so the name have to be same as written in connection file

if($link)
{
		header("location:contactdata.php?");
	    // echo "insert Successfully";
}
else 
{
	echo "failed";
}


}
?>
