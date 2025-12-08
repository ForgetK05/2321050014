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
        $sql = "SELECT * FROM quoc_gia WHERE id = $id";
        $result = mysqli_query($connect, $sql);
        $quocGia = mysqli_fetch_assoc($result);
    ?>

    <div class="container">
        <form action="index.php?page_layout=updatequocgia&id=<?php echo $quocGia["id"] ?>" method="POST">
        <div>
            <h1>Cập nhật người dùng</h1>
        </div>
        <div>
            <input type="text" name="ten_quoc_gia" placeholder="Tên quốc gia" value="<?php echo $quocGia['ten_quoc_gia']; ?>"> 
        </div>
        <button type="submit">Submit</button>
    </form>
    </div>
    <?php
    
    if(!empty($_POST['ten_quoc_gia'])) {
            
            $tenQuocGia = $_POST['ten_quoc_gia'];
    
    
            $sql = "UPDATE quoc_gia
                    SET ten_quoc_gia = '$tenQuocGia'
                    WHERE id = $id";
    

        if (mysqli_query($connect, $sql)) {
            header('Location: index.php?page_layout=quocgia');
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



