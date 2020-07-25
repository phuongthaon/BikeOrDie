<?php
    include('../../../model/connect.php');
    $id = isset($_POST['id']) ? (int)$_POST['id'] : false;
    $result = mysqli_query($con, "DELETE FROM users WHERE id = '$id'");
    echo "<p></p>";
?>

