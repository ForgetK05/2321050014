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
        <form action="index.php?page_layout=themtheloai" method="POST">
   
        <div>
            <h1>Thêm thể loại</h1>
        </div>

        <div>
            <input type="text" name="ten_the_loai" placeholder="Tên thể loại">
        </div>
        <button type="submit">Submit</button>

    </form>
    </div>
    <?php
    include 'connect.php'; 
    
    if(!empty($_POST['ten_the_loai'])){
            $tenTheLoai = $_POST['ten_the_loai'];
            $sql = "INSERT INTO the_loai (ten_the_loai) VALUES ('$tenTheLoai')";

            echo $sql;

        if (mysqli_query($connect, $sql)) {
            header('Location: index.php?page_layout=theloai');
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