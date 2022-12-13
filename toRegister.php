<?php
    require "connect.php";
    $firstname = $_POST["fname"];
    $lastname = $_POST["lname"];
    $username = $_POST["username"];
    $password = $_POST["psw"];
    $cpassword = $_POST["confpsw"];
    $phone = $_POST["num"];

    $query = "INSERT INTO customer (firstName, lastName, username, password, phoneNumber) 
                        VALUES ('$firstname', '$lastname', '$username', '$password', '$phone')";

    if (mysqli_query($con,$query)) {
        $_SESSION["firstname"] = $firstname;
        echo ("<script>alert('Account Registered')</script>");
        header("refresh: 0; url=login.php");
    }
    else {
        echo ("<script>alert('Registration failed')</script>");
        header("refresh: 0; url=register.php");
    }
    mysqli_close($con);

?>