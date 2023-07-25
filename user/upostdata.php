<?php
session_start();
include 'connect.php';
if (isset($_POST['post'])){

$em = $_POST['email'];
$tit = $_POST['title'];
$prob = $_POST['problem'];
$descr = $_POST['description'];
$met = $_POST['method'];
$uses = $_POST['usage'];
$utip = $_POST['usertips'];
$mno = $_POST['contact'];
$addr = $_POST['address'];
$file = $_FILES['myfile']['name'];
$uid = $_SESSION['uid'];

move_uploaded_file($_FILES['myfile']['tmp_name'],"../userpost/".$file);
$img = "../userpost/".$file;

// $file = $_POST['myfile'];

// echo $em;
// echo $tit;
// echo $prob;
// echo $descr;
// echo $met;
// echo $uses;
// echo $utip;
// echo $cont;
// echo $addr;
// echo $file;
// echo $uid;

$sql = "INSERT INTO userpost (uid,email,title,problem,description,method,usa,usertips,contact,address,myfile) VALUES ('$uid','$em','$tit','$prob','$descr','$met','$uses','$utip','$mno','$addr','$img')";

$rd = $conn->query($sql);

if($rd)
{
	header("location:user_postt.php");

}
else 
{
	echo "failed";
}

}

?>