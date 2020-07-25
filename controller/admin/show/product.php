<?php
    include('../../../model/connect.php');
    $id = isset($_GET['id']) ? (int)$_GET['id'] : false;
    if (isset($_GET['id'])) {
        $result = mysqli_query($con, "SELECT *  FROM books WHERE id = '$id'");
        $row = mysqli_fetch_array($result);

        echo "
        <ol>
            <li>
                <div class=\"_col _name\">
                    <p>Tên sản phẩm: {$row['name']} </p>
                </div>
            </li>
            <li>
                <div class=\"_col\">
                    <label>Hình ảnh: </label>
                    <div>
                        <img width= 400 height= 600 style=\"object-fit: cover\" src=\"../../../img/products/{$row['image']}\">
                    </div>
                </div>
            </li>
            <li>
                <div class=\"_col\">
                    <p>Đơn giá: {$row['price']}</p>
                </div>
            </li>
            <li>
                <div class=\"_col\">
                    <p>Tác giả: {$row['author']}</p>
                </div>
            </li>
            <li>
                <div class=\"_col\">
                    <p>Thể loại: {$row['category']}</p>
                </div>
            </li>
            <li>
                <div class=\"_col details\">
                    <label>Chi tiết: </label>
                    <p>{$row['description']}</p>
                </div>
            </li>
            <li>
                <div class=\"_col\">
                    <p>Số lượng còn trong kho: {$row['amount']}</p>
                </div>
            </li>
            <li>
                <div class=\"_col\">
                    <p>Ngày vào kho: {$row['dateModified']}</p>
                </div>
            </li>
            <li>
                <div class=\"_col\">
                    <p>Cập nhật gần đây: {$row['updated_at']}</p>
                </div>
            </li>
        </ol>
        ";
    } else {
        header("Location: ../../../public/view/admin/product-manage.php");
    }
?>