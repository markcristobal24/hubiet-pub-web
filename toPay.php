<?php
    require "connect.php";
    $reserveId = $_POST["reserveId"];
    $gcashNo = $_POST["gcash"];
    $referenceNo = $_POST["reference"];
    $amountNo = $_POST["amount"];
    $status = "PAID";

    $query = "INSERT INTO payment (reserveId, gcash, reference, amount) VALUES ('$reserveId', '$gcashNo', '$referenceNo', '$amountNo')";

    if (mysqli_query($con, $query)) {
        $query = "UPDATE reserve SET status = '$status' WHERE reserveId = '$reserveId'";
        mysqli_query($con, $query);
        echo ("<script>alert('Payment Succesfully')</script>");
        header("refresh: 0; url=myReserve.php");
    }
    else {
        echo ("<script>alert('Payment Failed')</script>");
        header("refresh: 0; url=toPay.php");
    }
    mysqli_close($con);

?>