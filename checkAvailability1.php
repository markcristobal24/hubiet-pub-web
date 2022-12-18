<?php
    session_start();
    require "connect.php";
    $date = $_POST["check-date"];
    $package = "Package #1";

    $query = "SELECT * FROM archive WHERE date = '$date' and packageType = '$package'";
    $result = mysqli_query($con, $query);
    $count = mysqli_num_rows($result);   

    $query2 = "SELECT * FROM reserve WHERE date = '$date' and packageType = '$package'";
    $result2 = mysqli_query($con, $query2);
    $count2 = mysqli_num_rows($result2);
            if ($count>=1 || $count2 >=1) {
                echo ("<script>alert('Date is already Reserved. Please set another Date')</script>");
                header("refresh: 0; url=reservation.php");
               
            } else if ($count==0 && $count2==0){
                $_SESSION["date"] = $date;            
                header("refresh: 0; url=package1.php");
            }
        
?>