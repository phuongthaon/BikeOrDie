<?php
    session_start();
    $message="";
    if(count($_POST)>0) {
        include('../../../model/connect.php');
        $result = mysqli_query($con,"SELECT * FROM users WHERE email='" . $_POST["email"] . "' and password = '". $_POST["password"]."'");
        $row  = mysqli_fetch_array($result);
        if(is_array($row)) {
            //luu du lieu vao session
            $_SESSION["email"] = $row['email'];
            $_SESSION["password"] = $row['password'];
            $_SESSION["name"] = $row['name'];
            $_SESSION["id"] = $row['id'];
            //khoi tao phuong thuc thanh toan mac dinh
            $_SESSION['methodShip'] = "standard";
            $_SESSION['fee'] = 15000;
        } else {
            $message = "Tài khoản hoặc mật khẩu không chính xác !";
        }
    }
    if(isset($_SESSION["email"])) {
        header("Location: index.php");
    }  
?>  