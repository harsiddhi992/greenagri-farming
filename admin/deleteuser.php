<?php
include 'connect.php';
$id = $_GET['id'];
$sql = "DELETE FROM signup WHERE id='$id'";
$rd = $conn->query($sql);

if($rd)
{
	header("location: showdata.php?msg=Data Deleted Successfully");
}
?>