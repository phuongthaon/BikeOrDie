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
                    <img src="../../../img/add1.jpg" alt="">
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
                        <h3>Thông tin của bạn</h3>
                    </div>
                    <div class="col-lg-9">
                        <div class="row">
                            <div class="col-lg-2">
                                <p class="in-name" >Họ và tên*</p>
                            </div>
                            <div class="col-lg-10">
                                <input type="text" name="name" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-2">
                                <p class="in-name">Số nhà*</p>
                            </div>
                            <div class="col-lg-10">
                                <input type="text" name="apartmentNumber" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-2">
                                <p class="in-name" >Xã/Phường*</p>
                            </div>
                            <div class="col-lg-10">
                                <input type="text" name="ward" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-2">
                                <p class="in-name">Quận/Huyện*</p>
                            </div>
                            <div class="col-lg-10">
                                <input type="text" name="district" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-2">
                                <p class="in-name">Tỉnh/TP*</p>
                            </div>
                            <div class="col-lg-10">
                                <input type="text" name="province" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-2">
                                <p class="in-name">Số điện thoại*</p>
                            </div>
                            <div class="col-lg-10">
                                <input type="tel" name="phoneNumber"  pattern= "0[0-9\s.-]{9}" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="order-table">
                            <div class="cart-item">
                                <span>Sản phẩm</span>
                                <?php
                                    while($cart = mysqli_fetch_array($carts)){
                                        $product = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM books WHERE id = '{$cart['bookId']}'"));
                                        echo"<p class=\"product-name\">{$product['name']}</p>";
                                    }
                                ?>
                                
                            </div>
                            <div class="cart-item">
                                <span>Tổng đơn hàng</span>
                                <p><?php if($totalPayment!= "")echo "{$totalPayment} Đ"; else echo "0 Đ";?></p>
                            </div>
                            <div class="cart-item">
                                <span>Số lượng</span>
                                <p><?php echo "{$totalQuantity} Cuốn" ?></p>
                            </div>
                            <div class="cart-item">
                                <span>Phí vận chuyển</span>
                                <p><?php echo "{$_SESSION['fee']} Đ";?></p>
                            </div>

                            <div class="cart-total">
                                <span>Tổng</span>
                                <p><?php echo "{$totalSum} Đ" ?></p>
                            </div>
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
                                <li>
                                    <label for="two">Thanh toán khi nhận hàng</label>
                                    <input type="radio" id="two" required>
                                </li>
                            </ul>
                            <button type="submit" name="order">Đặt hàng</button>
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