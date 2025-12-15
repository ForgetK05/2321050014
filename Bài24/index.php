<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Phim</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    session_start();
    // if (!isset($_SESSION["username"])) {
    //     header("location: login.php");
    // }
    ?>

    <header>
        <div class="container">
            <div class="head1">
                <img src="img/logo.png" width="200px" height="100" alt="">
                <div><a href="index.php?page_layout=trangchu">Trang chủ</a></div>
                <div><a href="index.php?page_layout=phim">Phim</a></div>
                <div><a href="index.php?page_layout=theloai">Thể loại</a></div>
                <div><a href="index.php?page_layout=quocgia">Quốc gia</a></div>
                <div><a href="index.php?page_layout=nguoidung">Người dùng</a></div>
                <div><a href="index.php?page_layout=phimtheloai">Phim Thể loại</a></div>
            </div>
            <div class="head2">
                <div><a href="#">Tìm kiếm</a></div>
                <div><a href="#">Thông báo</a></div>
                <a href="https://fptplay.vn/mua-goi" target="_blank" style="padding: 10px 20px; background-color: rgb(230, 84, 48); border-radius: 15px;">Mua gói</a>
                <div><a href="#">Đăng nhập</a></div>
            </div>
        </div>
    </header>

    <div style="margin-top: 12vh;"> <?php 
        if(isset($_GET['page_layout'])){
            switch($_GET['page_layout']){
                case 'trangchu': include "trangchu.php"; break;
                case 'phim': include "phim.php"; break;
                case 'theloai': include "theloai.php"; break;
                case 'quocgia': include "quocgia.php"; break;
                case 'nguoidung': include "nguoidung.php"; break;
                case 'phimtheloai': include "phimtheloai.php"; break;
                case 'themphim': include "themphim.php"; break;
                case 'themtheloai': include "themtheloai.php"; break;
                case 'themnguoidung': include "themnguoidung.php"; break;
                case 'suaphim': include "suaphim.php"; break;
                case 'suatheloai': include "suatheloai.php"; break;
                case 'suanguoidung': include "suanguoidung.php"; break;
                case 'xoaphim': include "xoaphim.php"; break;
                case 'xoatheloai': include "xoatheloai.php"; break;
                case 'xoanguoidung': include "xoanguoidung.php"; break;
                case 'themphimtheloai': include "themphimtheloai.php"; break;
                case 'xoaphimtheloai': include "xoaphimtheloai.php"; break;
                case 'suaphimtheloai': include "suaphimtheloai.php"; break;
                case 'chi_tiet_phim': include "chi_tiet_phim.php"; break;
                default: include "trangchu.php"; break;
            }
        } else {
            include "trangchu.php";
        }
        ?>
    </div>

</body>
</html>