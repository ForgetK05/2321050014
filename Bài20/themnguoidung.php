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
    form{
        display: flex;
        flex-direction: column;
        justify-content: center;
    }
    .container{
        display:flex;
        justify-content: center;
        /* width: 80%; */
      /*  margin: auto; */
        /* background-color: green; */
    }
    input{
        padding: 10px;
        margin: 5px;
        border-radius: 10px;
    }
</style>

<body>
    <div class="container">
        <form action="index.php?page_layout=themnguoidung" method="POST">
   
        <div>
            <h1>Thêm người dùng</h1>
        </div>

        <div>
            <input type="text" name="ten_dang_nhap" placeholder="Tên đăng nhập">
        </div>
        <div>
            <input type="password" name="mat_khau" placeholder="Nhập mật khẩu">
        </div>
        <div>
            <input type="text" name="ho_ten" placeholder="Họ và tên">
        </div>
        <div>
            <input type="text" name="email" placeholder="Nhập email">
        </div>
        <div>
            <input type="text" name="sdt" placeholder="Nhập số điện thoại">
        </div>
        <div>
            <input type="date" name="ngay_sinh" placeholder="Nhập ngày sinh">
        </div>
        <div>
            <p>Vai trò</p>
            <select name="vai_tro_id" id="">
                <option value="1">admin</option>
                <option value="2">dao_dien</option>
                <option value="3">dien_vien</option>
                <option value="4">user</option>
            </select>
        </div>
        <button type="submit">Submit</button>

    </form>
    </div>
    <?php
    include 'connect.php'; 
    
    if(!empty($_POST['ten_dang_nhap']) &&
        !empty($_POST['mat_khau']) &&
        !empty($_POST['ho_ten']) &&
        !empty($_POST['email']) &&
        !empty($_POST['sdt'])&&
        !empty($_POST['ngay_sinh'])&& 
        !empty($_POST['vai_tro_id'])){
            
            $tenDangNhap = $_POST['ten_dang_nhap'];
            $matKhau = $_POST['mat_khau'];
            $hoTen = $_POST['ho_ten'];
            $email = $_POST['email'];
            $sdt = $_POST['sdt'];
            $ngaySinh = $_POST['ngay_sinh'];
            $vaiTroId = $_POST['vai_tro_id'];
    
            $sql = "INSERT INTO nguoi_dung
                (id, ten_dang_nhap, mat_khau, ho_ten, email, sdt, ngay_sinh, vai_tro_id)
            VALUES
                (31, '$tenDangNhap', '$matKhau', '$hoTen', '$email', '$sdt', '$ngaySinh', '$vaiTroId')";
        

        if (mysqli_query($connect, $sql)) {
            header('Location: index.php?page_layout=nguoidung');
        } else {

            echo 'Lỗi SQL: ' . mysqli_error($connect);
        }
    } else {

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            echo "<p class= 'warning'> Vui lòng nhập đầy đủ thông tin ! </p>";
        }
    }
    ?>

    

</body>

</html>