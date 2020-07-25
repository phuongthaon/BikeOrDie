<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    

    <link rel="stylesheet" href="../../css/admin/login.css" type="text/css">
</head>
<body>
    <?php
        include('../../../controller/admin/login.php');
    ?>
    <div class = "form-login">
        <div class= "header-form">
            <h3>Login Now</h3>
        </div>
        <div class= "form">
            <form action="" method="POST" >
                <div class="email-login">
                    <p>Email</p>
                    <input type="email" name="email" required></input>
                </div>
                <div class="password-login">
                    <p>Password</p>
                    <input type="password" name="password" required></input>
                </div>
                <div class="submit">
                    <button type="submit" name="submit">Login</button>
                </div>
                <div class="message">
                    <?php
                        echo "$message";
                    ?>
                </div>
            </form>
        </div>
        
    </div>
</body>
</html>