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
    <?php
        include 'connect.php';
        $id = $_GET['id'];
        $sql = "SELECT * FROM nguoi_dung WHERE id = $id";
        $result = mysqli_query($connect, $sql);
        $nguoiDung = mysqli_fetch_assoc($result);
    ?>

    <div class="container">
        <form action="index.php?page_layout=updatenguoidung&id=<?php echo $id; ?>" method="POST">
        <div>
            <h1>Cập nhật người dùng</h1>
        </div>
        <div>
            <input type="text" name="ten_dang_nhap" placeholder="Tên đăng nhập" value="<?php echo $nguoiDung['ten_dang_nhap']; ?>"> 
        </div>
        <div>
            <input type="password" name="mat_khau" placeholder="Nhập mật khẩu" value="<?php echo $nguoiDung['mat_khau']; ?>">
        </div>
        <div>
            <input type="text" name="ho_ten" placeholder="Họ và tên" value="<?php echo $nguoiDung['ho_ten']; ?>">
        </div>
        <div>
            <input type="text" name="email" placeholder="Nhập email" value="<?php echo $nguoiDung['email']; ?>">
        </div>
        <div>
            <input type="text" name="sdt" placeholder="Nhập số điện thoại" value="<?php echo $nguoiDung['sdt']; ?>">
        </div>
        <div>
            <input type="date" name="ngay_sinh" placeholder="Nhập ngày sinh" value="<?php echo $nguoiDung['ngay_sinh']; ?>">
        </div>
        <div>
            <p>Vai trò</p>
            <select name="vai_tro_id" id="">
                <option value="1" <?php if ($nguoiDung['vai_tro_id'] == 1) echo 'selected'; ?>>admin</option>
                <option value="2" <?php if ($nguoiDung['vai_tro_id'] == 2) echo 'selected'; ?>>dao_dien</option>
                <option value="3" <?php if ($nguoiDung['vai_tro_id'] == 3) echo 'selected'; ?>>dien_vien</option>
                <option value="4" <?php if ($nguoiDung['vai_tro_id'] == 4) echo 'selected'; ?>>user</option>
            </select>
        </div>
        <button type="submit">Submit</button>

    </form>
    </div>
    <?php
    
    if(!empty($_POST['ten_dang_nhap']) &&!empty($_POST['mat_khau']) &&
        !empty($_POST['ho_ten']) && !empty($_POST['email']) &&
        !empty($_POST['sdt']) && !empty($_POST['ngay_sinh'])&& 
        !empty($_POST['vai_tro_id'])){
            
            $tenDangNhap = $_POST['ten_dang_nhap'];
            $matKhau = $_POST['mat_khau'];
            $hoTen = $_POST['ho_ten'];
            $email = $_POST['email'];
            $sdt = $_POST['sdt'];
            $ngaySinh = $_POST['ngay_sinh'];
            $vaiTroId = $_POST['vai_tro_id'];
    
            $sql = "UPDATE nguoi_dung
                    SET ten_dang_nhap = '$tenDangNhap',
                        mat_khau = '$matKhau',
                        ho_ten = '$hoTen',
                        email = '$email',
                        sdt = '$sdt',
                        ngay_sinh = '$ngaySinh',
                        vai_tro_id = $vaiTroId
                    WHERE id = $id";
        

        if (mysqli_query($connect, $sql)) {
            header('Location: index.php?page_layout=nguoidung');
            exit;
        } else {
            echo '<p class="warning">Lỗi SQL: ' . mysqli_error($connect) . '</p>';
        }
    } else {
        echo "<p class='warning'> Vui lòng nhập đầy đủ thông tin ! </p>";
    }
    ?>
</body>
</html>