<!DOCTYPE html>
<html lang="vi">
<head>
    <?php
        include('../layouts/front/head.php');
    ?>
</head>
<body>
    <!-- <?php
        session_start();
    ?> -->
    <!-- Page Preloder -->
    <?php
        include('../../../controller/front/register.php')
    ?>
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
    <header class="header-section">
        <div class="container-fluid">
            <div class="inner-header">
                <div class="logo">
                    <a href="./index.php"><img src="../../../img/logo.png" alt=""></a>
                </div>
                <div class="header-right">
                    <!-- <img src="../../../img/icons/search.png" alt="" class="search-trigger"> -->
                    <img src="../../../img/icons/man.png" alt="">
                    <a href="#">
                        <img src="../../../img/icons/bag.png" alt="">
                    </a>
                </div>
                
                <div class="user-access">
                    <a href="./register.php">Đăng ký</a>
                    <a href="./sign-in.php" class="in">Đăng nhập</a>
                </div>
                <nav class="main-menu mobile-menu">
                    <ul>
                        <li><a href="./index.php">Trang chủ</a></li>
                        <li><a href="./categories.php">Cửa hàng</a>
                            <ul class="sub-menu">
                                <li><a href="product-page.php?id=1">Sản phẩm</a></li>
                                <li><a href="shopping-cart.php">Mua hàng</a></li>
                                <li><a href="check-out.php">Thanh toán</a></li>
                            </ul>
                        </li>
                    
                        <li><a href="./contact.php">Liên hệ</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    
    <!-- Header End -->

    <!-- Page Add Section Begin -->
    <section class="page-add">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-4">
                    <div class="page-breadcrumb ">
                        <h2>Đăng ký<span>.</span></h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Page Add Section End -->

    <!-- Contact Section Begin -->
    <div class="contact-section">
        <div class="container">
            <div class="row d-flex justify-content-center ">
                <div class="col-lg-8  ">
                    <form action="" method="POST" class="contact-form">
                    <div class="row">
                            <div class="col-lg-12">
                                <input type="text" name="name" required placeholder="Tên">
                                <input type="email" name="email" pattern=".+@.+(\.[a-z]{2,3}){1,2}" required placeholder="E-mail">
                                <input type="password" name="password" required placeholder="Mật khẩu">
                                <input type="password" name="confirmPassword" required placeholder="Nhập lại mật khẩu">
                               
                            </div>
                            <div class="mx-auto mb-3 text-danger">
                                <?php
                                    if($passwordIsNotMatch != '') echo "$passwordIsNotMatch";
                                    if($emailUsed != '') echo "$emailUsed";
                                ?>
                            </div>
                            <div class="col-lg-12 text-center">
                                <button type="submit" name="register" >Đăng ký</button>
                            </div>
                            <div class="col-lg-12">
                                <a href="sign-in.php" style="color:red">Bạn đã có tài khoản?</a>
                            </div>
                        </div>
                    </form>                   
                </div>
                
            </div>
            
        </div>
    </div>
    <!-- Contact Section End -->

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