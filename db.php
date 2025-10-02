<?php
 // write the appropriate code for finding the $servername, $username, $password, and $dbname
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "my_database";

// Complete the code for create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


