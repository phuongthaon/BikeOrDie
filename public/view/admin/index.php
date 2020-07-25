<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <script src="../../js/jquery-3.3.1.min.js"></script>

    <!-- jQuery Modal -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css"/>


    <link rel="stylesheet" href="../../css/admin/index.css" type="text/css">

    <link href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" rel="stylesheet" />
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>


   <link rel="stylesheet" href="https://cdn.materialdesignicons.com/2.0.46/css/materialdesignicons.min.css">
</head>
<body>
    <?php
        session_start();
        include('../../../model/connect.php');
        include('../../../controller/admin/index.php');
    ?>
    <?php
        include('../layouts/admin/header.php')
    ?>
    <div class ="content">
        <?php
            include('../layouts/admin/sidebar.php')
        ?>
        <div class="content-body">
            <div><h1>Doanh thu<h1></div>
            <table id="table_id" class="display" >
                <thead>
                    <tr>
                        <th>Thời gian</th>
                        <th>Số tiền thu được</th>
                        <th>Tùy chọn</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        include('../../../controller/admin/amount.php');
                    ?>
                </tbody>
            </table>
        </div>
        
        <div class= "xxxx">
            
        <div><h1>Tổng hợp<h1></div>
            <div class="_____row">
                <div class="_____name">Hàng hóa</div>
                <div class="__amount">
                    <?php
                        $result1= mysqli_fetch_array(mysqli_query($con, "SELECT COUNT(*) AS solg FROM books"));
                        echo "{$result1['solg']}";
                    ?>
                </div>
            </div>
            <div class="_____row">
                <div class="_____name">Người dùng</div>
                <div class="__amount">
                    <?php
                        $result2= mysqli_fetch_array(mysqli_query($con, "SELECT COUNT(*) AS solg FROM users "));
                        echo "{$result2['solg']}";
                    ?>
                </div>
            </div>
            <div class="_____row">
                <div class="_____name">Hóa đơn</div>
                <div class="__amount">
                    <?php
                        $result3= mysqli_fetch_array(mysqli_query($con, "SELECT COUNT(*) AS solg FROM orders "));
                        echo "{$result3['solg']}";
                    ?>
                </div>
            </div>
        </div>
    </div>

    <div id="modal-popup" class="modal ">
        <div id="modal-content">
            <h1>Hóa đơn trong ngày</h1>
            <table border= "collapse">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Hóa đơn</th>
                        <th>Tổng tiền (không tính ship)</th>
                    </tr>
                </thead>
                    <tbody>

                    </tbody>
            </table>
        </div>
    </div>

    <footer class="footer">

    </footer>

    <script>
        $('#table_id').DataTable();
    </script>

    <script src="../../js/admin/amount.js"></script>
</body>
</html>