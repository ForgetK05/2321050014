<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Them phim</title>

    <style>
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .warning {
            color: red;
            display: flex;
            justify-content: center;
        }

        form div {
            width: 65%;
            margin: auto;
        }
    </style>
</head>

<body>
    <?php
    include("connect.php");
    ob_start(); // Bắt đầu lưu vào bộ nhớ đệm
    ?>
    <div class="container">
        <form action="index.php?page_layout=themphim" method="post">
            <h1>Thêm phim</h1>

            <div>
                <input type="text" name="ten_phim" placeholder="Tên phim">
            </div>
            <div>
                
                <select id="dao-dien" name="dao_dien">
                    <?php
                        $sql = "SELECT nd.*, vt.ten_vai_tro FROM `nguoi_dung` nd JOIN vai_tro vt on nd.vai_tro_id = vt.id WHERE vt.id = 2";
                        $result = mysqli_query($connect, $sql);
                        while ($daoDien = mysqli_fetch_assoc($result)) {
            ?>
                    <option value=<?php echo $daoDien['id']?>><?php echo $daoDien['ho_ten'] ?></option>
                    <?php } ?>
                </select>
            </div>
            <div>
                <input type="number" name="nam_phat_hanh" placeholder="Năm phát hành">
            </div>
            <div>
                <input type="text" name="poster" placeholder="Poster">
            </div>
            <div>
                
                <select id="quoc_gia" name="quoc_gia">
                    <?php
                        $sql = "SELECT * FROM `quoc_gia`";
                        $result = mysqli_query($connect, $sql);
                        while ($quocGia = mysqli_fetch_assoc($result)) {
                    ?>
                    <option value=<?php echo $quocGia['id']?>><?php echo $quocGia['ten_quoc_gia'] ?></option>
                    <?php } ?>
                </select>
            </div>
            <div>
                <input type="number" name="so_tap" placeholder="Số tập">
            </div>
            <div>
                <input type="text" name="trailer" placeholder="Trailer">
            </div>
            <div>
                <input type="text" name="mo_ta" placeholder="Mô tả">
            </div>
            <div class="box">
                <input type="submit" value="Thêm mới">
            </div>


        </form>
    </div>
    <?php
    if (
        !empty($_POST["ten_phim"]) &&
        !empty($_POST["dao_dien"]) &&
        !empty($_POST["nam_phat_hanh"]) &&
        !empty($_POST["poster"]) &&
        !empty($_POST["quoc_gia"]) &&
        !empty($_POST["so_tap"]) &&
        !empty($_POST["trailer"]) &&
        !empty($_POST["mo_ta"])
    ) {
        $tenPhim = $_POST["ten_phim"];
        $daoDien = $_POST["dao_dien"];
        $namPhatHanh = $_POST["nam_phat_hanh"];
        $poster = $_POST["poster"];
        $quocGia = $_POST["quoc_gia"];
        $soTap = $_POST["so_tap"];
        $trailer = $_POST["trailer"];
        $moTa = $_POST["mo_ta"];

        $sql = "INSERT INTO phim (ten_phim, dao_dien_id, nam_phat_hanh, poster, quoc_gia_id, so_tap, trailer, mo_ta)
VALUES (
    '$tenPhim',
    '$daoDien',
    '$namPhatHanh',
    '$poster',
    '$quocGia',
    '$soTap',
    '$trailer',
    '$moTa'
);";
        $result = mysqli_query($connect, $sql);
        header('location: index.php?page_layout=phim');
        ob_end_flush(); //Xả bộ nhớ đệm ra để gửi về trình duyệt

    } else {
        echo "<p class= 'warning'> Vui lòng nhập đầy đủ thông tin ! </p>";
    }


    ?>

</body>

</html>