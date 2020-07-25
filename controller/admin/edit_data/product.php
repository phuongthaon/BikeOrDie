<?php
    include('../../../model/connect.php');
    $id = trim($_POST['id']);
    $name = trim($_POST['name']);
    if(is_file($_FILES['newImage']['tmp_name'])){
        $img = $_FILES['newImage']['name'];
        $file_tmp = $_FILES['newImage']['tmp_name'];
        move_uploaded_file($file_tmp  , "../../../img/products/$img");
    } else{
        $img = trim($_POST['oldImage']);
    }
    $price = trim($_POST['price']);
    $author = trim($_POST['author']);
    $category = trim($_POST['category']);
    $description = trim($_POST['description']);;
    $amount = trim($_POST['amount']);;
    $dateModified = trim($_POST['dateModified']);
    $result = mysqli_query($con, " UPDATE books SET `name` = '$name', `image`= '$img', price = '$price', author = '$author', category = '$category', description = '$description', amount = '$amount', dateModified = '$dateModified', updated_at= NOW() WHERE id = '$id' ");
    header("Location: ../../../public/view/admin/product-manage.php" );

?>