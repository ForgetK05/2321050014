<?php
    include "connect.php";
    $id = $_GET['id'];
    $sql = "DELETE FROM phim WHERE id = $id";
    mysqli_query($connect, $sql);//thực thi câu lệnh 
    mysqli_close($connect);
    header("Location: index.php?page_layout=phim");
?>