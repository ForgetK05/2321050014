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
        $sql = "SELECT * FROM the_loai WHERE id = $id";
        $result = mysqli_query($connect, $sql);
        $tenTheLoai = mysqli_fetch_assoc($result);
    ?>

    <div class="container">
        <form action="index.php?page_layout=updatetheloai&id=<?php echo $tenTheLoai["id"] ?>" method="POST">
        <div>
            <h1>Cập nhật thể loại</h1>
        </div>
                <div>
                    <input type="text" name="ten_the_loai" placeholder="Tên thể loại" value="<?php echo $tenTheLoai['ten_the_loai']; ?>"> 
        </div>
        <button type="submit">Submit</button>
    </form>
    </div>
    <?php
    
    if(!empty($_POST['ten_the_loai'])) {
            
            $tenTheLoai = $_POST['ten_the_loai'];
    
    
            $sql = "UPDATE the_loai
                    SET ten_the_loai = '$tenTheLoai'
                    WHERE id = $id";
    

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

</html><!DOCTYPE html>



