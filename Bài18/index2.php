<?php
    //1. Session
    # Thông tin đăng nhập, giỏ hàng, ....
    session_start(); //Bắt đầu session
    $_SESSION['Name'] = "TrungKien";

    echo "Session Name: " . $_SESSION['Name'] . "<br>";

    //2. Cookie
    # Lưu ở phía client
    # Dùng cho những thông tin ít quan trọng
    $cookieName = "user";
    $cookieValue = "Kien";
    // 86400 = 30 days
    setcookie($cookieName, $cookieValue, time() + 86400, "/"); 
    if(isset($_COOKIE[$cookieName])) {
        echo "cookie đã tồn tại";
    } else {
        echo "Cookie chưa được thiết lập!";
    }

?>