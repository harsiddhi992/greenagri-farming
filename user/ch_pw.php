<?php
session_start();
include 'connect.php';

$old = $_POST['currentPassword'];
$new = $_POST['newPassword'];
$cpass = $_POST['confirmPassword'];


$id = $_SESSION['uid'];

$sql = "SELECT * FROM signup WHERE id = '$id'";
$rs = $conn->query($sql);
$rd = mysqli_fetch_assoc($rs);
$count = mysqli_num_rows($rs);

if ($count > 0) {  

    $oldpass = $rd['password'];

    if ($oldpass == $old) {

        mysqli_query($conn, "UPDATE signup SET password ='" . $_POST["newPassword"] . "' WHERE id ='" . $_SESSION["uid"] . "'");
        $message = "Password Changed";
        header("location:changepw.php?msg=$message");
        
    } 
    else
    {
        $message = "Current Password is not correct";
        header("location:changepw.php?msgerr=$message");
    }
}
?>