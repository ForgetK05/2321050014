<?php
include("connect.php");
ob_start();

// Lấy ID từ URL
if(isset($_GET['id'])){
    $id = $_GET["id"];
} else {
    header("location: index.php");
    exit();
}

if (isset($_POST['btn_submit'])) {
    
    // Lấy dữ liệu văn bản
    $tenPhim = $_POST["ten_phim"];
    $daoDien = $_POST["dao_dien"];
    $namPhatHanh = $_POST["nam_phat_hanh"];
    $quocGia = $_POST["quoc_gia"];
    $soTap = $_POST["so_tap"];
    $trailer = $_POST["trailer"];
    $moTa = $_POST["mo_ta"];
    // Xử lý file upload
    if (!empty($_FILES['poster']['name'])) {
        $filename = time() . "_" . $_FILES['poster']['name']; 
        $poster = "upload/" . $filename; 
        
        $tmp_poster = $_FILES['poster']['tmp_name'];
        move_uploaded_file($tmp_poster, $poster);
        
    } else {
        $poster = $_POST['poster_cu'];
    }

    // Kiểm tra dữ liệu rỗng (Không cần kiểm tra poster vì kiểu gì cũng có giá trị cũ hoặc mới)
    if ($tenPhim && $daoDien && $namPhatHanh && $quocGia && $soTap && $trailer && $moTa) {
        $sql = "UPDATE `phim` SET 
                `ten_phim`='$tenPhim',
                `dao_dien_id`='$daoDien',
                `nam_phat_hanh`='$namPhatHanh',
                `poster`='$poster',
                `quoc_gia_id`='$quocGia',
                `so_tap`='$soTap',
                `trailer`='$trailer',
                `mo_ta`='$moTa' 
                WHERE id='$id'";
        
        mysqli_query($connect, $sql);
        
        // Chuyển hướng về trang danh sách
        header('location: index.php?page_layout=phim');
        exit();
    } else {
        $error_msg = "Vui lòng nhập đầy đủ thông tin!";
    }
}

//LẤY DỮ LIỆU ĐỂ HIỂN THỊ RA FORM
$sql = "SELECT * FROM phim WHERE id = '$id'";
$result = mysqli_query($connect, $sql);
$phim = mysqli_fetch_assoc($result);

// Nếu ID không tồn tại trong database (tránh lỗi Array offset on null)
if (!$phim) {
    echo "Không tìm thấy phim!";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cap nhat phim</title>
    <style>
        .container { display: flex; justify-content: center; align-items: center; flex-direction: column;}
        .warning { color: red; display: flex; justify-content: center; }
        form div{ width: 65%; margin: auto; margin-bottom: 10px; }
        input, select { width: 100%; padding: 5px; }
    </style>
</head>

<body>
    <div class="container">
        <form action="" method="post" enctype="multipart/form-data">
            <h1>Cập nhật phim</h1>
            
            <?php if(isset($error_msg)) { echo "<p class='warning'>$error_msg</p>"; } ?>

            <div>
                <label>Tên phim</label>
                <input type="text" name="ten_phim" value="<?php echo $phim['ten_phim'] ?>">
            </div>
            <div>
                <label>Đạo diễn</label>
                <select name="dao_dien">
                    <?php
                        $sql = "SELECT nd.* FROM `nguoi_dung` nd JOIN vai_tro vt on nd.vai_tro_id = vt.id WHERE vt.id = 2";
                        $result_dd = mysqli_query($connect, $sql);
                        while ($daoDien = mysqli_fetch_assoc($result_dd)) {
                        ?>
                    <option value="<?php echo $daoDien['id']?>" <?php echo ($phim['dao_dien_id'] == $daoDien['id']) ? 'selected' : ''; ?>>
                        <?php echo $daoDien['ho_ten'] ?>
                    </option>
                    <?php } ?>
                </select>
            </div>
            <div>
                <label>Năm phát hành</label>
                <input type="number" name="nam_phat_hanh" value="<?php echo $phim['nam_phat_hanh'] ?>">
            </div>
            
            <div>
                <label>Poster (Chọn ảnh mới để thay đổi)</label>
                <input type="hidden" name="poster_cu" value="<?php echo $phim['poster'] ?>">
                <input type="file" name="poster">
                <p>Ảnh hiện tại: <?php echo $phim['poster'] ?></p>
            </div>

            <div>
                <label>Quốc gia</label>
                <select name="quoc_gia">
                    <?php
                        $sql = "SELECT * FROM `quoc_gia`";
                        $result_qg = mysqli_query($connect, $sql);
                        while ($quocGia = mysqli_fetch_assoc($result_qg)) {
                    ?>
                    <option value="<?php echo $quocGia['id']?>" <?php echo ($phim['quoc_gia_id'] == $quocGia['id']) ? 'selected' : ''; ?>>
                        <?php echo $quocGia['ten_quoc_gia'] ?>
                    </option>
                    <?php } ?>
                </select>
            </div>
            <div>
                <label>Số tập</label>
                <input type="number" name="so_tap" value="<?php echo $phim['so_tap'] ?>">
            </div>
            <div>
                <label>Trailer</label>
                <input type="text" name="trailer" value="<?php echo $phim['trailer'] ?>">
            </div>
            <div>
                <label>Mô tả</label>
                <input type="text" name="mo_ta" value="<?php echo $phim['mo_ta'] ?>">
            </div>
            <div class="box">
                <input type="submit" name="btn_submit" value="Cập nhật">
            </div>
        </form>
    </div>
</body>
</html>
<?php ob_end_flush(); ?>