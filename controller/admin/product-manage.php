<?php
include('../../../model/connect.php');
$result = mysqli_query($con, "SELECT *  FROM books ORDER BY dateModified DESC ");
while ($row = mysqli_fetch_array($result)) {
    $id = (int) $row['id'];
    echo "
            <tr>
                <td></td>
                <td><h4>{$row['name']}</h4><br><img width=100 height=100 style=\"object-fit: cover\" src=\"../../../img/products/{$row['image']}\"></td>
                <td>{$row['price']}</td>
                <td>{$row['author']}</td>
                <td>{$row['category']}</td>
                <td>{$row['amount']}</td>
                <td>{$row['dateModified']}</td>
                <td >
                    <button class=\"btn-view\" ><a href=\"./show-product.php?id={$id}\">Xem</a></button>
                    <button onclick='getData(this)' class=\"btn-edit\" data-id=\"{$row['id']}\" >Sửa</button>
                    <button class=\"btn-delete\" onclick=\"askDelete(this)\" data-id=\"{$row['id']}\"  >Xóa</button>
                </td>
                <td>{$row['description']}</td>
            </tr>
        ";
}
?>

