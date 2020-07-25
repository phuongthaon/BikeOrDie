<header class="header-section">
        <div class="container-fluid">
            <div class="inner-header">
                <div class="logo">
                    <a href="./index.php"><img width="132" height="45" src="../../../img/logo-2.png" alt=""></a>
                </div>
               
                <div class="header-right">
                    <img src="../../../img/icons/search.png" alt="" class="search-trigger">
                    
                    <img src="../../../img/icons/man.png" alt="">
                   
                    <?php
                        if(isset($_SESSION['name'])){
                            echo "<a href=\"../../../controller/front/logout.php\">
                                    <img src=\"../../../img/icons/log_out.png\" title=\"Đăng xuất\"  alt=\"\">
                                </a>";
                        }
                    ?>
                </div>
                
                
                <div class="user-access">
                    <?php
                        if(isset($_SESSION['name'])){
                            echo "<a href=\"./index.php\">Xin chào, {$_SESSION['name']}</a>";
                        }
                        else {
                            echo"<a href=\"./register.php\">Đăng ký</a>
                            <a href=\"./sign-in.php\" class=\"in\">Đăng nhập</a>
                            ";
                        }
                    ?>
                </div>
                <nav class="main-menu mobile-menu">
                    <ul>
                        <li><a href="./index.php">Trang chủ</a></li>
                        <li><a href="./station.php">Các trạm xe</a>
                            <!-- <ul class="sub-menu">
                                <li><a href="product-page.php?id=1">Sản phẩm</a></li>
                                <li><a href="shopping-cart.php">Mua hàng</a></li>
                                <li><a href="check-out.php">Thanh toán</a></li>
                            </ul> -->
                        </li>
                    
                        
                    </ul>
                </nav>
            </div>
        </div>
    </header>
