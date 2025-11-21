CREATE DATABASE IF NOT EXISTS quan_ly_web_phim;
USE quan_ly_web_phim;

-- 1. Bảng vai trò
CREATE TABLE IF NOT EXISTS vai_tro
(
    id          INT PRIMARY KEY,
    ten_vai_tro VARCHAR(50) NOT NULL
);

-- 2. Bảng người dùng
CREATE TABLE IF NOT EXISTS nguoi_dung
(
    id            INT PRIMARY KEY,
    ten_dang_nhap VARCHAR(50) NOT NULL,
    mat_khau      VARCHAR(50) NOT NULL,
    ho_ten        VARCHAR(50),
    email         VARCHAR(50),
    sdt           VARCHAR(10),
    ngay_sinh     DATETIME,
    vai_tro_id    INT,
    FOREIGN KEY (vai_tro_id) REFERENCES vai_tro (id)
);

-- 3. Bảng quốc gia
CREATE TABLE IF NOT EXISTS quoc_gia
(
    id           INT PRIMARY KEY,
    ten_quoc_gia VARCHAR(30)
);

-- 4. Bảng thể loại
CREATE TABLE IF NOT EXISTS the_loai
(
    id           INT PRIMARY KEY,
    ten_the_loai VARCHAR(50) NOT NULL
);

-- 5. Bảng phim
CREATE TABLE IF NOT EXISTS phim
(
    id            INT PRIMARY KEY,
    ten_phim      VARCHAR(100) NOT NULL,
    dao_dien_id   INT,
    nam_phat_hanh INT,
    poster        VARCHAR(255),
    quoc_gia_id   INT,
    so_tap        INT,
    trailer       VARCHAR(255),
    mo_ta         TEXT,
    FOREIGN KEY (dao_dien_id) REFERENCES nguoi_dung (id),
    FOREIGN KEY (quoc_gia_id) REFERENCES quoc_gia (id)
);

-- 6. Bảng phim - diễn viên
CREATE TABLE IF NOT EXISTS phim_dien_vien
(
    id           INT PRIMARY KEY,
    phim_id      INT,
    dien_vien_id INT,
    FOREIGN KEY (phim_id) REFERENCES phim (id),
    FOREIGN KEY (dien_vien_id) REFERENCES nguoi_dung (id)
);


CREATE TABLE IF NOT EXISTS phim_the_loai
(
    id          INT PRIMARY KEY,
    phim_id     INT,
    the_loai_id INT,
    FOREIGN KEY (phim_id) REFERENCES phim (id),
    FOREIGN KEY (the_loai_id) REFERENCES the_loai (id)
);


CREATE TABLE IF NOT EXISTS tap_phim
(
    id         INT PRIMARY KEY,
    phim_id    INT,
    so_tap     INT,
    tieu_de    VARCHAR(100),
    thoi_luong INT,
    trailer    VARCHAR(255),
    FOREIGN KEY (phim_id) REFERENCES phim (id)
);


# Dữ liệu bảng vai trò
INSERT IGNORE INTO vai_tro (id, ten_vai_tro)
VALUES (1, 'admin'),
       (2, 'dao_dien'),
       (3, 'dien_vien'),
       (4, 'user');

# Quốc gia
INSERT IGNORE INTO quoc_gia (id, ten_quoc_gia)
VALUES (1, 'Việt Nam'),
       (2, 'Mỹ'),
       (3, 'Hàn Quốc'),
       (4, 'Nhật Bản'),
       (5, 'Trung Quốc'),
       (6, 'Ấn Độ');

# Thể loại
INSERT IGNORE INTO the_loai (id, ten_the_loai)
VALUES (1, 'Hành Động'),
       (2, 'Phiêu Lưu'),
       (3, 'Hài Hước'),
       (4, 'Kinh Dị'),
       (5, 'Tình Cảm'),
       (6, 'Viễn Tưởng'),
       (7, 'Hoạt Hình'),
       (8, 'Tài Liệu'),
       (9, 'Chiến Tranh'),
       (10, 'Âm Nhạc');

# NGười dùng
INSERT IGNORE INTO nguoi_dung (id, ten_dang_nhap, mat_khau, ho_ten, email, sdt, ngay_sinh, vai_tro_id)
VALUES
    -- Đạo diễn
    (1, 'nolan', 'pass123', 'Christopher Nolan', 'nolan@gmail.com', '0123456789', '1970-07-30', 2),
    (2, 'coppola', 'pass123', 'Francis Ford Coppola', 'coppola@gmail.com', '0123456790', '1939-04-07', 2),
    (3, 'bong_joonho', 'pass123', 'Bong Joon-ho', 'bongjh@gmail.com', '0123456791', '1969-09-14', 2),
    (4, 'miyazaki', 'pass123', 'Hayao Miyazaki', 'miyazaki@gmail.com', '0123456792', '1941-01-05', 2),
    (5, 'fincher', 'pass123', 'David Fincher', 'fincher@gmail.com', '0123456793', '1962-08-28', 2),
    (6, 'cameron', 'pass123', 'James Cameron', 'cameron@gmail.com', '0123456794', '1954-08-16', 2),
    (7, 'joe_russo', 'pass123', 'Joe Russo', 'joe_russo@gmail.com', '0123456795', '1971-07-18', 2),
    (8, 'gilligan', 'pass123', 'Vince Gilligan', 'gilligan@gmail.com', '0123456796', '1967-02-10', 2),
    (9, 'benioff', 'pass123', 'David Benioff', 'benioff@gmail.com', '0123456797', '1970-09-25', 2),
    (10, 'darabont', 'pass123', 'Frank Darabont', 'darabont@gmail.com', '0123456798', '1959-01-28', 2),
    -- Diễn viên
    (11, 'leo', 'pass123', 'Leonardo DiCaprio', 'leo@gmail.com', '0987654321', '1974-11-11', 3),
    (12, 'bale', 'pass123', 'Christian Bale', 'bale@gmail.com', '0987654322', '1974-01-30', 3),
    (13, 'pacino', 'pass123', 'Al Pacino', 'pacino@gmail.com', '0987654323', '1940-04-25', 3),
    (14, 'pitt', 'pass123', 'Brad Pitt', 'pitt@gmail.com', '0987654324', '1963-12-18', 3),
    (15, 'norton', 'pass123', 'Edward Norton', 'norton@gmail.com', '0987654325', '1969-08-18', 3),
    (16, 'cranston', 'pass123', 'Bryan Cranston', 'cranston@gmail.com', '0987654326', '1956-03-07', 3),
    (17, 'emilia', 'pass123', 'Emilia Clarke', 'emilia@gmail.com', '0987654327', '1986-10-23', 3),
    (18, 'freeman', 'pass123', 'Morgan Freeman', 'freeman@gmail.com', '0987654328', '1937-06-01', 3),
    (19, 'robbins', 'pass123', 'Tim Robbins', 'robbins@gmail.com', '0987654329', '1958-10-16', 3),
    -- Admin
    (20, 'admin', 'pass123', 'Người Phán Xử', 'nguoiphanxu@gmail.com', '0123001230', '2005-05-29', 1),
    -- USER THƯỜNG
    (21, 'user01', '123456', 'Nguyễn Tiến Khởi', 'khoinguyen@gmail.com', '0921111222', '1998-09-03', 4),
    (22, 'user02', '123456', 'Dỗ Trung Kiên', 'kientrung@gmail.com', '0922222333', '2001-06-14', 4),
    (23, 'user03', '123456', 'Đào Quang Lộc', 'locdao@gmail.com', '0923333444', '2002-02-28', 4),
    (24, 'user04', '123456', 'Trần Minh Tuấn', 'lele@gmail.com', '0924444555', '1999-12-12', 4),
    (25, 'user05', '123456', 'Lê Văn Hoàng', 'hello@gmail.com', '0925555666', '2000-03-21', 4),
    (26, 'user06', '123456', 'Phạm Thị Hồng', 'fefe@gmail.com', '0926666777', '1997-11-11', 4),
    (27, 'user07', '123456', 'Vũ Đức Anh', 'skibidi@gmail.com', '0927777888', '2001-01-01', 4),
    (28, 'user08', '123456', 'Ngô Thị Lan', 'idontknow@gmail.com', '0928888999', '1998-08-08', 4),
    (29, 'user09', '123456', 'Trịnh Văn Long', 'xinchao@gmail.com', '0929999000', '2002-05-05', 4),
    (30, 'user10', '123456', 'Đặng Thị Mai', 'sigma@gmail.com', '0921010101', '1996-07-07', 4);

# Phim
INSERT IGNORE INTO phim (id, ten_phim, dao_dien_id, nam_phat_hanh, poster, quoc_gia_id, so_tap, trailer, mo_ta)
VALUES
    (1, 'Inception', 1, 2010, 'inception.jpg', 2, 1, 'inception_trailer.mp4', 'Một giấc mơ trong mơ, kẻ ăn trộm ước mơ.'),
    (2, 'The Dark Knight', 1, 2008, 'dark_knight.jpg', 2, 1, 'dark_knight_trailer.mp4', 'Batman đấu với Joker trong cuộc chiến giành công lý.'),
    (3, 'Titanic', 6, 1997, 'titanic.jpg', 2, 1, 'titanic_trailer.mp4', 'Câu chuyện tình yêu lãng mạn trên con tàu định mệnh.'),
    (4, 'The Godfather', 2, 1972, 'godfather.jpg', 2, 1, 'godfather_trailer.mp4', 'Gia đình mafia nắm quyền lực và mưu mô.'),
    (5, 'Fight Club', 5, 1999, 'fight_club.jpg', 2, 1, 'fight_club_trailer.mp4', 'Một hội bí mật, những trận chiến nội tâm.'),
    (6, 'Parasite', 3, 2019, 'parasite.jpg', 4, 1, 'parasite_trailer.mp4', 'Sự chênh lệch giai cấp dẫn đến những hệ quả khôn lường.'),
    (7, 'Spirited Away', 4, 2001, 'spirited_away.jpg', 5, 1, 'spirited_away_trailer.mp4', 'Cô bé lạc vào thế giới linh hồn và ma quỷ.'),
    (8, 'Breaking Bad', 8, 2008, 'breaking_bad.jpg', 2, 62, 'breaking_bad_trailer.mp4', 'Một giáo viên hóa chất trở thành trùm ma túy.'),
    (9, 'Game of Thrones', 9, 2011, 'game_of_thrones.jpg', 3, 73, 'got_trailer.mp4', 'Cuộc chiến quyền lực giữa các gia tộc ở Westeros.'),
    (10, 'The Shawshank Redemption', 10, 1994, 'shawshank.jpg', 2, 1, 'shawshank_trailer.mp4', 'Hy vọng và tự do ở nhà tù Shawshank.'),
    (11, 'Avengers: Endgame', 1, 2019, 'avengers_endgame.jpg', 2, 1, 'avengers_endgame_trailer.mp4', 'Cuộc chiến cuối cùng của các siêu anh hùng chống lại Thanos.'),
    (12, 'Joker', 2, 2019, 'joker.jpg', 2, 1, 'joker_trailer.mp4', 'Hành trình biến đổi của Arthur Fleck thành Joker.'),
    (13, 'Interstellar', 5, 2014, 'interstellar.jpg', 2, 1, 'interstellar_trailer.mp4', 'Cuộc hành trình vượt thời gian và không gian để cứu nhân loại.'),
    (14, 'The Matrix', 1, 1999, 'matrix.jpg', 2, 1, 'matrix_trailer.mp4', 'Cuộc chiến giữa con người và máy móc trong thế giới ảo.'),
    (15, 'Forrest Gump', 2, 1994, 'forrest_gump.jpg', 2, 1, 'forrest_gump_trailer.mp4', 'Cuộc đời kỳ diệu của Forrest Gump qua các sự kiện lịch sử.'),
    (16, 'The Lion King', 7, 1994, 'lion_king.jpg', 2, 1, 'lion_king_trailer.mp4', 'Hành trình trưởng thành của chú sư tử Simba.'),
    (17, 'Avatar', 1, 2009, 'avatar.jpg', 2, 1, 'avatar_trailer.mp4', 'Cuộc chiến bảo vệ hành tinh Pandora khỏi con người.'),
    (18, 'The Silence of the Lambs', 4, 1991, 'silence_lambs.jpg', 2, 1, 'silence_lambs_trailer.mp4', 'Cuộc đối đầu căng thẳng giữa FBI và kẻ giết người hàng loạt.'),
    (19, 'Coco', 7, 2017, 'coco.jpg', 2, 1, 'coco_trailer.mp4', 'Cuộc phiêu lưu của cậu bé Miguel vào thế giới người chết.'),
    (20, 'The Social Network', 2, 2010, 'social_network.jpg', 2, 1, 'social_network_trailer.mp4', 'Câu chuyện về sự ra đời của Facebook và Mark Zuckerberg.'),
    (21, 'Gladiator', 1, 2000, 'gladiator.jpg', 2, 1, 'gladiator_trailer.mp4', 'Cuộc hành trình trả thù của một chiến binh La Mã.'),
    (22, 'The Departed', 5, 2006, 'departed.jpg', 2, 1, 'departed_trailer.mp4', 'Cuộc đối đầu giữa cảnh sát và mafia ở Boston.'),
    (23, 'La La Land', 10, 2016, 'la_la_land.jpg', 2, 1, 'la_la_land_trailer.mp4', 'Câu chuyện tình yêu giữa một nhạc sĩ và một nữ diễn viên.'),
    (24, 'Mad Max: Fury Road', 1, 2015, 'mad_max.jpg', 2, 1, 'mad_max_trailer.mp4', 'Cuộc chạy trốn trong thế giới hậu tận thế đầy hỗn loạn.'),
    (25, 'The Grand Budapest Hotel', 2, 2014, 'grand_budapest.jpg', 2, 1, 'grand_budapest_trailer.mp4', 'Những cuộc phiêu lưu hài hước tại khách sạn Grand Budapest.'),
    (26, 'Whiplash', 10, 2014, 'whiplash.jpg', 2, 1, 'whiplash_trailer.mp4', 'Cuộc đấu tranh khốc liệt để trở thành tay trống xuất sắc.'),
    (27, 'The Witcher', 6, 2019, 'witcher.jpg', 3, 16, 'witcher_trailer.mp4', 'Hành trình của thợ săn quái vật Geralt ở thế giới giả tưởng.'),
    (28, 'Stranger Things', 8, 2016, 'stranger_things.jpg', 3, 34, 'stranger_things_trailer.mp4', 'Những hiện tượng kỳ lạ xảy ra ở thị trấn Hawkins.'),
    (29, 'Black Mirror', 6, 2011, 'black_mirror.jpg', 2, 22, 'black_mirror_trailer.mp4', 'Những câu chuyện đen tối về công nghệ và xã hội tương lai.'),
    (30, 'Sherlock', 2, 2010, 'sherlock.jpg', 2, 13, 'sherlock_trailer.mp4', 'Những vụ án ly kỳ do thám tử Sherlock Holmes giải quyết.');

# Phim - Diễn viên
INSERT IGNORE INTO phim_dien_vien (id, phim_id, dien_vien_id)
VALUES
    (1, 1, 3),
    (2, 1, 6),
    (3, 2, 9),
    (4, 2, 12),
    (5, 3, 15),
    (6, 3, 18),
    (7, 4, 21),
    (8, 4, 24),
    (9, 5, 27),
    (10, 5, 30),
    (11, 6, 3),
    (12, 6, 9),
    (13, 7, 15),
    (14, 7, 21),
    (15, 8, 6),
    (16, 8, 12),
    (17, 9, 18),
    (18, 9, 24),
    (19, 10, 27),
    (20, 10, 30),
    (21, 11, 1),
    (22, 11, 4),
    (23, 12, 7),
    (24, 12, 10),
    (25, 13, 13),
    (26, 13, 16),
    (27, 14, 19),
    (28, 14, 22),
    (29, 15, 25),
    (30, 15, 28);

# Phim - Thể loại
INSERT IGNORE INTO phim_the_loai (id, phim_id, the_loai_id)
VALUES
    (1, 1, 6),
    (2, 1, 2),
    (3, 2, 1),
    (4, 2, 4),
    (5, 3, 5),
    (6, 3, 2),
    (7, 4, 9),
    (8, 4, 4),
    (9, 5, 4),
    (10, 5, 1),
    (11, 6, 4),
    (12, 6, 5),
    (13, 7, 7),
    (14, 7, 2),
    (15, 8, 4),
    (16, 8, 1),
    (17, 9, 9),
    (18, 9, 6),
    (19, 10, 5),
    (20, 10, 2),
    (21, 11, 1),
    (22, 11, 6),
    (23, 12, 4),
    (24, 12, 5),
    (25, 13, 6),
    (26, 13, 2),
    (27, 14, 6),
    (28, 14, 1),
    (29, 15, 5),
    (30, 15, 3);

# Tập phim
INSERT IGNORE INTO tap_phim (id, phim_id, so_tap, tieu_de, thoi_luong, trailer)
VALUES
    (1, 8, 1, 'Pilot', 58, 'breaking_bad_s1e1_trailer.mp4'),
    (2, 8, 2, 'Cat''s in the Bag...', 48, 'breaking_bad_s1e2_trailer.mp4'),
    (3, 8, 3, '...And the Bag''s in the River', 48, 'breaking_bad_s1e3_trailer.mp4'),
    (4, 8, 4, 'Cancer Man', 48, 'breaking_bad_s1e4_trailer.mp4'),
    (5, 8, 5, 'Gray Matter', 48, 'breaking_bad_s1e5_trailer.mp4'),
    (6, 8, 6, 'Crazy Handful of Nothin''', 48, 'breaking_bad_s1e6_trailer.mp4'),
    (7, 8, 7, 'A No-Rough-Stuff-Type Deal', 48, 'breaking_bad_s1e7_trailer.mp4'),
    (8, 9, 1, 'Winter Is Coming', 62, 'got_s1e1_trailer.mp4'),
    (9, 9, 2, 'The Kingsroad', 56, 'got_s1e2_trailer.mp4'),
    (10, 9, 3, 'Lord Snow', 58, 'got_s1e3_trailer.mp4'),
    (11, 9, 4, 'Cripples, Bastards, and Broken Things', 56, 'got_s1e4_trailer.mp4'),
    (12, 9, 5, 'The Wolf and the Lion', 60, 'got_s1e5_trailer.mp4'),
    (13, 9, 6, 'A Golden Crown', 58, 'got_s1e6_trailer.mp4'),
    (14, 9, 7, 'You Win or You Die', 60, 'got_s1e7_trailer.mp4'),
    (15, 9, 8, 'The Pointy End', 59, 'got_s1e8_trailer.mp4'),
    (16, 9, 9, 'Baelor', 57, 'got_s1e9_trailer.mp4'),
    (17, 9, 10, 'Fire and Blood', 60, 'got_s1e10_trailer.mp4'),
    (18, 27, 1, 'The End''s Beginning', 60, 'witcher_s1e1_trailer.mp4'),
    (19, 27, 2, 'Four Marks', 60, 'witcher_s1e2_trailer.mp4'),
    (20, 27, 3, 'Betrayer Moon', 60, 'witcher_s1e3_trailer.mp4'),
    (21, 27, 4, 'Of Banquets, Bastards and Burials', 60, 'witcher_s1e4_trailer.mp4'),
    (22, 27, 5, 'Bottled Appetites', 60, 'witcher_s1e5_trailer.mp4'),
    (23, 27, 6, 'Rare Species', 60, 'witcher_s1e6_trailer.mp4'),
    (24, 27, 7, 'Before a Fall', 60, 'witcher_s1e7_trailer.mp4'),
    (25, 27, 8, 'Much More', 60, 'witcher_s1e8_trailer.mp4'),
    (26, 28, 1, 'Chapter One: The Vanishing of Will Byers', 49, 'stranger_things_s1e1_trailer.mp4'),
    (27, 28, 2, 'Chapter Two: The Weirdo on Maple Street', 55, 'stranger_things_s1e2_trailer.mp4'),
    (28, 28, 3, 'Chapter Three: Holly, Jolly', 51, 'stranger_things_s1e3_trailer.mp4'),
    (29, 28, 4, 'Chapter Four: The Body', 50, 'stranger_things_s1e4_trailer.mp4'),
    (30, 28, 5, 'Chapter Five: The Flea and the Acrobat', 52, 'stranger_things_s1e5_trailer.mp4');

# Drop database
-- DROP DATABASE quan_ly_web_phim;