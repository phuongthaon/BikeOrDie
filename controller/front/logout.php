<?php
    //chuyen ve sign in
    $view_file = '../../public/view/front/sign-in.php';
    session_start();
    // unset toan bo session
    unset($_SESSION["email"]);
    unset($_SESSION["pass"]);
    unset($_SESSION["name"]);
    unset($_SESSION["id"]);
    // unset($_SESSION['active']);
    unset($_SESSION['methodShip']);
    unset($_SESSION['fee']);
    unset($_SESSION['buy']);
    unset($_SESSION['amount']);
    header("Location:" . $view_file);
?>