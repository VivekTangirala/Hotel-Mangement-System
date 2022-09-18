<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Time Table</title>
    <link rel="stylesheet" href="index.css">
</head>
<center>

    <body>
        <h2>Past Bookings</h2>
        <div class="table" style="align-items:center; text-align:center">
            <table>
                <tbody>
                    <tr>
                        <th>bookingid</th>
                        <th>username</th>
                        <th>Date</th>
                        <th>roomno</th>
                        <th>roomtype</th>
                        <th>duration</th>
                    </tr>
                    <?php
                    session_start();
                    $username = $_SESSION['username'];
                    $host = "localhost";
                    
                    $dbUsername = "root";
                    $dbPassword = "";
                    $dbname = "hms";

                    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

                    $sql = "SELECT * from booking where username='$username'";
                    $res = mysqli_query($conn, $sql);

                    $num = mysqli_num_rows($res);

                    // $result = mysqli_fetch_array($res);

                    while ($result = mysqli_fetch_array($res)) {

                    ?>

                        <tr>
                            <th><?php echo $result['id']; ?></th>
                            <th><?php echo $result['username']; ?></th>
                            <th><?php echo $result['date']; ?></th>
                            <th><?php echo $result['roomnumber']; ?></th>
                            <th><?php echo $result['roomtype']; ?></th>
                            <th><?php echo $result['duration']; ?></th>
                        </tr>

                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </body>
</center>

</html>