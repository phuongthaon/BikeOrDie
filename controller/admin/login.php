<?php
    session_start();
    unset($_SESSION["email"]);
    unset($_SESSION["pass"]);
    unset($_SESSION["name"]);
    $message="";
    if(isset($_POST["submit"])) {
        include('../../../model/connect.php');
        $result = mysqli_query($con,"SELECT * FROM admin WHERE email='" . $_POST["email"] . "' and password = '". $_POST["password"]."'");
        $row  = mysqli_fetch_array($result);
        if(is_array($row)) {
            $_SESSION["email"] = $row['email'];
            $_SESSION["password"] = $row['password'];
            $_SESSION["name"] = $row['name'];
            $_SESSION["id"] = $row['id'];
            header("Location: index.php");
        } else {
            $message = "Tài khoản hoặc mật khẩu không chính xác !";
        }
    }
    // if(isset($_SESSION["email"])) {
    //     if( (int) $row['authorization'] == 0){
    //         header("Location: index.php");
    //     }else{
    //         $message = "Tài khoản hoặc mật khẩu không chính xác !";
    //     }      
    // }
?>  
