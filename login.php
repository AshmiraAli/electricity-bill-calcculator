<?php
session_start();
include('db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // write the appropriate code for finding the $usrname, $password, and $sql
    $username =$_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "SELECT * FROM users WHERE username = '$username'";
    

    if ($conn->query($sql)->num_rows > 0) {
        $row = $conn->query($sql)->fetch_assoc();
        
        // complete password_verify
        if (password_verify($_POST['password'],$row['password'])) 
        { 
            $_SESSION['username'] = $username;
            echo "Login successful!";
            // write header to redirect display.html
            header("location: display.html");
            exit();
            
        } else {
            echo $password." Incorrect password!";
        }
    } else {
        echo "User not found!";
    }
}

$conn->close();
?>
