<!DOCTYPE html>
<html lang="vi">
<head>
    <?php
        include('../layouts/front/head.php');
    ?>
</head>
<body>
    <?php
        include('../../../controller/front/shopping-cart.php');
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
            <form action="#" class="checkout-form" method="POST">
                <div class="row">
                    <div class="col-lg-12">
                        <h3>Thông tin </h3>
                    </div>
                   
                    
                        <div class=" col-lg-12 order-table">
                            <div class="cart-item">
                                <span>Trạm xe</span>
                                <?php
                                   
                                        echo"<p class=\"product-name\">{$category['name']}</p>";
                                   
                                ?>
                                
                            </div>
                            <div class="cart-item">
                                <span>Loại xe</span>
                                <p><?php echo"<p class=\"product-name\">{$category['name']}</p>"; ?></p>
                            </div>
                            <div class="cart-item">
                                <span>Giá tiền</span>
                                <p><?php echo "{$totalQuantity} Cuốn" ?></p>
                            </div>
                            <div class="cart-item">
                                <span>Giờ thuê</span>
                                <p><?php echo "{$_SESSION['fee']} Đ";?></p>
                            </div>

                            <div class="cart-total">
                                <span>Tổng</span>
                                <p><?php echo "{$totalSum} Đ" ?></p>
                            </div>
                        </div>
                    
                </div>
                <div class="row">
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
                </div>
            </form>
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
</body>

</html>