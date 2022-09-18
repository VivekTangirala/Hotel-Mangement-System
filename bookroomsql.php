<?php
session_start();

$username=$_SESSION['username'];
$date = $_POST['date'];
$roomnumber = $_POST['room_no'];
$roomtype = $_POST['room_type'];
$duration = $_POST['duration'];

if (!empty($date) || !empty($roomnumber) || !empty($roomtype) || !empty($duration)) {
    $conn = mysqli_connect('localhost', 'root', '', 'hms') or die("Failed to connect to database");

    $query = "INSERT Into booking(username,date, roomnumber, roomtype,duration) values( '$username', '$date', '$roomnumber',' $roomtype', '$duration')";
    mysqli_query($conn,$query);
    header("Location:bookingstatus.php");
} else {
    echo "All fields are required";
    die();
}
?>