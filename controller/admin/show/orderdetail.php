<?php
include('../../../model/connect.php');
$orderId = isset($_GET['orderId']) ? $_GET['orderId'] : false;
if (isset($_GET['orderId'])) {
    $result = mysqli_query($con, "SELECT * FROM orders WHERE orderId= '$orderId'");
    $row = mysqli_fetch_array($result);
    if($row['methodShip']= 'standard') $methodShip= 'Nhận hàng sau 3-5 ngày';
    elseif($row['methodShip']= 'fast') $methodShip= 'Nhận hàng sau 1-2 ngày';
    else $methodShip= 'Nhận hàng trong ngày';

    if($row['status'] == '0') $status = "Đang giao";
    else if($row['status'] == '1') $status = "Đã giao";


    
    $emailOfUser = mysqli_fetch_array(mysqli_query($con, "SELECT email FROM orders , users WHERE orders.userId = users.id AND orders.orderId = '{$row['orderId']}' "));
    
    echo "
        <ol>
            <li>
                <div class=\"_col _emai\">
                    <p>Email tài khoản mua hàng: {$emailOfUser['email']}</p>
                </div>
            </li>
            <li>
                <div class=\"_col _name\">
                    <p>Mã hóa đơn: {$row['orderId']}</p>
                </div>
            </li>
            <li>
                <div class=\"_col\">
                    <p>Ngày đặt hàng : {$row['orderDate']}</p>
                </div>
            </li>
            <li>
                <div class=\"_col\">
                    <p>Thông tin đơn hàng </p>
                    <table border= \"collapse\" >
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Tên sản phẩm</th>
                                <th>Số lượng</th>
                                <th>Giá</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                        
    ";

    $info= mysqli_query($con, "SELECT books.name, orderdetails.quantity, orderdetails.totalPayment
                                        FROM orderdetails, books
                                        WHERE orderdetails.bookId= books.id AND orderdetails.orderId='$orderId'");
    $index=1;
    $total=0;
    while ($detail= mysqli_fetch_array($info)){
        echo "
             <tr>
                <td>{$index}</td>
                <td>{$detail['name']}</td>
                <td>{$detail['quantity']}</td>
                <td>{$detail['totalPayment']}</td>
             </tr>
             
             ";
        $total += (int) $detail['totalPayment'];
        $index++;
    }



    echo "             </tbody>
                    </table>
                    <p><i>Tổng hóa đơn (không tính ship) : {$total}</i></p>
                </div>
            </li>
            <li>
                <div class=\"_col\">
                    <p>Tên người đặt hàng : {$row['customerName']}</p>
                
                </div>
            </li>
            <li>
                <div class=\"_col\">
                    <p>Địa chỉ nhận hàng: {$row['address']}</p>
                
                </div>
            </li>
            <li>
                <div class=\"_col details\">
                    <p>Số điện thoại liên hệ: {$row['phoneNumber']}</p>
                
                </div>
            </li>
            <li>
                <div class=\"_col\">
                    <p>Phương thức vận chuyển: {$methodShip}</p>
                
                </div>
            </li>
            <li>
                <div class=\"_col\">
                    <p>Trạng thái vận chuyển : {$status}</p>
                
                </div>
            </li>
            
        </ol>
        
        
        ";
} else {
    header("Location: ../../../public/view/admin/orders-manage.php");
}
?>

