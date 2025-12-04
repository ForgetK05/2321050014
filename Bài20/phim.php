<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách phim</title>
</head>
<style>
    /* CSS giữ nguyên của bạn */
    table {
        margin: 0 auto; /* Canh giữa bảng */
        border-collapse: collapse;
        width: 90%;
    }
    th, td {
        border: 1px solid black;
        padding: 8px;
        text-align: left;
    }
    .xoa { color: red; text-decoration: none; font-weight: bold; }
    .sua { color: blue; text-decoration: none; font-weight: bold; margin-right: 10px;}
    .them {
        color: green; font-weight: bold; background-color: #f0f234;
        padding: 5px 10px; text-decoration: none;
    }
    /* Thêm CSS cho ảnh poster để không bị quá to */
    img.poster-img { width: 50px; height: auto; }
</style>

<body>
    <div style="display: flex; justify-content: space-around; align-items: center; margin-bottom: 20px;">
        <h1>Danh sách phim</h1>
        <a class="them" href="index.php?page_layout=themphim">Thêm phim</a>
    </div>

    <table border="1">
        <tr>
            <th>Tên phim</th>
            <th>Đạo diễn ID</th>
            <th>Năm PH</th>
            <th>Quốc gia ID</th>
            <th>Số tập</th>
            <th>Trailer</th>
            <th>Mô tả</th>
            <th>Chức năng</th>
        </tr>

        <?php 
        include "connect.php";
        
        // Chỉ cần lấy tất cả từ bảng phim
        $sql = "SELECT * FROM phim"; 
        
        $result = mysqli_query($connect, $sql);
        while($row = mysqli_fetch_array($result)){
        ?>
        <tr>
            <td><?php echo $row['ten_phim']; ?></td>
            
            <td><?php echo $row['dao_dien_id']; ?></td> 
            
            <td><?php echo $row['nam_phat_hanh']; ?></td>
            <td><?php echo $row['quoc_gia_id']; ?></td> 
            
            <td><?php echo $row['so_tap']; ?></td>
            <td><?php echo $row['trailer']; ?></td>
            <td><?php echo $row['mo_ta']; ?></td>
            
            <td>
                <a class="sua" href="index.php?page_layout=updatephim&id=<?php echo $row['id']; ?>">Sửa</a>
                
                <a class="xoa" href="delete/xoaphim.php?id=<?php echo $row['id']; ?>">Xóa</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>