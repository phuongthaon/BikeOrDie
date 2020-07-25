<?php

$view_file = 'sign-in.php';

// kết nối với csdl
include('../../../model/connect.php');
// xử lý from đăng ký
$name = $email = $phoneNumber = $password = $confirmPassword = '';
$passwordIsNotMatch = $emailUsed = '';
if (isset($_POST['register'])) {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $confirmPassword = trim($_POST['confirmPassword']);

    // kiểm tra dữ liệu
    $isPassed = true;
    if ($password != $confirmPassword) {     
        $passwordIsNotMatch = "Xác thực mật khẩu không chính xác, vui lòng nhập lại !";
        $isPassed = false;
    }
    

    // đăng kí tài khoản nếu hoàn tất phần kiểm tra

    if ($isPassed) {
        // kiểm tra xem email nhập vào đã tồn tại hay chưa
        $result = mysqli_query($con, "SELECT * FROM users WHERE email= '$email' ");
        $num = mysqli_num_rows($result);
        if ($num > 0) {
           
            $emailUsed = "E-mail này đã được sử dụng. Vui lòng đăng ký lại !";  
        } else {
            $result = mysqli_query($con, "INSERT INTO users (name, email, password, created_at ) VALUE ('$name' , '$email', '$password', NOW()  )");
            

            header("Location:" . $view_file);
           
            //chuyển về trang đăng nhập

            exit();
        }
    }
}

?>