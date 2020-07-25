<!DOCTYPE html>
<html lang="vi">
<head>
    <?php
        include('../layouts/front/head.php');
    ?>
    <link href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" rel="stylesheet" />
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

</head>
<body>
    <?php
        include('../../../controller/front/check-out.php');
    ?>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>
    
    <!-- Search model -->
    <!-- <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Tìm kiếm.....">
            </form>
        </div>
    </div> -->
    <!-- Search model end -->

    <!-- Header Section Begin -->
    <?php
        include('../layouts/front/header.php');
    ?>
    <!-- Header End -->

    <!-- Page Add Section Begin -->
    <section class="page-add">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="page-breadcrumb">
                        <h2>Thanh toán<span>.</span></h2>
                    </div>
                </div>
                <div class="col-lg-8">
                    <img src="../../../img/dovile-ramoskaite-x8rDSFN2DpY-unsplash.jpg" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- Page Add Section End -->

    <!-- Cart Total Page Begin -->
    <section class="cart-total-page spad">
        <div class="container">
            <div style ="float: right !important;" class=" col-lg-6 order-table">
                            <div class="cart-item">
                                <span>Bảng giá</span> </div>
                            <table id="table_id" class="display" >
                                <thead>
                                    <tr>
                                        <th>Loại xe</th>
                                        <th>Thời gian thuê</th>
                                        <th>Giá</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $xx=mysqli_query($con,"SELECT * FROM pricelist");

                                        while($price= mysqli_fetch_array($xx)){
                                        if($price['categoryId']==1) $t="Xe địa hình";
                                        else if($price['categoryId']==2) $t="Xe mini";
                                        else $t="Xe đạp đôi";
                                        echo "
                                            <tr>
                                                <td>{$t}</td>
                                                <td> <= {$price['time']} tiếng</td>
                                                <td> {$price['price']}</td>
                                            </tr>
                                        ";
                                    }
                                    ?>

                                </tbody>
                            </table>
                               
                                
                         
                            <!-- <div class="cart-item">
                                <span>Dưới 1 giờ:</span><br>
                                <span></span>
                            </div> -->
                            
                        </div>
           <!--  <form action="#" class="checkout-form" method="POST"> -->
                <div class="row">
                    <div class="col-lg-12">
                        <h3>Thông tin </h3>
                    </div>
                   
                    
                        <div class=" col-lg-8 order-table">
                            <div class="cart-item">
                                <span>Loại xe</span>
                                <?php
                                   
                                        echo"<p class=\"product-name\">{$category['name']}</p>";
                                   
                                ?>
                                
                            </div>
                            <div class="cart-item">
                                <span>Loại thời gian mượn</span><br>
                                <form method="POST" action="#">
                                <input  id="time" type="number" max="5" name="time" required placeholder="Thời gian thuê xe " >
                                      <div class="row">
                                        <div class="col-lg-12">
                                            <div class="payment-method">
                                                <span>Phương thức thanh toán</span>
                                                <ul>
                                                    <li>Paypal <img src="../../../img/paypal.jpg" alt=""></li>
                                                    <li>Credit / Debit card <img src="../../../img/mastercard.jpg" alt=""></li>
                                                    
                                                </ul>
                                                <button type="submit" name="order" href="countDown.html">Thuê Xe</button>
                                            </div>
                                        </div>
                                    </div>
                                      <!-- <button type="submit" name="order">Thuê Xe</button> -->
                                </form>
                            </div>
                            
                        </div>

                        
                    
                </div>
                <!-- <div class="row">
                    <div class="col-lg-12">
                        <div class="payment-method">
                            <h3>Phương thức thanh toán</h3>
                            <ul>
                                <li>Paypal <img src="../../../img/paypal.jpg" alt=""></li>
                                <li>Credit / Debit card <img src="../../../img/mastercard.jpg" alt=""></li>
                                
                            </ul>
                            <button type="submit" name="order">Thuê Xe</button>
                        </div>
                    </div>
                </div> -->
            <!-- </form> -->
        </div>
    </section>
    <!-- Cart Total Page End -->

    <!-- Footer Section Begin -->
    <?php
        include('../layouts/front/footer.php');
    ?>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <?php
        include('../layouts/front/embed.js.php');
    ?>
    <script>
        $('#table_id').DataTable();
    </script>
</body>

</html>
