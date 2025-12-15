<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    table {
        display: flex;
        margin: 0;
        align-items: center;
        justify-content: center;
        
    }

    th,
    td {
        border: 1px solid black;
        border-radius: 5px;
        padding: 8px;
        text-align: left;
        box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);
    }

    .xoa{
        color: red;
        text-decoration: none;
        font-weight: bold;
    }
    .xoa1{
        color: green;
        text-decoration: none;
        font-weight: bold;
        margin-left: 20px;
        background-color: #f0f234;
        padding: 5px 10px;
    }
    .them{
        color: green; font-weight: bold; background-color: #f0f234;
        padding: 5px 10px; text-decoration: none;
    }

    
</style>

<body>
    <table>
        <div style="justify-content: space-around; display: flex; text-align: center; width: 100%; align-items: center;">
            <h1>Thông tin người dùng</h1>
            <div>
                <a class="them" href="themnguoidung.php">Thêm</a>
            </div>
            
        </div>

        <tr>
            <th>Tên đăng nhập</th>
            <th>Họ và tên</th>
            <th>Email</th>
            <th>Số điện thoại</th>
            <th>Vai trò</th>
            <th>Ngày sinh</th>
            <th>Chức năng</th>
        </tr>

        <?php 
    include "connect.php";
    $sql = "SELECT nd.* , vt.ten_vai_tro FROM nguoi_dung nd JOIN vai_tro vt ON nd.vai_tro_id = vt.id";
    $result = mysqli_query($connect, $sql);
    while($row = mysqli_fetch_array($result)){
    ?>
        <tr>
            <td>
                <?php echo $row['ten_dang_nhap']; ?>
            </td>
            <td>
                <?php echo $row['ho_ten']; ?>
            </td>
            <td>
                <?php echo $row['email']; ?>
            </td>
            <td>
                <?php echo $row['sdt']; ?>
            </td>
            <td>
                <?php echo $row['ten_vai_tro']; ?>
            </td>
            <td>
                <?php echo $row['ngay_sinh']; ?>
            </td>
            <td>
                <a class="sua" href="updatenguoidung.php?id=<?php echo $row["id"] ?>">Sửa</a>
                <a class="xoa" href="xoanguoidung.php?id=<?php echo $row["id"] ?>">Xóa</a>
            </td>
        </tr>

        <?php } ?>
    </table>
</body>

</html>