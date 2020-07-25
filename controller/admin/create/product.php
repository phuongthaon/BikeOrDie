<?php
    include('../../../model/connect.php');
    if(isset($_POST['submit'])) {
        $name = trim($_POST['name']);
        $img = $_FILES['image']['name'];
        $file_tmp = $_FILES['image']['tmp_name'];
        $price = trim($_POST['price']);
        $author = trim($_POST['author']);
        $category = trim($_POST['category']);
        $description = trim($_POST['description']);;
        $amount = trim($_POST['amount']);;
        $dateModified = trim($_POST['dateModified']);
        $insert = "INSERT INTO books(`name`, `image`, `price`, `author`, category, description, amount,dateModified)
                                            VALUE ('{$name}', '{$img}', '{$price}', '{$author}', '{$category}', '{$description}', '{$amount}','{$dateModified}')";

        if(mysqli_query($con, $insert)){
            move_uploaded_file($file_tmp  , "../../../img/products/$img");
            header("Location: ../../../public/view/admin/product-manage.php");
        }

    }
?>