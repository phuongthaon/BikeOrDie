<!DOCTYPE html>
<html lang="vi">
<head>
    <?php
        include('../layouts/front/head.php');
    ?>
</head>
<body>
    <?php
        // session_start();
        // if({})
        include('../../../controller/front/product-page.php');
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
                        <h2>Sản phẩm<span>.</span></h2>
                    </div>
                </div>
                <div class="col-lg-8">
                    <img src="../../../img/add1.jpg" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- Page Add Section End -->

    <!-- Product Page Section Beign -->
    <section class="product-page">
        <div class="container">
            <div class="product-control">
                <?php
                    if($id == 1){
                        echo"
                            <a href=\"./product-page.php?id={$next}\">Sau</a>";
                    } elseif($id == $total_product){
                        echo"
                            <a href=\"./product-page.php?id={$previous}\">Trước</a>";
                    }else echo"
                            <a href=\"./product-page.php?id={$previous}\">Trước</a>
                            <a href=\"./product-page.php?id={$next}\">Sau</a>";                
                ?>
            </div>
            <div class="row">
            <?php
                    $limit = '';
                    if(isset($_SESSION['limit'])){
                        $limit = $_SESSION['limit'];
                    }
                    echo"<div class=\"col-lg-6\">
                            <div class=\"product-slider owl-carousel\">
                                <div class=\"product-img\">
                                    <figure>
                                        <img src=\"../../../img/products/{$row['image']}\" alt=\"\">
                                        <div class=\"p-status\">new</div>
                                    </figure>
                                </div>
                                <div class=\"product-img\">
                                    <figure>
                                        <img src=\"../../../img/products/{$row['image']}\" alt=\"\">
                                        <div class=\"p-status\">new</div>
                                    </figure>
                                </div>
                            </div>
                    
                        </div>
                        <div class=\"col-lg-6\">
                            <div class=\"product-content\">
                                <h2>{$row['name']}</h2>
                                <div class=\"pc-meta\">
                                    <h5>{$row['price']} Đ</h5>
                                <div class=\"rating\">
                                    <i class=\"fa fa-star\"></i>
                                    <i class=\"fa fa-star\"></i>
                                    <i class=\"fa fa-star\"></i>
                                    <i class=\"fa fa-star\"></i>
                                    <i class=\"fa fa-star\"></i>
                                </div>
                            </div>
                            <p>{$row['description']}</p>
                            <ul class=\"tags\">
                                <li><span>Thể loại :</span>{$row['category']}</li>
                                <li><span>Tác giả :</span> {$row['author']}</li>
                                <li><span>Số lượng :</span> {$row['amount']}</li>
                            </ul>
                            <p style=\"color: red\">{$limit}</p>
                            <form action=\"\" method=\"POST\" class=\"contact-form\">
                                <div class=\"row\">
                                    <div class=\"product-quantity\">
                                        <div class=\"pro-qty\">
                                            <input type=\"text\" name=\"amount\" value=\"1\" class=\"mt-2\">
                                        </div>
                                    </div>
                                    <div class=\"col-lg-6\">
                                        <button type=\"submit\" name=\"addCart\">Thêm vào giỏ hàng</button>
                                    </div>
                                </div>
                            </form>
                        </div>";
                ?>
           
            </div>
        </div>
    </section>
    <!-- Product Page Section End -->

    <!-- Related Product Section Begin -->
    <section class="related-product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-title">
                        <h2>Sản phẩm liên quan</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php
                    $result1 = mysqli_query($con, "SELECT * FROM books WHERE (category = '{$row['category']}' OR author = '{$row['author']}') AND NOT id = '{$row['id']}'");
                    $count = 0;
                    while($product = mysqli_fetch_array($result1) and $count < 4 ){
                        echo"                                       
                        <div class=\"col-lg-3 col-sm-6\">
                        <div class=\"single-product-item\">
                            <figure>
                                <a href=\"./product-page.php?id={$product['id']}\"><img width= 270 height= 370 style=\"object-fit: cover;\" src=\"../../../img/products/{$product['image']}\" alt=\"\"></a>
                                <div class=\"p-status\">new</div>
                            </figure>
                            <div class=\"product-text\">
                                <h6>{$product['name']}</h6>
                                <p>{$product['price']} Đ</p>
                            </div>
                        </div>
                    </div>";
                    $count++;
                    }
                ?>
            </div>
        </div>
    </section>
    <!-- Related Product Section End -->

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