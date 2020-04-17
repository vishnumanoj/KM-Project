<?php include('server2.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Book your Car</title>
    <link rel="stylesheet" type="text/css" href="style1.css?version=51">
</head>
<body>
    <form method="POST" action="car1.php">
        <div class="calender ;" >
            <p style>Choose the dates to book your vehicle</p><br /><br />
            <label for="start0">From</label>
            <input type="date" id="start0" name="start" class="date">
            <label for="end0">To</label>
            <input type="date" id="end0" name="end" class="date">
            <br /><br />
            <label for="car type">Number of People:</label>
            <select id="car type" name="carsize">
                <option value="">Select</option>
                <option value="Hatchback">1 - 2(small boot space)</option>
                <option value="Sedan">4 or less</option>
                <option value="SUV">5 - 6</option>
            </select>
            <br />
            <label for="transmission">Journey Type:</label>
            <select id="transmission" name="transmission" >
                <option value="">Select</option>
                <option value="M">Manual</option>
                <option value="A">Automatic</option>
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
        <p align="center"><button style="margin:auto;" type="submit" name="viewcar" class="btn">Go</button></p>   
    </form>
</body>

</html>