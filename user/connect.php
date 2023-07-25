<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "farmer";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);  

// Check connection
if (!$conn) {
	echo "Connection failed";
}

?>