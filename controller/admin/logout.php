<?php
    unset($_SESSION["email"]);
    unset($_SESSION["pass"]);
    unset($_SESSION["name"]);
    unset($_SESSION["id"]);
    header("Location: ../../public/view/admin/login.php");
?>