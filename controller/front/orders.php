<?php
    session_start();
    $con = mysqli_connect('remotemysql.com','nTpyCUxUar','ogVcgoIvjH','nTpyCUxUar') or die('Unable To connect');
    $temp = mysqli_query($con, "SELECT * FROM orders WHERE userId = '{$_SESSION['id']}'");
    
?> 