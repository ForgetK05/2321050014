    <style>
       

        .container23 {
            max-width: 1000px;
            margin: 0 auto;
            display: flex;
            gap: 30px;
        }

        .poster {
            flex: 0 0 300px;
        }

        .poster img {
            width: 100%;
            border-radius: 10px;
        }

        .info {
            flex: 1;
        }

        .info h1 {
            font-size: 36px;
            margin: 0 0 20px 0;
        }

        .info p {
            margin: 10px 0;
            font-size: 16px;
        }

        .info b {
            color: #ff671f;
        }

        .button {
            background: #ff671f;
            color: #fff;
            padding: 12px 24px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 20px;
        }

        .button:hover {
            background: #e85a0a;
        }

        .warning {
            color: red;
        }
    </style>
</head>

    <?php
    $id = $_GET["id"] ?? null;
    if (!$id) {
        echo '<p class="warning">Thiếu tham số id</p>';
        exit;
    }

    require 'connect.php';

    $sql = "SELECT p.*, 
                qg.ten_quoc_gia, 
                nd.ho_ten AS ten_dao_dien 
            FROM phim p
            LEFT JOIN quoc_gia qg ON qg.id = p.quoc_gia_id
            LEFT JOIN nguoi_dung nd ON nd.id = p.dao_dien_id
            WHERE p.id = $id";

    $result = mysqli_query($connect, $sql);

    if (!$result || mysqli_num_rows($result) == 0) {
        echo '<p class="warning">Không tìm thấy phim</p>';
        exit;
    }

    $detail = mysqli_fetch_assoc($result);
    ?>

    <div class="container23">
        <div class="poster">
            <img src="<?php echo htmlspecialchars($detail['poster']); ?>" alt="">
        </div>
        <div class="info">
            <h1><?php echo htmlspecialchars($detail["ten_phim"]); ?></h1>
            <p><b>Năm phát hành:</b> <?php echo htmlspecialchars($detail['nam_phat_hanh']); ?></p>
            <p><b>Đạo diễn:</b> <?php echo htmlspecialchars($detail['ten_dao_dien'] ?? 'N/A'); ?></p>
            <p><b>Quốc gia:</b> <?php echo htmlspecialchars($detail['ten_quoc_gia'] ?? 'N/A'); ?></p>
            <p><b>Số tập:</b> <?php echo htmlspecialchars($detail['so_tap']); ?></p>
            <p><b>Mô tả:</b></p>
            <p><?php echo htmlspecialchars($detail['mo_ta']); ?></p>
            <button class="button">Xem ngay</button>
            <iframe></iframe>

        </div>
    </div>