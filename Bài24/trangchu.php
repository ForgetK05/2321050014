
    <main>
        <div class="main1">
            <div class="main1-1">
                <div>
                    <img class="pic1" width="70%" src="img/banner1.jpg" alt="">
                </div>
                <div class="banner">
                    <!-- <img class="banner" width="70%" src="img/mua-do2-1122.jpeg" alt=""> -->
                    <div class="banner-content">
                        <p id="Tên phim"></p>
                        <p id="Năm"> </p>
                        <p id="Thời lượng"> </p>
                        <p id="Quốc gia"> </p>
                        <p id="Độ tuổi"> </p>
                        <br>
                        <a id="Trailer" href="#" target="_blank"
                            style="padding:0px 10px  0px 10px; background-color: rgb(231, 157, 19); color: white; text-decoration: none; border-radius: 25px;">
                            <p style="color:aliceblue; ">Trailer</p>
                        </a>
                    </div>
                </div>
                <!-- <div class="video">
                    <video controls>
                        <source src="G:\Download\v10025g50000cnhfhlnog65khj8j1atg.mov" type="video/mov">
                    </video>
                </div> -->
                <div>
                    <img class="pic1" width="70%" src="img/qc.jpg" alt="">
                </div>
            </div>
        </div>
        <div class="main2">
            <?php
                include("connect.php");
                $sql = "SELECT * FROM the_loai";
                $theLoai = mysqli_query($connect, $sql);
                while ($hang = mysqli_fetch_assoc($theLoai)) {
                    $sql = "SELECT p.*
                    FROM phim p
                    JOIN phim_the_loai pl ON pl.phim_id = p.id
                    WHERE pl.the_loai_id = {$hang['id']}
                    ORDER BY p.id DESC LIMIT 6
                    ";

                    $result = mysqli_query($connect, $sql);

                    if (mysqli_num_rows($result) == 0) {
                        continue; 
                    }
            ?>
            <div class="dm1">
                <p><?php echo $hang['ten_the_loai']; ?></p>
                <div class="dm1-1"> 
                        <?php
                            
                            while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                    <div>
                        <a href="index.php?page_layout=chi_tiet_phim&id=<?php echo $row['id']; ?>" onclick="chonPhim(1)">
                            <img class="pic2" src="<?php echo $row['poster']; ?>" alt="">

                            <div class="font"><?php echo $row['ten_phim']; ?></div>
                        </a>
                    </div>
                    <!-- <div>
                        <a href="#" onclick="chonPhim(2)">
                            <img class="pic2" src="img/phim/bongdungtrungso.jpg" alt="">
                            <div class="font">Bỗng dưng trúng số</div>
                        </a>
                    </div>
                    <div>
                        <a href="#" onclick="chonPhim(3)">
                            <img class="pic2" src="img/phim/cam.jpg" alt="">
                            <div class="font">Cám</div>
                        </a>
                    </div>
                    <div>
                        <a href="#" onclick="chonPhim(4)">
                            <img class="pic2" src="img/phim/cogiaoemlaso1.jpg" alt="">
                            <div class="font">Cô giáo em là số 1</div>
                        </a>
                    </div>
                    <div>
                        <a href="#" onclick="chonPhim(5)">
                            <img class="pic2" src="img/phim/conan.jpg" alt="">
                            <div class="font">Conan</div>
                        </a>
                    </div>
                    <div>
                        <a href="#" onclick="chonPhim(6)">
                            <img class="pic2" src="img/phim/deptraithaysaisai.jpg" alt="">
                            <div class="font">Đẹp trai thấy sai sai</div>
                        </a>
                    </div> --> 
                    <?php } ?>
                </div>
            </div>
            <?php } ?>
        </div>



    </main>
    <!--  -->
    <footer>
        <div class="footer-main">
            <div class="footer-col">
                <ul>
                    <li><img src="img/logo.png" alt="FPT Play" style="width:120px; margin-bottom:16px;"></li>
                    <li><img src="img/Bo-cong-thuong.png" alt="Bộ Công Thương" style="width:90px; margin-bottom:8px;">
                    </li>
                    <li><img src="img/_dmca_premi_badge_4.png" alt="DMCA" style="width:90px;"></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Về FPT Play</h4>
                <ul>
                    <li>Giới thiệu</li>
                    <li>Các gói dịch vụ</li>
                    <li>Liên hệ</li>
                    <li>Trung tâm hỗ trợ</li>
                    <li>Thông tin</li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Dịch vụ</h4>
                <ul>
                    <li>Gói DATA</li>
                    <li>Quảng cáo</li>
                    <li>Mua gói</li>
                    <li>Bảo hành</li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Quy định</h4>
                <ul>
                    <li>Điều khoản sử dụng</li>
                    <li>Chính sách thanh toán</li>
                    <li>Chính sách bảo mật thông tin dữ liệu</li>
                    <li>Cam kết của FPT Telecom</li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Liên hệ</h4>
                <ul>
                    <li>19006600</li>
                    <li>hotrofptplay@fpt.com</li>
                    <li>Theo dõi chúng tôi trên:</li>
                    <li>
                        <span class="footer-social">
                            <img src="/Bài7/fpt/img/facebook.png" alt="Facebook" style="width:24px;">
                            <img src="/Bài7/fpt/img/youtube.png" alt="Youtube" style="width:24px;">
                        </span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>
                Công ty Cổ phần Viễn Thông FPT - Người đại diện: Ông Hoàng Việt Anh. Trụ sở: Tầng 2, Tòa nhà FPT Cầu
                Giấy, Số 17 Phố Duy Tân, Phường Dịch Vọng Hậu, Quận Cầu Giấy, TP.Hà Nội<br>
                Địa chỉ liên lạc: Tầng 9, Block A, tòa nhà FPT Cầu Giấy, số 10 Phạm Văn Bạch, quận Cầu Giấy, TP Hà
                Nội<br>
                Số điện thoại liên hệ: 024 7300 2222. Thư điện tử: hotrokhachhang@fpt.com hoặc hotrofptplay@fpt.com<br>
                <br>
                Giấy chứng nhận đăng ký doanh nghiệp số 0101778163 do Sở Kế hoạch và Đầu tư Thành phố Hà Nội cấp lần đầu
                ngày 28/7/2005, cấp đăng ký thay đổi lần thứ 32 vào ngày 21/12/2023.<br>
                Giấy phép cung cấp dịch vụ phát thanh, truyền hình trả tiền số 377/GP-BTTTT cấp sửa đổi bổ sung lần 1
                ngày 10/10/2023.
            </p>
        </div>
    </footer>

    <script src="script.js"></script>
