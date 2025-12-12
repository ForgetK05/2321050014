<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nguoi Dung</title>
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
    
    .sua, .sua2 {
        color: blue;
        text-decoration: none;
        font-weight: bold;
        margin-right: 10px;
    }

    .sua2 {
        margin-left: 10px;
        color: red;
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
</head>

<body>
    <div style="display: flex; justify-content: space-between; align-items: center;">
        <h1>Thông tin phim thể loại</h1>
    </div>
    <table >
        <tr>
            <th>Tên phim</th>
            <th>Thể loại</th>
            <th>Chức năng</th>

        </tr>
        <?php
        include("connect.php");
        $sql = "SELECT pl.id, p.ten_phim, tl.ten_the_loai 
                FROM phim_the_loai pl
                JOIN phim p ON pl.phim_id = p.id
                JOIN the_loai tl ON pl.the_loai_id = tl.id";
        $result = mysqli_query($connect, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <tr>
                <td><?php echo $row["ten_phim"] ?></td>
                <td><?php echo $row["ten_the_loai"] ?></td>

                <td class="chuc-nang">
                    <a class="sua" href="index.php?page_layout=updatetheloai&id=<?php echo $row["id"] ?>&ten_the_loai=<?php echo $row["ten_the_loai"] ?>">Cập nhật thể loại</a>
                    <a class="sua2" href="index.php?page_layout=updatephim&id=<?php echo $row["id"] ?>&ten_phim=<?php echo $row["ten_phim"] ?>">Cập nhật phim</a>

                </td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>