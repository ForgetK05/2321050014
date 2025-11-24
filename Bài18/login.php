<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php - Buổi 2</title>
</head>
<style>
    p {
        color: red;
    }
</style>

<body>
    <form action="login.php" method="POST">
        <h1>Đăng nhập</h1>
        <div>
            <input type="text" name="username" placeholder="Nhập số điện thoại">
        </div>
        <div>
            <input type="password" name="password" placeholder="Nhập mật khẩu">
        </div>
        <div>
            <input type="submit" value="Đăng nhập">
        </div>
    </form>

    <?php
        if(isset($_POST['username']) && isset($_POST['password']) ){
            $tenDangNhap = $_POST['username'];
            $matKhau = $_POST['password'];
            // echo $matKhau . "<br>";
            //Nếu tên đnăg nhập = admin 
            // Mật khẩu 123 thì cho phép đăng nhập trang chủ
            // echo $tenDangNhap . "<br>" . $matKhau;
            if($tenDangNhap == "admin" && $matKhau == "123"){
                echo "Đăng nhập thành công, chào mừng admin";
            } else {
                echo "<p>Đăng nhập thất bại, vui lòng kiểm tra lại thông tin</p>";
            }
        }
        

    ?>

</body>

</html>