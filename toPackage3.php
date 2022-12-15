<?php
    session_start();
	require "connect.php";
	
    $name = $_POST["fullname"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $noPeople = $_POST["noPeople"];
    $date = $_POST["date"];
    $message = $_POST["message"];
    $package = "Package #3";
    $price = "PHP5,000";
    $status = "Unpaid";



    $query = "SELECT * FROM reserve WHERE date = '$date' and packageType = '$package'";
    $result = mysqli_query($con, $query);
    $count = mysqli_num_rows($result);
            
        if ($count==1) {
            echo ("<script>alert('Date is already Reserved. Please set another Date')</script>");
            header("refresh: 0; url=package3.php");
           
        } else if ($count==0){
            
            $query2 = "INSERT INTO reserve (name, email, phone, noPeople, date, message, price, packageType, status)
            VALUES ('$name', '$email', '$phone', '$noPeople', '$date', '$message', '$price', '$package', '$status')";
            $result = mysqli_query($con, $query2);
            $_SESSION["fullname"] = $name;
            $_SESSION["phone"] = $phone;
            echo ("<script>alert('Reserved Successfully')</script>");
            header("refresh: 0; url=myReserve.php");
        }
    
?>