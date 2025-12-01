<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    Thể Loại
    <table border="1">
    <h1>Thông tin người dùng</h1>
    <tr>
        <th>ID</th>
        <th>Tên thể loại</th>
        <th>Chức năng</th>
    </tr>

    <?php 
    include "connect.php";
    $sql = "SELECT * FROM the_loai";
    $result = mysqli_query($connect, $sql);
    while($row = mysqli_fetch_array($result)){
    ?>
    <tr>
        <td><?php echo $row['id']; ?></td>
        <td> <?php echo $row['ten_the_loai']; ?> </td>
        <td>
            <button>Sửa</button>
            <a class="xoa" href="xoatheloai.php?id=<?php echo $row["id"] ?>">Xóa</a>
        </td>
    </tr>
    <?php } ?>
    </table>
</body>
</html>