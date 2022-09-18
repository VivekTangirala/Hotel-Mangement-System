<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cancel Booking</title>
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <h1 class="fltyd_title" style="text-align: center;">Cancel your room booking</h1>
    <div class="fdbody">
        <div class="select_classes" style="height:400px">
            <div class="classes_comp">
                <form action="cancelbookingsql.php" method="POST">

                    <h3>Enter your bookingid</h3>
                    <input type="text" class="bookingid" name='bookingid' id='bookingid' required></input>
                    <br></br>
                    <input type="submit" value="Cancel Room" name="ADD" class="add_button"></input>
                </form>
            </div>
        </div>
    </div>
</body>

</html>