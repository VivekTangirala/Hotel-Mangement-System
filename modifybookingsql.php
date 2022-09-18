<?php

$bookingid=$_POST['bookingid'];
$roomnumber = $_POST['roomnumber'];
$roomtype=$_POST['roomtype'];
$duration=$_POST['duration'];


if (!empty($bookingid) || !empty($roomnumber) || !empty($roomtype)||!empty($duration)) {
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "hms";

    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

    if (mysqli_connect_error()){
        die('connect error('.mysqli_connect_error().')'.mysqli_connect_error());
    }
    else{
        $sql = "UPDATE booking SET duration='$duration',roomtype='$roomtype' WHERE id='$bookingid'";

        if ($conn->query($sql) === TRUE) {
            header('modifiedstatus.php');
        } else {
        echo "Error updating record: " . $conn->error;
        }

        $conn->close();
    }
}
?>