<!DOCTYPE html>
<html lang="vi">
<head>
    <?php
        include('../layouts/front/head.php');
    ?>
</head>
<body>
    <?php
        session_start();
        include('../../../controller/front/categories.php');
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
   

    <!-- Hero Slider Begin -->
    <section class="hero-slider">
        <div class="hero-items owl-carousel">
            <div class="single-slider-item set-bg" data-setbg="../../../img/background1.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1>2020</h1>
                            <h2>Tri Thức.</h2>
                            <a href="./categories.php" class="primary-btn">See More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slider-item set-bg" data-setbg="../../../img/background2.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1>2020</h1>
                            <h2>Giải trí.</h2>
                            <a href="./categories.php" class="primary-btn">See More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slider-item set-bg" data-setbg="../../../img/background3.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1>2020</h1>
                            <h2>Tra cứu.</h2>
                            <a href="./categories.php" class="primary-btn">See More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Slider End -->

    <!-- Features Section Begin -->
    <section class="features-section spad">
        <div class="features-ads">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="single-features-ads first">
                            <img src="../../../img/icons/f-delivery.png" alt="">
                            <h4>Giao hàng nhanh</h4>
                            <p>Chúng tôi nhận giao hàng toàn quốc, đảm bảo hàng hóa được giao một cách nhanh chóng nhất với chi phí thấp. </p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-features-ads second">
                            <img src="../../../img/icons/coin.png" alt="">
                            <h4>Thanh toán tiện lợi</h4>
                            <p>Chúng tôi chấp nhận thanh toán bằng nhiều phương thức khác nhau, rất an toàn và tiện lợi. </p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-features-ads">
                            <img src="../../../img/icons/chat.png" alt="">
                            <h4>Hoạt động 24/7</h4>
                            <p>Với đội ngũ hỗ trợ nhiệt tình, mọi vấn đề thắc mắc của bạn về chúng tôi sẽ được giải đáp ngay lập tức. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      
    </section>
    <!-- Features Section End -->

    <!-- Latest Product Begin -->
    <section class="latest-products spad">
        <div class="container">
            <div class="product-filter">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="section-title">
                            <h2>Sản phẩm mới nhất</h2>
                        </div>
                        <ul class="product-controls">
                            <li data-filter="*">All</li>
                            <li data-filter=".science">Sách khoa học</li>
                            <li data-filter=".novel">Tiểu thuyết</li>
                            <li data-filter=".comic">Truyện tranh</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row" id="product-list">
                <?php
                    $count = 0;
                    while($row = mysqli_fetch_array($result) and $count < 10){
                        if($row['category'] == 'Tiểu thuyết') $category = 'novel';
                        elseif($row['category'] == 'Khoa học') $category = 'science';
                        elseif($row['category'] == 'Truyện tranh') $category = 'comic';
                        echo"
                        <div class=\"col-lg-3 col-sm-6 mix all {$category}\">
                            <div class=\"single-product-item\">
                                <figure>
                                    <a href=\"./product-page.php?id={$row['id']}\"><img width= 270 height= 370 style=\"object-fit: cover;\" src=\"../../../img/products/{$row['image']}\" alt=\"\"></a>
                                    <div class=\"p-status\">new</div>
                                </figure>
                                <div class=\"product-text\">
                                    <a href=\"./product-page.php?id={$row['id']}\">
                                        <h6>{$row['name']}</h6>
                                    </a>
                                    <p>{$row['price']} Đ</p>
                                </div>
                            </div>
                        </div>";
                    $count++;
                    }
                ?>

            </div>
        </div>
    </section>
    <!-- Latest Product End -->

  

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