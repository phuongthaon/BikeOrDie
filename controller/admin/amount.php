<?php
    include('../../../model/connect.php');
    $result = mysqli_query($con, "SELECT orders.orderDate, SUM(totalPayment) AS total 
                                    FROM `orderdetails`, orders  
                                    WHERE orderdetails.orderId=orders.orderId 
                                    GROUP BY orders.orderDate
                                    ORDER BY orders.orderDate DESC ");
    while ( $row = mysqli_fetch_array($result)){
        echo "
            <tr>
                <td>{$row['orderDate']}</td>
                <td>{$row['total']}</td>
                <td >
                    <button class=\"btn-view\" onclick='getData(this)' data-id=\"{$row['orderDate']}\">Xem</button>
                </td>
            </tr>
        ";
    }
?>