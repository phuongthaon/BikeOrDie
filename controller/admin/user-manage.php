<?php
    include('../../../model/connect.php');
    $result = mysqli_query($con, "SELECT *  FROM users ORDER BY created_at DESC");
    $t=1;
    while ( $row = mysqli_fetch_array($result)){
        echo "
            <tr>
                <td>$t</td>
                <td>{$row['name']}</td>
                <td>{$row['email']}</td>
                <td>{$row['created_at']}</td>
                <td>
                 <!--   <button class=\"btn-view\" >Xem</button> -->
                    <button onclick='getData(this)' class=\"btn-edit\" data-id=\"{$row['id']}\" >Sửa</button>
                    <button class=\"btn-delete\" onclick=\"askDelete(this)\" data-id=\"{$row['id']}\"   >Xóa</button>
                </td>
            </tr>
        ";
        $t++;
    }
?>