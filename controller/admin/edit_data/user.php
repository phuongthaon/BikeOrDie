<?php
    include('../../../model/connect.php');
    $id = trim($_POST['id']);
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $result = mysqli_query($con, " UPDATE users SET email = '$email', `name`= '$name', updated_at= NOW() WHERE id = '$id' ");
    header("Location: ../../../public/view/admin/user-manage.php" );

?>