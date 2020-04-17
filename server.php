<?php
    session_start();

    $username = "";
    $email = "";
    $password_1 = "";
    $password_2 = "";
    $errors = array();

    // connect to the database
    $db = mysqli_connect('localhost','root','','registration');

    // if the register button is clicked 
    if (isset($_POST['register']))
    {
        $username = addslashes($_POST['username']);
        $email = addslashes($_POST['email']);
        $password_1 = addslashes($_POST['password_1']);
        $password_2 = addslashes($_POST['password_2']);
    
        // ensure that form fields are filled properly
        if (empty($username))
        {
            array_push($errors, "Username is required"); // add error to errors array
        }
        if (empty($email))
        {
            array_push($errors, "Email is required"); // add error to errors array
        }
        if (empty($password_1))
        {
            array_push($errors, "Password is required"); // add error to errors array
        }

        if($password_1 != $password_2)
        {
            array_push($errors, "The two passwords do not match");
        }

        //if there are no errors, save user to database
        if (count($errors) == 0)
        {
            $password = md5($password_1); // encrypt password before storing in database (security)
            $sql = "INSERT INTO users (username, email, password) 
                        VALUES ('$username', '$email', '$password')";
            mysqli_query($db, $sql);
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "You are now logged in";
            header('location: first.php'); //redirect to home page
        }

    }
    // log user in from login page
    if (isset($_POST['login']))
    {
        $username = addslashes($_POST['username']);
        $password = addslashes($_POST['password']);
    
      // ensure that form fields are filled properly
        if (empty($username))
        {
            array_push($errors, "Username is required"); // add error to errors array
        }
        if (empty($password))
        {
            array_push($errors, "Password is required"); // add error to errors array
        }
        if(count($errors) == 0 )
        {
            $password = md5($password); // encrypt password before comparing with the database
            $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
            $result = mysqli_query($db,$query);
            if (mysqli_num_rows($result) == 1)
            {
                $_SESSION['username'] = $username;
                $_SESSION['success'] = "You are now logged in";
                header('location: first.php'); //redirect to home page
            }
            else
            {
                array_push($errors, "username/password does not match");
                header('location: login.php');
            }
        }    

    }

    //logout
    if (isset($_GET['logout'])) 
    {
        session_destroy();
        unset($_SESSION['username']);
        header('location: login.php');
    }

?>