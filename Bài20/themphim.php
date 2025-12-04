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
    <div class="container">
        <form action="index.php?page_layout=themphim" method="POST">
   
        <div>
            <h1>Thêm phim</h1>
        </div>

        <div>
            <input type="text" name="ten_phim" placeholder="Tên phim">
        </div>
        <div>
            <input type="text" name="dao_dien_id" placeholder="ID đạo diễn">
        </div>
        <div>
            <input type="text" name="nam_phat_hanh" placeholder="Năm phát hành">
        </div>
        <div>
            <input type="text" name="poster" placeholder="Poster">
        </div>
        <div>
            <input type="text" name="quoc_gia_id" placeholder="ID quốc gia">
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
        <button type="submit">Submit</button>

    </form>
    </div>
    <?php
    include 'connect.php'; 
    
    if(!empty($_POST['ten_phim']) &&
        !empty($_POST['dao_dien_id']) &&
        !empty($_POST['nam_phat_hanh']) &&
        !empty($_POST['poster']) &&
        !empty($_POST['quoc_gia_id'])&&
        !empty($_POST['so_tap'])&& 
        !empty($_POST['trailer'])&&
        !empty($_POST['mo_ta'])){
            
            $tenPhim = $_POST['ten_phim'];
            $daoDienId = $_POST['dao_dien_id'];
            $namPhatHanh = $_POST['nam_phat_hanh'];
            $poster = $_POST['poster'];
            $quocGiaId = $_POST['quoc_gia_id'];
            $soTap = $_POST['so_tap'];
            $trailer = $_POST['trailer'];
            $moTa = $_POST['mo_ta'];
    
            $sql = "INSERT INTO phim 
            (ten_phim, dao_dien_id, nam_phat_hanh, poster, quoc_gia_id, so_tap, trailer, mo_ta)
            VALUES
            ('$tenPhim', '$daoDienId', '$namPhatHanh', '$poster', '$quocGiaId', '$soTap', '$trailer', '$moTa')";

            echo $sql;

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

</html>