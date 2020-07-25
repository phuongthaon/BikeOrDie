<?php
    function orderIdRand(){
        $rand = rand(0,999);
        $today = date("Ymd");
        $unique = "ORD".$today."_".$rand;
        return $unique;
    }
    include('../../../model/connect.php');
    //kiem tra xem nếu đặt hàng
    if(isset($_POST['order'])){
        // khởi tạo mã đơn hàng
        $orderId = orderIdRand();
        // lấy gtri tên ng` đặt trong form
        $name = $_POST['name'];
        // lấy gtri địa chỉ trong form
        $address = $_POST['apartmentNumber']." - ".$_POST['ward']." - ".$_POST['district']." - ".$_POST['province'];
        // lấy gtri sdt trong form
        $phone = $_POST['phoneNumber'];      
        // thêm các thông tin vào bảng 
        $tmp = mysqli_query($con,"INSERT INTO orders(`orderId`, `userId`, `orderDate`, `methodShip`, `status`, `customerName`, `address`, `phoneNumber`) VALUES ('{$orderId}', '{$_SESSION['id']}', NOW(), '{$_SESSION['methodShip']}', '0', '{$name}', '{$address}', '{$phone}')");
        // lấy ra các đơn hàng trong giỏ chuyển sang order details
        $cart = mysqli_query($con,"SELECT * FROM cart WHERE userId = '{$_SESSION['id']}'");
        while($product = mysqli_fetch_array($cart)){
            $temp = mysqli_query($con,"INSERT INTO orderdetails(`orderId`, `bookId`, `quantity`, `totalPayment`) VALUES ('{$orderId}', '{$product['bookId']}', '{$product['quantity']}', '{$product['totalPayment']}')");
            // tru so luong sach
            $amountofBooks = mysqli_fetch_array(mysqli_query($con, "SELECT amount FROM books WHERE id = '{$product['bookId']}'"));
            $amount = mysqli_query($con, "UPDATE books SET amount = ({$amountofBooks['amount']} - {$product['quantity']}) , updated_at = NOW() WHERE id = '{$product['bookId']}'");
        }
        // xoa sp trong gio hang sau khi dat hang
        $del = mysqli_query($con, "DELETE FROM cart WHERE userId = '{$_SESSION['id']}'");
        // chuyen trang sang orders.php
        header("Location: orders.php");
    }
?> 