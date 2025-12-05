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
        <form action="index.php?page_layout=themquocgia" method="POST">
        <div>
            <h1>Thêm quốc gia</h1>
        </div>
        <div>
            <input type="text" name="ten_quoc_gia" placeholder="Tên quốc gia">
        </div>
        <button type="submit">Submit</button>

    </form>
    </div>
    <?php
    include 'connect.php'; 
    
    if(!empty($_POST['ten_quoc_gia'])){
        $tenQuocGia = $_POST['ten_quoc_gia'];
        $sql = "INSERT INTO quoc_gia (ten_quoc_gia) VALUES ('$tenQuocGia')";

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

</html>