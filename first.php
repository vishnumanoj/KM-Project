<?php include('server.php');
    include('server2.php');
    error_reporting(E_PARSE);

    if(empty($_SESSION['username']))
    {
        header('location: login.php');
    }

?>
<!DOCTYPE html>
<html>
<head>
    <title>Book your vehicle</title>
    <link rel="stylesheet" type="text/css" href="style1.css?version=51">
</head>
<body>
    <div class="vertical-menu ;">
        <a class="active" href="car.php">Car</a>
        <a href="bike.php">Bike</a>
        <!--<a href="cycle.php">Cycle</a>-->
        <a href="history.php">Booking History</a>
        <a href ="index.php?logout='1'" style="color: yellow" >Logout</a>
    </div>
</body>
</html>
