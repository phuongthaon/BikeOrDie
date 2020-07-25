<!DOCTYPE html>
<html lang="vi">

<head>
    <?php
    include('../layouts/front/head.php');
    include('../../../model/connect.php');
    ?>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyA5y5AeQ-PE6Jr4L6z9_5sVuVEHu9LYFJI&sensor=false&v=3&libraries=geometry"></script>
    <style>
        a:hover {
            color: black;
        }
    </style>
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






    <!-- Latest Product Begin -->
    <section class="latest-products spad">
        <div class="container">
            <div class="product-filter">
                <div class="col-lg-4 text-center" style="padding: 10px; margin: 0 auto;">
                    <img src="../../../img/avatar-2.gif" style="width: 300px; height:auto;"></img>

                    <div class="section-title">
                        <h3>Nguyễn Ngọc Chi</h3>
                    </div>
                    <div>Tuổi: 20</div>
                    <div>Ngày sinh: 14/08/2000</div>
                    <div>Địa chỉ mail: 123@gmail.com</div>
                </div>
                <!-- A grey horizontal navbar that becomes vertical on small screens -->
                <nav class="navbar navbar-expand-sm bg-light">

                    <!-- Links -->
                    <ul class="navbar-nav">
                        
                        <li class="nav-item">
                            <a class="nav-link" href="#">Thống kê</a>
                        </li>
                    </ul>

                </nav>
                <section class="features-section spad">
                    <div class="features-ads">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="single-features-ads first">
                                        <img src="../../../img/icons/f-delivery.png" alt="">
                                        <h4>Tổng số quãng đường</h4>
                                        <h5 id=distance>Chúng tôi nhận giao hàng toàn quốc, đảm bảo hàng hóa được giao một cách nhanh chóng nhất với chi phí thấp. </h5>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="single-features-ads second">
                                        <img src="../../../img/icons/coin.png" alt="">
                                        <h4>Tổng số giờ</h4>
                                        <h5>23 giờ</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="single-features-ads">
                                        <img src="../../../img/icons/chat.png" alt="">
                                        <h4>Tổng số xe đã thuê</h4>
                                        <h5>23 xe</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </section>

                <nav class="navbar navbar-expand-sm bg-light">

                    <!-- Links -->
                    <ul class="navbar-nav">
                        
                        <li class="nav-item">
                            <a class="nav-link" href="#">Lịch sử</a>
                        </li>
                    </ul>

                </nav>
                <?php
                   $result = mysqli_query($con, "SELECT * FROM history where userId=".$_SESSION['id']);
                   if ($row = mysqli_fetch_array($result) > 0){
                       echo "yes";
                       while($row = mysqli_fetch_array($result)){
                        echo '<div class="row m-3">
                                <div class="col-lg-4"><img src="https://vn-test-11.slatic.net/p/e9053f89bb6759db3589cc0720dfef1e.jpg" style="width: 300px; height: auto;"></img></div>
                                    <div class="col-lg">
                                    <h2>';
                        $result2 = mysqli_query($con, "SELECT s.name, b.id from station s join bike b ON b.stationId = s.id having b.id =".$row['id']);
                        $row2 = mysqli_fetch_array($result2);
                        echo $row2['name'];
                        echo '</h2>
                                    <div><b>Thời gian mượn:</b>'.$row['time'].'</div>
                                    <div><b>Số KM đi được:</b>'.$row['km'].'</div>
                                </div>
                            </div>';
                        
                    }
                   }
                   else{
                       echo "Bạn chưa mượn xe nào.";
                   }
                    

                ?>

                
                <div id="demo"></div>
                <script>
                    var latLngA = new google.maps.LatLng(-34, 151);
                    var latLngB = new google.maps.LatLng(-34, 160);
                    var distance = google.maps.geometry.spherical.computeDistanceBetween(latLngA, latLngB);
                    console.log(distance);
                    document.getElementById('distance').innerHTML = distance;
                </script>
                <script>
                    var x = document.getElementById("demo");

                    function getLocation() {
                        if (navigator.geolocation) {
                            navigator.geolocation.getCurrentPosition(showPosition);
                        } else {
                            x.innerHTML = "Geolocation is not supported by this browser.";
                        }
                    }

                    function showPosition(position) {
                        x.innerHTML = "Latitude: " + position.coords.latitude +
                            "<br>Longitude: " + position.coords.longitude;
                    }
                </script>
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
