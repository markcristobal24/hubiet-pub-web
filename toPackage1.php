<?php
    require "connect.php";
    $name = $_POST["fullname"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $noPeople = $_POST["noPeople"];
    $date = $_POST["date"];
    $message = $_POST["message"];
    $price = "PHP2,500";
    

    

    $query = "SELECT * FROM reserve WHERE date = '$date'";
    $result = mysqli_query($con, $query);
    $count = mysqli_num_rows($result);
            
        if ($count==1) {
            $query2 = "INSERT INTO reserve (name, email, phone, noPeople, date, message, price)
            VALUES ('$name', '$email', '$phone', '$noPeople', '$date', '$message', '$price')";
            $result = mysqli_query($con, $query2);
            echo ("<script>alert('Reserved Successfully')</script>");
            header("refresh: 0; url=myReserve.php");
           
        } else {
            echo ("<script>alert('Date is already Reserved. Please set another Date')</script>");
            header("refresh: 0; url=package1.php");
        }
    
?>