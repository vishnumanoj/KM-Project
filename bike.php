<?php include('server2.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Book your Car</title>
    <link rel="stylesheet" type="text/css" href="style1.css?version=51">
</head>
<body>
    <form method="POST" action="bike1.php">
        <div class="calender ;" >
            <p style>Choose the dates to book your vehicle</p><br /><br />
            <label for="start0">From</label>
            <input type="date" id="start0" name="start" class="date">
            <label for="end0">To</label>
            <input type="date" id="end0" name="end" class="date">
            <br /><br />
            <label for="body">Choose a body type:</label>
            <select id="body" name="body">
                <option value="">Select</option>
                <option value="Cruiser">Cruiser</option>
                <option value="Sport">Sport</option>
                <option value="Street">Street</option>
                <option value="Scooter">Scooter</option>
            </select>
            <br />
            <label for="type">Vehicle Type</label>
            <select id="type" name="type">
                <option value="">Select</option>
                <option value="Economical">Economical</option>
                <option value="Premium">Luxurious</option>
            </select>
            <br />
        </div>
        <br /><br />
        <p align="center"><button style="margin:auto;" type="submit" name="viewbike" class="btn">Go</button></p>   
    </form>
</body>

</html>