<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sản phẩm</title>

    <script src="../../js/jquery-3.3.1.min.js"></script>

    <!-- jQuery Modal -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css"/>

    <link rel="stylesheet" href="../../css/admin/index.css" type="text/css">
    <link rel="stylesheet" href="../../css/admin/_form.css" type="text/css">

    <link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" rel="stylesheet" />
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>


   <link rel="stylesheet" href="https://cdn.materialdesignicons.com/2.0.46/css/materialdesignicons.min.css">
</head>
<body>
<?php
    session_start();
    include('../../../controller/admin/index.php');
?>
<?php
    include('../layouts/admin/header.php')
?>
<div class="content">
    <?php
    include('../layouts/admin/sidebar.php')
    ?>
    <div class="content-body">
        <div style="float: left ">
            <h1>Sản phẩm</h1>
        </div>
        <div class="_btn-select"  >
            <a  href="#modal-popup-create" rel="modal:open">Thêm sản phẩm</a>
            <a  id="btn-show-all-doc">Ẩn/Hiện</a>
        </div>

        <table id="table_id" class="display ">
            <thead>
            <tr>
                <th>STT</th>
                <th>Sản phẩm</th>
                <th>Đơn giá</th>
                <th>Tác giả</th>
                <th>Thể loại</th>
                <th>Số lượng trong kho</th>
                <th>Ngày vào kho</th>
                <th>Tùy chọn</th>
                <th class="none">Thông tin về sản phẩm</th>
            </tr>
            </thead>
            <tbody>
                <?php
                include('../../../controller/admin/product-manage.php');
                ?>
            </tbody>
        </table>
    </div>
</div>


<div id="modal-popup" class="modal m-800">
    <div id="modal-content"></div>
</div>

<div id="modal-popup-create" class="modal m-800">
    <form class="__form"  method="POST" action="../../../controller/admin/create/product.php" enctype="multipart/form-data">
        <div class="__header">
            <span>Thêm sản phẩm</span>
        </div>
        <div class="__row">
            <div class="__label"><span>Tên sản phẩm *</span>
                <div class="__sublabel">Tên sản phẩm</div>
            </div>
            <div class="__input"><input type="text" name="name" placeholder="Tên sản phẩm"  required></div>
            <div class="clear"></div>
        </div>
        <div class="__row">
            <div class="__label"><span>Hình ảnh *</span>
                <div class="__sublabel">Hình ảnh</div>
            </div>
            <div class="__input"><input style='border: 0px;' type="file" name="image" accept="image/x-png,image/gif,image/jpeg"  required></div>
            <div class="clear"></div>
        </div>
        <div class="__row">
            <div class="__label"><span>Đơn giá *</span>
                <div class="__sublabel">Đơn giá</div>
            </div>
            <div class="__input"><input type="text" name="price" required></div>
            <div class="clear"></div>
        </div>
        <div class="__row">
            <div class="__label"><span>Tác giả *</span>
                <div class="__sublabel">Tác giả</div>
            </div>
            <div class="__input"><input type="text" name="author"  required></div>
            <div class="clear"></div>
        </div>
        <!-- <div class="__row">
            <div class="__label"><span>Thể loại *</span>
                <div class="__sublabel">Thể loại</div>
            </div>
            <div class="__input"><input type="text" name="category" required ></div>
            <div class="clear"></div>
        </div> -->



        <div class="__row">
            <div class="__label"><span>Thể loại *</span>
                <div class="__sublabel">Thể loại</div>
            </div>
            <div class="__input">
                <select name="category" required>
                    <option>Tiểu thuyết</option>
                    <option>Khoa học</option>
                    <option>Truyện tranh</option>
                </select>
            </div>
            <div class="clear"></div>
        </div>



        <div class="__row">
            <div class="__label"><span>Thông tin chi tiết *</span>
                <div class="__sublabel">Thông tin chi tiết</div>
            </div>
            <div class="__input"><textarea type="text" name="description"  required></textarea></div>
            <div class="clear"></div>
        </div>
        <div class="__row">
            <div class="__label"><span>Số lượng vào kho *</span>
                <div class="__sublabel">Số lượng vào kho</div>
            </div>
            <div class="__input"><input type="number" name="amount" required></div>
            <div class="clear"></div>
        </div>

        <div class="__row">
            <div class="__label"><span>Ngày vào kho *</span>
                <div class="__sublabel">Ngày vào kho</div>
            </div>
            <div class="__input"><input type="date" name="dateModified" min="2019-1-1" max="2030-1-1" required></div>
            <div class="clear"></div>
        </div>

        <div class="__buttons">
            <input type="button" class="cancle __button" onclick="closeForm()" value="Cancle">
            <input type="submit" class="submit __button" name ="submit" value="Submit">
        </div>
    </form>
</div>


<footer class="footer">

</footer>

<script>
    var table = $('#table_id').DataTable({
        responsive: true,
        // scrollX: true
    });
    $('#btn-show-all-doc').on('click', expandCollapseAll);

    function expandCollapseAll() {
        table.rows('.parent').nodes().to$().find('td:first-child').trigger('click').length ||
        table.rows(':not(.parent)').nodes().to$().find('td:first-child').trigger('click')
    }
</script>
<!--<script src="../../js/admin/index.js"></script>-->
<script src="../../js/admin/product-manage.js"></script>

</body>
</html>