<!DOCTYPE html>
<html>
<head>
    <title>Book your Car</title>
    <link rel="stylesheet" type="text/css" href="style1.css?version=51">
</head>

<body>
    <br />
    <br />
    <h3 align="center">Your Bookings</h3>
    <br />
    <br />
    <table align="center" border="1px" style=""text-align> 
        <tr>
            <td>Username</td>
            <td>StartDate</td>
            <td>EndDate</td>
            <td>VehicleType</td>
            <td>VehicleID</td>
        </tr>
        <?php
        session_start();  
        $conn = mysqli_connect("localhost","root","","vrs");
        if ($conn-> connect_error)
        {
            die("Connection failed:". $conn-> connect_error);
        }

        $sql = "SELECT Username,StartDate,EndDate,VehicleType,VehicleID from booking WHERE Username = '".$_SESSION['username']."' ";
        $result = $conn-> query($sql);
        
        if($result->num_rows > 0)
        {
            while($row = $result->fetch_assoc())
            {
                echo "<tr><td>". $row["Username"] ."</td><td>". $row["StartDate"] ."</td><td>". $row["EndDate"] ."</td><td>". $row["VehicleType"] ."</td><td>". $row["VehicleID"] ."</td></tr>";
            }
            echo "</table>";
        }
        $conn->close()
        ?>
    </table>
    <form action="first.php">
         <p align="center"><button type="submit">Go back</button></p>
      </form>
</body>
</html>