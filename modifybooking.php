<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<center>
<body>
    <form action="modifybookingsql.php" method="POST">
        <h3>Enter booking ID</h3>
        <input type="Integer" class="bookingid" name="bookingid" id="bookingid"></input>
        <h3>Enter new required room number</h3>
        <input type="text" class="roomnumber" name="roomnumber" id="roomnumber"></input>
        <h3>Enter the room type you want to change to</h3>
        <input  type="text" class="roomtype" name="roomtype" id="roomtype"></input>
        <h3>Enter the new duration</h3>
        <input  type="Integer" class="duration" name="duration" id="duration"></input>
        <input type="submit" class="update" name="update" id="update"></input>
    </form>
</body>
</center>
</html>