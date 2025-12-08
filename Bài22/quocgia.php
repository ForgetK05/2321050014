<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách quốc gia</title>
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
    <div style="display: flex; justify-content: space-around; align-items: center; margin-bottom: 20px;">
        <h1>Danh sách quốc gia</h1>
        <a class="them" href="index.php?page_layout=themquocgia">Thêm quốc gia</a>
    </div>

    <table>
    <tr>
        <th>ID</th>
        <th>Tên quốc gia</th>
        <th>Chức năng</th>
    </tr>

    <?php 
    include "connect.php";
    $sql = "SELECT * FROM quoc_gia" 
                ;
    $result = mysqli_query($connect, $sql);
    while($row = mysqli_fetch_array($result)){
    ?>
    <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['ten_quoc_gia']; ?></td>
        <td>
            <a class="sua" href="index.php?page_layout=updatequocgia&id=<?php echo $row['id']; ?>">Sửa</a>

            <a class="xoa" href="delete/xoaquocgia.php?id=<?php echo $row["id"] ?>;">Xóa</a>
        </td>
    </tr>
    <?php } ?>
    </table>
</body>
</html>