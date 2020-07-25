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
        include('../../../controller/front/bike.php');
    ?>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>
    
    <!-- Search model -->
	<div class="search-model">
		<div class="h-100 d-flex align-items-center justify-content-center">
			<div class="search-close-switch">+</div>
			<form class="search-model-form" method="GET">
                <input type="text" id="search-input" name="nameBook" placeholder="Tìm kiếm.....">
                <button class="btn btn-dark" type="submit" name="search"><i class="fa fa-search" aria-hidden="true"></i></button>
			</form>
		</div>
    </div>
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
                        <h2>Trạm xe</h2>
                        <h3><?php echo "{$name['name']}"; ?></h3>
                    </div>
                </div>
                <div class="col-lg-8">
                    <img src="../../../img/add1.jpg" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- Page Add Section End -->

    <!-- Categories Page Section Begin -->
    <section class="categories-page spad">
        <div class="container">
            <!-- <div class="categories-controls">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="categories-filter">
                            <div class="cf-left">
                                <div class="dropdown">
                                    <button type="button" class="btn btn-outline-secondary btn-sm dropdown-toggle" data-toggle="dropdown">
                                    Sắp xếp
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="./categories.php?sortby=newest">Mới nhất</a>
                                        <a class="dropdown-item" href="./categories.php?sortby=priceup">Giá: Thấp -> Cao</a>
                                        <a class="dropdown-item" href="./categories.php?sortby=pricedown">Giá: Cao -> Thấp</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <div class="row">
                <?php
                    while($row = mysqli_fetch_array($result)){
                        $category= mysqli_fetch_array(mysqli_query($con, "SELECT c.name FROM bike b Join category c On b.categoryId=c.id WHERE b.id= '{$row['id']}' "));
                        echo"<div class=\"col-lg-6 col-md-6\">
                                <div class=\"single-product-item\">
                               
                                    <figure>
                                        <img width= 270 height= 370 style=\"object-fit: cover;\" src=\"../../../img/products/{$row['img']}\" alt=\"\">
                                    </figure>
                                </a>    
                            <div class=\"product-text\">
                               
                                    <h6>Mã xe:  {$row['id']}</h6>
                               
                                
                            </div>
                            <div class=\"product-text\">
                               
                                    <h6> Loại xe: {$category['name']}</h6>
                               
                                
                            </div>
                            
                            <div class=\"product-text\">
                                <button style=\"background-color:#222;\"><a href=\"./check-out.php?id={$row['id']}\">Thuê xe </a></button>
                                    
                        
                                
                            </div>


                        </div>
                        </div>";  
                    }            
                ?>
            </div>
    </section>
    <!-- Categories Page Section End -->

    <!-- Footer Section Begin -->
    <?php
        include('../layouts/front/footer.php');
    ?>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <?php
        include('../layouts/front/embed.js.php');
    ?>

    <!-- Popper JS -->
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>


