<?php
    session_start();
    include('../../../model/connect.php');
    if(isset($_GET['orderId'])){
        $orderID = $_GET['orderId'];
        $orderdetails = mysqli_query($con, "SELECT * FROM orderdetails WHERE orderId= '$orderID'");
        $orders = mysqli_query($con, "SELECT * FROM orders WHERE orderId= '$orderID'");
        $order = mysqli_fetch_array($orders);
        $status = "";
        if($order['status'] == '0') $status = "Đang giao";
        if($order['status'] == '1') $status = "Đã giao";
        $fee = 0;
        if($order['methodShip'] == 'standard') $fee = 15000;
        if($order['methodShip'] == 'fast') $fee = 25000;
        if($order['methodShip'] == 'express') $fee = 40000;
        $sum = mysqli_query($con, "SELECT SUM(`totalPayment`) as `totalPayment`, SUM(`quantity`) as `sumQuantity` FROM orderdetails WHERE orderId = '{$orderID}'");
        $total = mysqli_fetch_array($sum);
        $totalPayment = $total['totalPayment'];
        $totalQuantity = $total['sumQuantity'];
        $totalSum = $fee + $totalPayment;
    }
?>