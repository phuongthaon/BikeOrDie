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


        session_start();
        include('../../../model/connect.php');
        $stationList=mysqli_query($con, "SELECT * FROM station");

        // include('../../../controller/front/product-page.php');
    ?>
    <?php
        // include('../../../controller/front/orderdetails.php');
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
                        <h2>Trạm Xe<span>.</span></h2>
                    </div>
                </div>
                <div class="col-lg-8">
                    <img src="../../../img/stephane-mingot-e8msPzLTXxU-unsplash.jpg" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- Page Add Section End -->

    <!-- Product Page Section Beign -->
    <section class="product-page">
        <div class="container">
        <div class="cart-table">
                <table>
                    <thead>
                        <tr>
                            <th class="product-h">Tên trạm</th>
                            <th>Địa chỉ</th>
                            <th class="quan">Số lượng</th>
                            <th> Chi tiết </a></th>
                        </tr>
                    </thead>
                    <tbody>       
                            <?php
                            while($station = mysqli_fetch_array($stationList)){
                                // $station = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM books WHERE id = '{$orderdetail['bookId']}'"));
                                // echo"
                                // <tr>
                                // <td class=\"product-col\">
                                //     <img src=\"../../../img/products/{$product['image']}\" alt=\"\">
                                //     <div class=\"p-title\">
                                //         <h5>{$product['name']}</h5>
                                //     </div>
                                // </td>
                                // <td class=\"price-col\">{$product['price']}</td>
                                // <td class=\"quantity-col\">
                                //     <div class=\"product-quantity ml-5\">
                                //         <h5>{$orderdetail['quantity']}</h5>
                                //     </div>
                                // </td>
                                // <td class=\"total\">{$orderdetail['totalPayment']} Đ</td>
                                // </tr>
                                // ";
                                $quantity= mysqli_fetch_array(mysqli_query($con, "SELECT COUNT(*) As count FROM bike WHERE stationId = '{$station['id']}'"));
                                
                                echo "
                                <tr>
                                    <td class=\"product-col\">
                                        <div class=\"p-title\">
                                            <h5>{$station['name']}</h5>
                                        </div>
                                    </td>
                                    <td class=\"price-col\">{$station['address']}</td>
                                    <td class=\"quantity-col\">
                                        <div class=\"product-quantity ml-5\">
                                            <h5>{$quantity['count']}</h5>
                                        </div>
                                    </td>
                                    <td class=\"___style_a\"><button style=\"background-color:#222;\" ><a  href=\"bike.php?id={$station['id']}\" >Xem chi tiết</a> </button> </td>
                                   
                                </tr>
                                ";
                            }
                            ?> 
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <!-- Product Page Section End -->

    <!-- Related Product Section Begin -->
    
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