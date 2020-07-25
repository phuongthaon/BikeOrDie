<?php
include('../../../model/connect.php');
$id = isset($_POST['id']) ? (int)$_POST['id'] : false;



$result = mysqli_query($con, "SELECT *  FROM books WHERE id= '$id'");
$row = mysqli_fetch_array($result);

echo "
        <form class=\"__form\"  method=\"POST\" action=\"../../../controller/admin/edit_data/product.php\" enctype=\"multipart/form-data\">
            <div class=\"__header\">
                <span>Chỉnh sửa sản phẩm</span>
            </div>
            <div class=\"__hidden\">
                <input type=\"hidden\" name=\"id\" value=\"{$row['id']}\">
                <input type=\"hidden\" name=\"oldImage\" value=\"{$row['image']}\">
            </div>
            <div class=\"__row\">
                <div class=\"__label\"><span>Tên sản phẩm *</span>
                    <div class=\"__sublabel\">Tên sản phẩm</div>
                </div>
                <div class=\"__input\"><input type=\"text\" name=\"name\" placeholder=\"Tên sản phẩm\" value=\"{$row['name']}\" required></div>
                <div class=\"clear\"></div>
            </div>
            <div class=\"__row\">
                <div class=\"__label\"><span>Hình ảnh</span>
                    <div class=\"__sublabel\">Nhấn chọn nếu muốn thay đổi</div>
                </div>
                <div class=\"__input\"><input style='border: 0px;' type=\"file\" name=\"newImage\" accept=\"image/x-png,image/gif,image/jpeg\" ></div>
                <div class=\"clear\"></div>
            </div> 
            <div class=\"__row\">
                <div class=\"__label\"><span>Đơn giá *</span>
                    <div class=\"__sublabel\">Đơn giá</div>
                </div>
                <div class=\"__input\"><input type=\"number\" name=\"price\" value=\"{$row['price']}\" ></div>
                <div class=\"clear\"></div>
            </div>
            <div class=\"__row\">
                <div class=\"__label\"><span>Tác giả</span>
                    <div class=\"__sublabel\">Tác giả</div>
                </div>
                <div class=\"__input\"><input type=\"text\" name=\"author\" value=\"{$row['author']}\" ></div>
                <div class=\"clear\"></div>
            </div>
       

            <div class=\"__row\">
                <div class=\"__label\"><span>Thể loại </span>
                    <div class=\"__sublabel\">Thể loại</div>
                </div>
                <div class=\"__input\">
                    <select name=\"category\"  >
                        <option>{$row['category']}</option>
                        <option>Tiểu thuyết</option>
                        <option>Khoa học</option>
                        <option>Truyện tranh</option>
                    </select>
                </div>
                <div class=\"clear\"></div>
            </div>

            <div class=\"__row\">
                <div class=\"__label\"><span>Thông tin chi tiết</span>
                    <div class=\"__sublabel\">Thông tin chi tiết</div>
                </div>
                <div class=\"__input\"><textarea type=\"text\" name=\"description\"  >{$row['description']}</textarea></div>
                <div class=\"clear\"></div>
            </div>
            <div class=\"__row\">
                <div class=\"__label\"><span>Số lượng trong kho</span>
                    <div class=\"__sublabel\">Số lượng trong kho</div>
                </div>
                <div class=\"__input\"><input type=\"number\" name=\"amount\" min=\"10\" value=\"{$row['amount']}\"></div>
                <div class=\"clear\"></div>
            </div>
           

            <div class=\"__row\">
                <div class=\"__label\"><span>Ngày vào kho</span>
                    <div class=\"__sublabel\">Ngày vào kho</div>
                </div>
                <div class=\"__input disabled\"><input type=\"date\" name=\"dateModified\" min=\"2019-1-1\" max=\"2030-1-1\" value=\"{$row['dateModified']}\"></div>
                <div class=\"clear\"></div>
            </div>
    
            <div class=\"__buttons\">
                <input type=\"button\" class=\"cancle __button\" onclick='closeForm()' value=\"Cancle\">
                <input type=\"submit\" class=\"submit __button\" name =\"submit\" value=\"Submit\">
            </div>
        
        </form>
    ";


?>