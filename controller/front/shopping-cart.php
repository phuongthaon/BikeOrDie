<?php
    session_start();
    $con = mysqli_connect('remotemysql.com','nTpyCUxUar','ogVcgoIvjH','nTpyCUxUar') or die('Unable To connect');
    if(isset($_GET['bookid'])){
        $bookID = $_GET['bookid'];
        $userId = $_SESSION['id'];
        $amount = $_SESSION['amount'];
        $result = mysqli_query($con, "SELECT * FROM books WHERE id = '$bookID'");
        $book = mysqli_fetch_array($result);
        $total = (int)$book['price']*(int)$amount;
        if($_SESSION['buy']){
            $check = mysqli_query($con, "SELECT * FROM cart WHERE bookId = '$bookID' and userId = '$userId'");
            $book_check = mysqli_fetch_array($check);
            $num_check = mysqli_num_rows($check);
            if($num_check > 0){
                $amount+=$book_check['quantity'];
                $total+=$book_check['totalPayment'];
                $putIntoCart = mysqli_query($con, "INSERT INTO cart(`userId`, `bookId`, `quantity`, `totalPayment`) VALUE ('{$userId}', '{$bookID}', '{$amount}', '{$total}')");
                $delBookInCart = mysqli_query($con, "DELETE FROM cart WHERE id = {$book_check['id']}");
            }else
                $putIntoCart = mysqli_query($con, "INSERT INTO cart(`userId`, `bookId`, `quantity`, `totalPayment`) VALUE ('{$userId}', '{$bookID}', '{$amount}', '{$total}')");
            $_SESSION['buy'] = false;
        }
    }
    if(isset($_GET['delete'])){
        $delId = $_GET['delete'];
        $del = mysqli_query($con, "DELETE FROM cart WHERE id = {$delId}");
        echo "delete";
        header("Location: ../../public/view/front/shopping-cart.php");
    }
    if(isset($_GET['deleteAll'])){
        $userID = $_SESSION["id"];
        $del = mysqli_query($con, "DELETE FROM cart WHERE userId = '{$userID}'");
        header("Location: ../../public/view/front/shopping-cart.php");
    }
    if(isset($_GET['methodShip'])){
        $_SESSION['methodShip'] = $_GET['methodShip'];
        if($_SESSION['methodShip'] == "standard"){
            $_SESSION['fee'] = 15000;
        }
        if($_SESSION['methodShip'] == "fast"){
            $_SESSION['fee'] = 25000;
        }
        if($_SESSION['methodShip'] == "express"){
            $_SESSION['fee'] = 40000;
        }
        header("Location: ../../public/view/front/shopping-cart.php");
    }
    $carts = mysqli_query($con, "SELECT * FROM cart WHERE userId = '{$_SESSION["id"]}' ORDER BY id DESC"); 
    $sum = mysqli_query($con, "SELECT SUM(`totalPayment`) as `totalPayment`, SUM(`quantity`) as `sumQuantity` FROM cart WHERE userId = '{$_SESSION["id"]}'");
    $total = mysqli_fetch_array($sum);
    $totalPayment = $total['totalPayment'];
    $totalQuantity = $total['sumQuantity'];
    $totalSum = $_SESSION['fee'] + $totalPayment;
?>