<?php

$bookingid=$_POST['bookingid'];

if (!empty($bookingid)) {
    
    $conn = mysqli_connect('localhost', 'root', '', 'hms') or die("Failed to connect to database");
    
    $query = "DELETE from booking where id='$bookingid'";
    
    mysqli_query($conn,$query);
    
    header("Location:cancelstatus.php");
} else {
    echo "All fields are required";
    die();
}
?>