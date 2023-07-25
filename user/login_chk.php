<?php
session_start();
include 'connect.php';

    $email = $_POST['email'];
    $pass = $_POST['password'];
    
    $sql = "SELECT * FROM signup WHERE email='$email' AND password='$pass'";
    $rs = $conn->query($sql);
    $count = mysqli_num_rows($rs);
    $rd = mysqli_fetch_assoc($rs);
    if($count==1)
    {
        // echo "success login";
        $_SESSION['uid'] = $rd['id'];
      header("location: index.php");
    }
    else 
    {
        echo "failed";
    }

    
?>
 
