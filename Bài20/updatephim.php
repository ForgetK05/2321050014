<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php - Buổi 2</title>
</head>
<style>
    p {
        color: red;
    }
    form{
        display: flex;
        flex-direction: column;
        justify-content: center;
    }
    .container{
        display:flex;
        justify-content: center;
        /* width: 80%; */
      /*  margin: auto; */
        /* background-color: green; */
    }
    input{
        padding: 10px;
        margin: 5px;
        border-radius: 10px;
    }
</style>

<body>
    <?php
        include 'connect.php';
        $id = $_GET['id'];
        $sql = "SELECT * FROM phim WHERE id = $id";
        $result = mysqli_query($connect, $sql);
        $phim = mysqli_fetch_assoc($result);
    ?>

    <div class="container">
        <form action="index.php?page_layout=updatephim&id=<?php echo $phim["id"] ?>" method="POST">
        <div>
            <h1>Cập nhật người dùng</h1>
        </div>
        <div>
            <input type="text" name="ten_phim" placeholder="Tên phim" value="<?php echo $phim['ten_phim']; ?>"> 
        </div>
        <div>
            <input type="text" name="dao_dien_id" placeholder="Đạo diễn" value="<?php echo $phim['dao_dien_id']; ?>">
        </div>
        <div>
            <input type="text" name="nam_phat_hanh" placeholder="Năm phát hành" value="<?php echo $phim['nam_phat_hanh']; ?>">
        </div>
        <div>
            <input type="text" name="quoc_gia_id" placeholder="Quốc gia" value="<?php echo $phim['quoc_gia_id']; ?>">
        </div>
        <div>
            <input type="text" name="so_tap" placeholder="Số tập" value="<?php echo $phim['so_tap']; ?>">
        </div>
        <div>
            <input type="text" name="trailer" placeholder="Nhập trailer" value="<?php echo $phim['trailer']; ?>">
        </div>
        <div>
            <input type="text" name="mo_ta" placeholder="Mô tả" value="<?php echo $phim['mo_ta']; ?>">
        </div>
        <button type="submit">Submit</button>

    </form>
    </div>
    <?php
    
    if(!empty($_POST['ten_phim']) &&
        !empty($_POST['dao_dien_id']) &&
        !empty($_POST['nam_phat_hanh']) &&
        !empty($_POST['quoc_gia_id']) &&
        !empty($_POST['so_tap'])&&
        !empty($_POST['trailer'])&& 
        !empty($_POST['mo_ta'])){
            
            $tenPhim = $_POST['ten_phim'];
            $daoDienId = $_POST['dao_dien_id'];
            $namPhatHanh = $_POST['nam_phat_hanh'];
            $quocGiaId = $_POST['quoc_gia_id'];
            $soTap = $_POST['so_tap'];
            $trailer = $_POST['trailer'];
            $moTa = $_POST['mo_ta'];
    
            $sql = "UPDATE phim
                    SET ten_phim = '$tenPhim',
                        dao_dien_id      = '$daoDienId',
                        nam_phat_hanh        = '$namPhatHanh',
                        quoc_gia_id         = '$quocGiaId',
                        so_tap           = '$soTap',
                        trailer     = '$trailer',
                        mo_ta    = '$moTa'
                    WHERE id = $id";
        

        if (mysqli_query($connect, $sql)) {
            header('Location: index.php?page_layout=phim');
        } else {

            echo 'Lỗi SQL: ' . mysqli_error($connect);
        }
    } else {

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            echo "<p class= 'warning'> Vui lòng nhập đầy đủ thông tin ! </p>";
        }
    }
    ?>

    

</body>

</html><!DOCTYPE html>



