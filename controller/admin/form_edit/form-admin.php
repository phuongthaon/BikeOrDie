<?php

    include('../../../model/connect.php');

    $__id = isset($_POST['id']) ? $_POST['id'] : false;
    $___admin = mysqli_fetch_array(mysqli_query($con, "SELECT *  FROM admin  WHERE id= '$__id'"));
//action = "../../../controller/admin/edit_data/adminEdit.php"
echo "
   <form class=\"__form\"  method=\"POST\" action = \"../../../controller/admin/edit_data/adminEdit.php\" enctype=\"multipart/form-data\" onsubmit= \"return validateFormEdit()\">
                <div class=\"__header\">
                    <span>Chỉnh sửa thông tin</span>
                </div>
                <div class=\"__hidden\">
                    <input type=\"hidden\" name=\"__id\" value=\"{$__id}\">
                    <input type=\"hidden\" name=\"oldImage\" value=\"{$___admin['avatar']}\">
                </div>
                <div class=\"__row\">
                    <div class=\"__label\"><span>Tên quản trị viên*</span>
                        <div class=\"__sublabel\">Tên quản trị viên</div>
                    </div>
                    <div class=\"__input\"><input type=\"text\" name=\"__name\" value=\"{$___admin['name']}\" required></div>
                    <div class=\"clear\"></div>
                </div>

                <div class=\"__row\">
                    <div class=\"__label\"><span>Số điện thoại </span>
                        <div class=\"__sublabel\">Gồm 10 số bắt đầu từ 0</div>
                    </div>
                    <div class=\"__input\"><input  type=\"tel\" name=\"__phoneNumber\" value=\"{$___admin['phoneNumber']}\" pattern= \"0[0-9\s.-]{9}\" required></div>
                    <div class=\"clear\"></div>
                </div>

                <div class=\"__row\">
                    <div class=\"__label\"><span>Avatar</span>
                        <div class=\"__sublabel\">Nhấn chọn nếu muốn thay đổi</div>
                    </div>
                    <div class=\"__input\"><input style='border: 0px;' type=\"file\" name=\"newImage\" accept=\"image/x-png,image/gif,image/jpeg\" ></div>
                    <div class=\"clear\"></div>
                </div> 


                <div class=\"__row\">
                    <div class=\"__label\"><span>Email *</span>
                        <div class=\"__sublabel\">Email</div>
                    </div>
                    <div class=\"__input\"><input id=\"_email\" type=\"email\" name=\"__email\" value=\"{$___admin['email']}\" pattern=\".+@.+(\.[a-z]{2,3}){1,2}\" required></div>
                    <div class=\"clear\"></div>
                </div>
                
                <div class=\"__row\">
                    <div class=\"__label\"><span>Mật khẩu *</span>
                        <div class=\"__sublabel\">Tối thiểu 6 kí tự</div>
                    </div>
                    <div class=\"__input\"><input id=\"_ps\" type=\"password\" name=\"__password\"  value=\"{$___admin['password']}\" pattern=\"^.{6,}$\" required></div>
                    <div class=\"clear\"></div>
                </div>
                <div class=\"__row\">
                    <div class=\"__label\"><span>Nhập lại mật khẩu *</span>
                        <div class=\"__sublabel\">Nhập lại mật hẩu</div>
                    </div>
                    <div class=\"__input\"><input id=\"_reps\" type=\"password\" name=\"__confirmPassword\" value=\"{$___admin['password']}\" pattern=\"^.{6,}$\" required></div>
                    <div class=\"clear\"></div>
                </div>

                
                <div class=\"__buttons\">
                    <input type=\"button\" class=\"cancle __button\" onclick=\"closeForm()\" value=\"Cancle\">
                    <input type=\"submit\" class=\"submit __button\"   name =\"__submit\" value=\"Submit\">
                </div>
                
            </form>

";



// onsubmit=\"return validateFormEdit()\"
?>