<?php include('server2.php');?>

<!DOCTYPE html>
<html>
<head>
    <title>Book your Bike</title>
    <link rel="stylesheet" type="text/css" href="style1.css?version=51">
</head>

<body>
    <h3 align="center">Some recommendations based on your prefereneces</h3>
    <br />
    <table align="center" border="1px">
        <tr>
            <td>Vehicle ID</td>
            <td>Vehicle Name</td>
            <td>Manufacturer</td>
            <td>Price</td>
        </tr>
        <?php
        $conn = mysqli_connect("localhost","root","","vrs");
        if ($conn-> connect_error)
        {
            die("Connection failed:"> $conn-> connect_error);
        }

        $sql = "SELECT VehicleID,Vehiclename,manufacturer,price from bike where style='".$_SESSION['body']."' AND type='".$_SESSION['type']."'";
        $result = $conn-> query($sql);

       while($row = $result->fetch_assoc()){
            echo "<tr><td>". $row["VehicleID"] ."</td><td>". $row["Vehiclename"] ."</td><td>". $row["manufacturer"] ."</td><td>". $row["price"] ."</td></tr>";
        }

        ?>

    </table>
    <br />
    <br />

    <form method="POST" action="first.php">
        <p align="center"><label for="Vehicle">Select VehicleID</label>
        <input align="center"type="number" id = "vehicle" name="vehicle" min="1" max="100"></p>
        <br /><br />
        <p align="center"><button style="margin:auto;" type="submit" name="pushid" class="btn">Go</button></p>
    </form>
</body>

</html>