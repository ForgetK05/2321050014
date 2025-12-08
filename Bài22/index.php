<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    nav {
        display: flex;
        justify-content: space-between;
        background-color: rgba(243, 231, 122, 0.75);
        padding: 10px;
        border-radius: 5px;
    }

    nav ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        display: flex;
    }

    nav ul li {
        margin-right: 20px;
    }

    nav ul li a {
        color: white;
        text-decoration: none;
        font-weight: bold;
    }

    nav ul li a:hover {
        text-decoration: underline;
    }
</style>

<body>
    <?php
    session_start();
    if (!isset($_SESSION["username"])) {
        header("location: login.php");
    }
    ?>
    <header>
        <nav>
            <ul>
                <li><a href="index.php?page_layout=trangchu">Trang chủ</a></li>
                <li><a href="index.php?page_layout=phim">Phim</a></li>
                <li><a href="index.php?page_layout=theloai">Thể loại</a></li>
                <li><a href="index.php?page_layout=quocgia">Quốc gia</a></li>
                <li><a href="index.php?page_layout=nguoidung">Người dùng</a></li>
                <li><a href="index.php?page_layout=phimtheloai">Phim Thể loại</a></li>
            </ul>
            <ul>
                <li><?php echo "Xin chào ". $_SESSION["username"]; ?></li>
                <li><a href="index.php?page_layout=dangxuat">Đăng xuất</a></li>
            </ul>
        </nav>

        <?php 
        if(isset($_GET['page_layout'])){
        switch($_GET['page_layout']){
            case 'trangchu':
                include "trangchu.php";
                break;
            case 'phim':
                include "phim.php";
                break;
            case 'theloai':
                include "theloai.php";
                break;
            case 'quocgia':
                include "quocgia.php";
                break;
            case 'nguoidung':
                include "nguoidung.php";
                break;
            case 'phimtheloai':
                include "phimtheloai.php";
                break;
            case 'themnguoidung':
                include "themnguoidung.php";
                break;
            case 'themphim':
                include "themphim.php";
                break;
            case 'themquocgia':
                include "themquocgia.php";
                break;
            case 'themtheloai':
                include "themtheloai.php";
                break;
            case 'updatenguoidung':
                include "updatenguoidung.php";
                break;
            case 'updatephim':
                include "updatephim.php";
                break;
            case 'updatequocgia':
                include "updatequocgia.php";
                break;
            case 'updatetheloai':
                include "updatetheloai.php";
                break;
            case 'dangxuat':         
                break;
        }
        }
        
        
        ?>
    </header>
</body>

</html>