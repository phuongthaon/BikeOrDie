<?php
include('../../../model/connect.php');
$id = isset($_POST['id']) ? (int)$_POST['id'] : false;

$result = mysqli_query($con, "SELECT *  FROM users WHERE id= '$id'");
$row = mysqli_fetch_array($result);

echo "
        <form class=\"__form\"  method=\"POST\" action=\"../../../controller/admin/edit_data/user.php\">
            <div class=\"__header\">
                <span>Chỉnh sửa thông tin người dùng</span>
            </div>
            <div class=\"__hidden\">
                <input type=\"hidden\" name=\"id\" value=\"{$row['id']}\">
            </div>
            <div class=\"__row\">
                <div class=\"__label\"><span>Tên người dùng *</span>
                    <div class=\"__sublabel\">Tên người dùng</div>
                </div>
                <div class=\"__input \"><input type=\"text\" name=\"name\" placeholder=\"Tên người dùng\" value=\"{$row['name']}\" required></div>
                <div class=\"clear\"></div>
            </div>
            <div class=\"__row\">
                <div class=\"__label\"><span>Email *</span>
                    <div class=\"__sublabel\">Email</div>
                </div>
                <div class=\"__input\"><input type=\"email\" name=\"email\" value=\"{$row['email']}\"></div>
                <div class=\"clear\"></div>
            </div>
        
            <div class=\"__row\">
                <div class=\"__label\"><span>Mật khẩu</span>
                    <div class=\"__sublabel\">Mật khẩu</div>
                </div>
                <div class=\"__input disabled\"><input type=\"password\" name=\"password\" value=\"{$row['password']}\" ></div>
                <div class=\"clear\"></div>
    
            <div class=\"__buttons\">
                <input type=\"button\" class=\"cancle __button\" onclick='closeForm()' value=\"Cancle\">
                <input type=\"submit\" class=\"submit __button\" name =\"submit\" value=\"Submit\">
            </div>
        
        </form>
    ";


?>