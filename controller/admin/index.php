<?php
    if(!isset($_SESSION["email"])) {
        header ("Location: login.php");
    }
    else {
    	$email= $_SESSION["email"];
    	include('../../../model/connect.php');
    	$result = mysqli_query($con,"SELECT * FROM admin WHERE email='$email' ");
        $row  = mysqli_fetch_array($result);
        if($row==0){
        	header ("Location: login.php");
        }
    }

?>  
