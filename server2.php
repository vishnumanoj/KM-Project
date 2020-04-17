<?php
    if(!isset($_SESSION)){
    session_start();
    }
    /*$username="$_SESSION['username']";*/
    $startdate = "";
    $enddate="";
    $carsize="";
    $transmission="";
    $type="";
    $VehicleID="";

    $db = mysqli_connect('localhost','root','','vrs');

    if (isset($_POST['viewcar']))
    {
        $startdate = addslashes($_POST['start']);
        $enddate = addslashes($_POST['end']);
        $class = addslashes($_POST['carsize']);
        $transmission = addslashes($_POST['transmission']);
        $type = addslashes($_POST['type']);
        $_SESSION['class'] = $class;
        $_SESSION['transmission'] = $transmission;
        $_SESSION['type'] = $type;

        $sql = "INSERT INTO booking (Username , StartDate , EndDate , VehicleType) 
        VALUES ('".$_SESSION['username']."', '".$startdate."', '".$enddate."' , 'Car')";
        mysqli_query($db, $sql);
    }

    $body="";
    $displacement="";
   
    if (isset($_POST['pushid']))
    {
        $VehicleID = addslashes($_POST['vehicle']);
        $sql = "UPDATE booking SET VehicleID = $VehicleID WHERE Username='".$_SESSION['username']."' AND VehicleID IS NULL ";
        mysqli_query($db, $sql);

    }


    if (isset($_POST['viewbike']))
    {
        $startdate = addslashes($_POST['start']);
        $enddate = addslashes($_POST['end']);
        $body = addslashes($_POST['body']);
        $type = addslashes($_POST['type']);
        $_SESSION['body'] = $body;
        $_SESSION['type'] = $type;

        $sql = "INSERT INTO booking (Username , StartDate , EndDate , VehicleType) 
                VALUES ('".$_SESSION['username']."', '".$startdate."', '".$enddate."','Bike')";

        mysqli_query($db, $sql);

    }


    


?>