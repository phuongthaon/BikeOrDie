<!DOCTYPE html>
<html lang="vi">
<head>
    <?php
        include('../layouts/front/head.php');
    ?>
</head>
<body>
   
    <!-- Page Preloder -->
    <?php
        include('../../../controller/front/sign-in.php');
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
                    <a href="./index.php"><img img width="132" height="45" src="../../../img/logo-2.png" alt=""></a>
                </div>
                

                <div class="header-right">
                    <!-- <img src="../../../img/icons/search.png" alt="" class="search-trigger"> -->
                    <img src="../../../img/icons/man.png" alt="">
                </div>
                <div class="user-access">
                    <a href="./register.php">Đăng ký</a>
                    <a href="./sign-in.php" class="in">Đăng nhập</a>        
                </div>
                <nav class="main-menu mobile-menu">
                    <ul>
                        <li><a href="./index.php">Trang chủ</a></li>
                        <li><a href="./station.php">Các trạm xe</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    
    <!-- Page Add Section Begin -->
    <section class="page-add">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-4">
                    <div class="page-breadcrumb ">
                        <h2>Đăng nhập<span>.</span></h2>
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
                <div class="col-lg-8">
                    <form action="" method="POST" class="contact-form">
                        <div class="row">
                            <div class="col-lg-12">
                                <input id="email" type="email" name="email" pattern=".+@.+(\.[a-z]{2,3}){1,2}" required placeholder="Email">
                            </div>
                           
                            <div class="col-lg-12">
                                <input  id="password"type="password" name="password" required placeholder="Mật khẩu" >
                            </div>
                            <div class="mx-auto mb-3 text-danger">
                                <?php
                                    if($message != ''){
                                        echo"$message";
                                    }
                                ?>
                            </div>
                            <div class="col-lg-12 text-center mb">
                                <button type="submit" name="signIn">Đăng nhập</button>
                            </div>
                            <div class="check">
                                <a href="register.php" >
                                    <pre class="text-danger">  Bạn chưa có tài khoản?
                                    </pre>
                                </a>
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