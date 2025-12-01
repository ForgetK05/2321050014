<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<table border="1">
    
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
</style>

<body>
    <table>
        <h1>Thông tin người dùng</h1>
        <tr>
            <th>Tên phim</th>
            <th>Tên thể loại</th>
            <th>Quốc gia</th>
            <th>Năm phát hành</th>
            <th>Mô tả</th>
            <th>Chức năng</th>
        </tr>

        <?php 
    include "connect.php";
    $sql = "SELECT p.*, tl.ten_the_loai, qg.ten_quoc_gia 
        FROM phim p 
        JOIN quoc_gia qg ON p.quoc_gia_id = qg.id
        JOIN phim_the_loai ptl ON p.id = ptl.phim_id 
        JOIN the_loai tl ON ptl.the_loai_id = tl.id "
        ;

    $result = mysqli_query($connect, $sql);
    while($row = mysqli_fetch_array($result)){
    ?>
        <tr>
            <td>
                <?php echo $row['ten_phim']; ?>
            </td>
            <td>
                <?php echo $row['ten_the_loai']; ?>
            </td>
            <td>
                <?php echo $row['ten_quoc_gia']; ?>
            </td>
            <td>
                <?php echo $row['nam_phat_hanh']; ?>
            </td>
            <td>
                <?php echo $row['mo_ta']; ?>
            </td>
            <td>
                <button>Sửa</button>
                <a class="xoa" href="xoaphim.php?id=<?php echo $row["id"] ?>">Xóa</a>
            </td>
        </tr>

        <?php } ?>
    </table>
</body>
</html>