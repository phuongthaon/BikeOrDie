<header class="header-section">
        <div class="logo">
            <a href="./index.php"><img src="../../../img/logo.png" alt=""></a>
        </div>
        <div class="header-right">
            <div class="user-access row" style="display: flex">
                
                <?php
                    include('../../../model/connect.php');
                    $adminInNow =  mysqli_fetch_array( mysqli_query($con, "SELECT *  FROM admin  WHERE id = '{$_SESSION['id']}' "));
                    if(isset($_SESSION['name'])){
                        echo "  
                        
                        <a href=\"./account.php\">{$adminInNow['name']}</a>
                        ";
                        
                    }
                ?>
            </div>  
            <div id="user-logo" class="row">
                <?php
                    echo "<img width= 30 height= 30 style=\"object-fit: cover; border-radius: 50%\" src=\"../../../img/avatar/{$adminInNow['avatar']}\">"
                ?>
            </div>
            <div class="logout row">
                <?php
                
                if(isset($_SESSION['name'])){
                    echo "   <a href=\"../../../controller/admin/logout.php\">
                                    <img src=\"../../../img/icons/log_out.png\" title=\"Đăng xuất\"  alt=\"\">
                                </a>";
                }
                ?>
            </div>
        </div>
    </header>