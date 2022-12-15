<?php
    session_start();
    require "connect.php";
    $firstname = $_POST["fname"];
    $lastname = $_POST["lname"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["psw"];
    $cpassword = $_POST["confpsw"];
    $phone = $_POST["num"];

    

    $query = "INSERT INTO customer (firstName, lastName, email, username, password, phoneNumber) 
                        VALUES ('$firstname', '$lastname', '$email', '$username', '$password', '$phone')";

    $_SESSION["fname"] = $firstname;
    $_SESSION["email"] = $email;
    $_SESSION["phone"] = $phone;

    if (mysqli_query($con,$query)) {  
        echo ("<script>alert('Account Registered')</script>");
        header("refresh: 0; url=login.php");
    }
    else {
        echo ("<script>alert('Registration failed')</script>");
        header("refresh: 0; url=register.php");
    }
    mysqli_close($con);

?>