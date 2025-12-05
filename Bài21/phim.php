<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách phim</title>
</head>
<style>
     table {
        margin: 0 auto; 
    }

    th, td {
        border: 1px solid black;
        padding: 8px;
        text-align: left;
        border-radius: 5px;
        box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);
    }

    .xoa {
        color: red;
        text-decoration: none;
        font-weight: bold;
    }
    
    .sua {
        color: blue;
        text-decoration: none;
        font-weight: bold;
        margin-right: 10px;
    }
    .xoa {
        color: red;
        text-decoration: none;
        font-weight: bold;
    }
    
    .sua {
        color: blue;
        text-decoration: none;
        font-weight: bold;
        margin-right: 10px;
    }

    .them {
        color: green; font-weight: bold; background-color: #f0f234;
        padding: 5px 10px; text-decoration: none;
    }
</style>

<body>
    <div style="display: flex; justify-content: space-around; align-items: center; margin-bottom: 20px;">
        <h1>Danh sách phim</h1>
        <a class="them" href="index.php?page_layout=themphim">Thêm phim</a>
    </div>

    <table>
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
        $sql = "SELECT p.*, nd.ho_ten, qg.ten_quoc_gia FROM `phim` p 
        JOIN nguoi_dung nd ON nd.id = p.dao_dien_id 
        JOIN quoc_gia qg ON qg.id = p.quoc_gia_id"; 
        
        $result = mysqli_query($connect, $sql);
        while($row = mysqli_fetch_array($result)){
        ?>
        <tr>
            <td><?php echo $row['ten_phim']; ?></td>
            
            <td><?php echo $row['ho_ten']; ?></td> 
            
            <td><?php echo $row['nam_phat_hanh']; ?></td>
            <td><?php echo $row['ten_quoc_gia']; ?></td> 
            
            <td><?php echo $row['so_tap']; ?></td>
            <td><?php echo $row['trailer']; ?></td>
            <td><?php echo $row['mo_ta']; ?></td>
            
            <td>
                <a class="sua" href="index.php?page_layout=updatephim&id=<?php echo $row['id']; ?>">Sửa</a>
                
                <a class="xoa" href="xoaphim.php?id=<?php echo $row['id']; ?>">Xóa</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>