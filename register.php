<?php
include('db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // write the appropriate code for finding the $usrname, $password, and $sql
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);  
    // encrypt the password before storing to the users table

    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "Registration successful!";
        // write header to redirect login.html
        header("location: login.html");
            exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
