<?php
include 'connect.php';

    $email = $_POST['email'];
    $pass = $_POST['password'];
    
    $sql = "SELECT * FROM signup WHERE email='$email' AND password='$pass'";
    $rs = $conn->query($sql);
    $count = mysqli_num_rows($rs);

    if($count==1)
    {
        echo "success login";
    }
    else 
    {
        echo "failed";
    }

    
?>
 
