<?php
    include('../../../model/connect.php');
    $id = isset($_POST['id']) ? $_POST['id'] : false;

    $listOrders = mysqli_query($con, "SELECT orders.orderId FROM  orders WHERE orders.orderDate ='$id'");
    $stt=1;
    while($order = mysqli_fetch_array($listOrders)){
        $orderdetails= mysqli_fetch_array(mysqli_query($con, "SELECT SUM(totalPayment) AS total FROM `orderdetails` WHERE orderId = '{$order['orderId']}'"));
        echo "
            <tr>
                <td>{$stt}</td>
                <td>{$order['orderId']}</td>
                <td>{$orderdetails['total']}</td>
            </tr>
            ";
        $stt++;
    }
?>