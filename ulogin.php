<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

if(!empty($username) || !empty($password)){
    
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "hms";

    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

    if (mysqli_connect_error()){
        die('connect error('.mysqli_connect_error().')'.mysqli_connect_error());
    }
    else{
        $_SESSION['username']=$username;
        $sql = "SELECT * FROM user where username='$username' AND password='$password'";
        $result = mysqli_query($conn, $sql);
        if($result->num_rows > 0){
            header("Location:hoteldashboard.php");
        }
        else{
            echo "Error!";
            echo "Incorrect username or password for :";
            echo "$username";
        }
    }
}
