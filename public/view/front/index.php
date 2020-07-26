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
            <div class="single-slider-item set-bg" data-setbg="https://images.unsplash.com/photo-1475666675596-cca2035b3d79?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1950&q=80">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1>2020</h1>
                            <h2>Đi xe đạp là niềm vui</h2>
                            <a href="./station.php" class="primary-btn">See More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slider-item set-bg" data-setbg="https://images.unsplash.com/photo-1474552226712-ac0f0961a954?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1951&q=80">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1>2020</h1>
                            <h2>Đi xe đạp là trải nghiệm</h2>
                            <a href="./station.php" class="primary-btn">See More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slider-item set-bg" data-setbg="https://images.unsplash.com/photo-1501147830916-ce44a6359892?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1>2020</h1>
                            <h2>Đi xe đạp để khỏe mạnh</h2>
                            <a href="./station.php" class="primary-btn">See More</a>
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
                            <h4>Thao tác tiện lợi</h4>
                            <p>Chúng tôi nhận giao hàng toàn quốc, đảm bảo hàng hóa được giao một cách nhanh chóng nhất với chi phí thấp. </p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-features-ads second">
                            <img src="../../../img/icons/coin.png" alt="">
                            <h4>Thanh toán mọi lúc</h4>
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
                            <h2>Bảng tin</h2>
                        </div>
                        <ul class="product-controls">
                            <li data-filter="*">All</li>
                            <li data-filter=".science">Gần nhất</li>
                            
                        </ul>
                    </div>
                </div>
            </div>
           <div class="map">
                <div class="row">
                    <div class="col-lg-12">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2574.7672108920424!2d105.78199961643556!3d21.03842911475024!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab354920c233%3A0x5d0313a3bfdc4f37!2sVNU%20University%20of%20Engineering%20and%20Technology!5e0!3m2!1sen!2sbd!4v1586697990045!5m2!1sen!2sbd" 
                            width="600" height="500" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">
                        </iframe>
                    </div>
                </div>
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
