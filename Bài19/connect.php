<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "quan_ly_web_phim";

    // tạo kết nối
    $connect = mysqli_connect($servername, $username, $password, $database);
    // kiểm tra kết nối
    if(!$connect){
        die("Kết nối thất bại" . $connect->connect_error);
    }   
    echo "Kết nối thành công";

?>