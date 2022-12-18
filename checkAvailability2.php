<?php
    session_start();
    require "connect.php";
    $date = $_POST["check-date"];
    $package = "Package #2";

    $query = "SELECT * FROM archive WHERE date = '$date' and packageType = '$package'";
        $result = mysqli_query($con, $query);
        $count = mysqli_num_rows($result);   
            if ($count>=1) {
                echo ("<script>alert('Date is already Reserved. Please set another Date')</script>");
                header("refresh: 0; url=reservation.php");
               
            } else if ($count==0){
                $_SESSION["date"] = $date;            
                header("refresh: 0; url=package2.php");
            }
        
?>