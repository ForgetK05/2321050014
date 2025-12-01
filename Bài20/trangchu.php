<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    table {
        display: flex;
        margin: 0;
        align-items: center;
        justify-content: center;
        
    }

    th,
    td {
        border: 1px solid black;
        border-radius: 5px;
        padding: 8px;
        text-align: left;
        box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);
    }

    .xoa{
        color: red;
        text-decoration: none;
        font-weight: bold;
    }
</style>

<body>
    <?php
    session_start();
    if(!isset($_SESSION["username"])){
        header('location: login.php');
    }
    ?>

    <h1>Trang chủ</h1>
    <?php
        echo "xin chào " . $_SESSION["username"];
    ?>
</body>
</html>