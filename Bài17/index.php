<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buổi 1 php</title>
</head>
<body>
    
    <?php
        // 1. In ra màn hình
        echo "Hello world!<br>" ;
        echo "Hi";
        // 2. Biến
        // Cú pháp: $ + tên biến = giá trị của biến
        $ten = "Trung Kien";
        $tuoi = 20;

        echo $ten . " " . $tuoi . " tuổi <br>";

        // 3. Hằng
        define("soPi","3.14");
        echo soPi . "<br>";

        // 4. Phân biệt ' ' và " "

        echo '$ten' . "<br>";
        echo "$ten" . "<br>";

        // 5. Chuỗi
        // 5.1 Kiểm tra độ dài của chuỗi
        echo strlen($ten) . "<br>";
        //5.2 Đếm số từ
        echo str_word_count($ten) . "<br>";
        //5.3 Tìm kiến kí tự trong chuỗi
        echo strpos($ten, "K"). "<br>";
        // 5.4 Thay thế kí tự trong chuỗi
        echo str_replace("Trung", "Đỗ", $ten) . "<br>";
        
        // 6. Toán tử
        $soThu1 = 10;
        $soThu2 = 5;
        // Phép cộng 
        echo $soThu1 + $soThu2 . "<br>";
        # + - * / 
        echo $soThu1 - $soThu2 . "<br>";
        echo $soThu1 * $soThu2 . "<br>";
        echo $soThu1 / $soThu2 . "<br>";
        
        // Toán tử gán
        # += -= *= /= %=
        echo $soThu1 % $soThu2 . "<br>";

        //Toán tử so sánh: == ; != ; > ; < ; >= ; <= ; ===
        echo $soThu1 < $soThu2 . "<br>" ;

        // 7. Câu điều kiện
        //  if ("Điều kiện") {
            // logic
        //  }
        //  elseif("Điều kiện"){

        //  } else {
            // logic
        //  }

        // Kiểm tra tổng của số thứ nhất và số thứ 2 (nếu < 15 thì in ra nhỏ hơn 15)
        // Nếu  = 15 thì in ra tổng = 15 
        // còn lại in ra lớn hơn 15

        $tong = $soThu1 + $soThu2;

        if ($tong < 15){
            echo  "<br>" . $tong . " nhỏ hơn 15";
        } elseif ($tong = 15){
            echo  "<br>" . $tong . " tổng bằng 15";
        } else {
            echo  "<br>" . $tong . " lớn hơn 15";
        }

        // 8. switch case

        $color = "red";

        switch($color){
            case "red":
                echo "<br>";
                echo "IS RED";
                break;
            case "blue":
                echo "<br>";
                echo "IS BLUE";
                break;
            default:
                echo "<br>";
                echo "no color";
                break;
        }

        // 9. for
        // for ($i = 0; $i < 100 ; $i++){
        //     echo $i . "<br>";
        // }

        // 10. Mảng
        echo "<br>";

        $mang = ["Anh", "Nhat Anh", "Vu Anh"];

        // Đếm phần tử
        echo count ($mang) . "<br>";
        echo $mang[1];
        print_r ($mang);
        echo "<br>";

        echo $mang[0] = "Hai Anh";
        print_r ($mang);

        echo "<br>";
        $mang[] = "Tam";
        print_r ($mang);

        #xoá
        echo "<br>";
        unset($mang[3]);
        print_r ($mang);
        




    ?>
</body>
</html>