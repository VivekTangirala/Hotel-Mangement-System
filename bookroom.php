<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Room</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <h1 class="fltyd_title" style="text-align: center;">Book a room</h1>
    <div class="fdbody">
        <div class="select_classes" style="height:400px">
            <div class="classes_comp">
                <form action="bookroomsql.php" method="POST">
                    
                    <h3>Enter date</h3>
                    <input type="text" class="set_date" name='date' id='date' required></input>
                    <h3>Select room number</h3>
                    <input type="text" class="set_room_no" name='room_no' id ='room_no' required></input>
                    <h3> Room type</h3>
                    <input type="text" class="room_type" name='room_type' id ='room_type' required></input>
                    <h3>Duration(days)</h3>
                    <input type="Integer" class="duration" name='duration' id ='duration' required></input>
                   
                    <br></br>
                    <input type="submit" value="Book Room" name="ADD" class="add_button"></input>
                </form>
            </div>
        </div>
    </div>
</body>
</html>