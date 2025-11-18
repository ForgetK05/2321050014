CREATE DATABASE IF NOT EXISTS quan_li_web_film;
USE quan_li_web_film;

-- 1.KHÔNG PHỤ THUỘC (BẢNG CHA)
CREATE TABLE IF NOT EXISTS the_loai (
    id INT PRIMARY KEY,
    ten_the_loai VARCHAR(50)
);

CREATE TABLE IF NOT EXISTS vai_tro (
    id INT PRIMARY KEY,
    ten_vai_tro VARCHAR(50)
);

CREATE TABLE IF NOT EXISTS quoc_gia (
    id INT PRIMARY KEY,
    ten_quoc_gia VARCHAR(50)
);

-- 2. PHỤ THUỘC VÀO NHÓM 1
CREATE TABLE IF NOT EXISTS user (
    id INT PRIMARY KEY,
    ten_dang_nhap VARCHAR(50),
    mat_khau VARCHAR(50),
    ho_ten VARCHAR(50),
    email VARCHAR(50),
    sdt VARCHAR(10),
    vai_tro_id INT,
    ngay_sinh DATE,
    FOREIGN KEY (vai_tro_id) REFERENCES vai_tro(id)
);

CREATE TABLE IF NOT EXISTS phim (
    id INT PRIMARY KEY,
    ten_phim VARCHAR(100),
    dao_dien VARCHAR(100),
    nam_phat_hanh INT,
    poster VARCHAR(100),
    quoc_gia_id INT,
    so_tap INT,
    trailer VARCHAR(100),
    mo_ta TEXT,
    FOREIGN KEY (quoc_gia_id) REFERENCES quoc_gia(id)
);

-- 3.PHỤ THUỘC VÀO BẢNG 'PHIM' VÀ 'THE_LOAI'
CREATE TABLE IF NOT EXISTS phim_dien_vien (
    id INT PRIMARY KEY,
    phim_id INT,
    dien_vien_id INT,
    FOREIGN KEY (phim_id) REFERENCES phim(id)
);

CREATE TABLE IF NOT EXISTS phim_the_loai (
    id INT,
    the_loai_id INT,
    PRIMARY KEY (id, the_loai_id),
    FOREIGN KEY (id) REFERENCES phim(id),
    FOREIGN KEY (the_loai_id) REFERENCES the_loai(id)
);

CREATE TABLE IF NOT EXISTS tap_phim (
    id INT PRIMARY KEY,
    so_tap INT,
    tieu_de VARCHAR(100),
    phim_id INT,
    thoi_luong INT,
    trailer VARCHAR(100),
    FOREIGN KEY (phim_id) REFERENCES phim(id)
);

INSERT INTO quoc_gia(id, ten_quoc_gia) VALUES
(1, 'USA'),
(2, 'South Korea'),
(3, 'UK'),
(4, 'France'),
(5, 'Germany');

INSERT INTO vai_tro(id, ten_vai_tro) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'Editor'),
(4, 'VIP');

INSERT INTO the_loai(id, ten_the_loai) VALUES
(1, 'Hành Động'),
(2, 'Drama'),
(3, 'Hài Kịch'),
(4, 'Giật Gân'),
(5, 'Khoa Học Viễn Tưởng'),
(6, 'Lãng Mạn'),
(7, 'Kinh Dị'),
(8, 'Phiêu Lưu'),
(9, 'Tài Liệu'),
(10, 'Hoạt Hình');

INSERT INTO phim(id, ten_phim, dao_dien, nam_phat_hanh, poster, quoc_gia_id, so_tap, trailer, mo_ta) VALUES
(1, 'Inception', 'Christopher Nolan', 2010, 'inception.jpg', 1, 1, 'inception_trailer.mp4', 'A mind-bending thriller about dream invasion.'),
(2, 'Parasite', 'Bong Joon-ho', 2019, 'parasite.jpg', 2, 1, 'parasite_trailer.mp4', 'A dark comedy thriller exploring class disparity.'),
(3, 'The Dark Knight', 'Christopher Nolan', 2008, 'dark_knight.jpg', 1, 1, 'dark_knight_trailer.mp4', 'Batman faces off against the Joker in Gotham City.'),
(4, 'Amélie', 'Jean-Pierre Jeunet', 2001, 'amelie.jpg', 4, 1, 'amelie_trailer.mp4', 'A whimsical tale of a young woman in Paris.'),
(5, 'The Grand Budapest Hotel', 'Wes Anderson', 2014, 'grand_budapest.jpg', 3, 1, 'grand_budapest_trailer.mp4', 'A comedy-drama set in a famous European hotel.'),
(6, 'Interstellar', 'Christopher Nolan', 2014, 'interstellar.jpg', 1, 1, 'interstellar_trailer.mp4', 'A team of explorers travel through a wormhole in space.'),
(7, 'Oldboy', 'Park Chan-wook', 2003, 'oldboy.jpg', 2, 1, 'oldboy_trailer.mp4', 'A man is mysteriously imprisoned for 15 years and seeks revenge.'),
(8, 'The Matrix', 'The Wachowskis', 1999, 'matrix.jpg', 1, 1, 'matrix_trailer.mp4', 'A hacker discovers the true nature of reality.'),
(9, 'Spirited Away', 'Hayao Miyazaki', 2001, 'spirited_away.jpg', 3, 1, 'spirited_away_trailer.mp4', 'A young girl enters a magical world of spirits.'),
(10, 'Get Out', 'Jordan Peele', 2017, 'get_out.jpg', 1, 1, 'get_out_trailer.mp4', 'A horror film that explores racial tensions.'),
(11, 'La La Land', 'Damien Chazelle', 2016, 'la_la_land.jpg', 1, 1, 'la_la_land_trailer.mp4', 'A musical romance set in Los Angeles.'),
(12, 'The Shawshank Redemption', 'Frank Darabont', 1994, 'shawshank.jpg', 1, 1, 'shawshank_trailer.mp4', 'Two imprisoned men bond over a number of years.'),
(13, 'City of God', 'Fernando Meirelles', 2002, 'city_of_god.jpg', 4, 1, 'city_of_god_trailer.mp4', 'A story about the rise of organized crime in Rio de Janeiro.'),
(14, 'The Social Network', 'David Fincher', 2010, 'social_network.jpg', 1, 1, 'social_network_trailer.mp4', 'The story of Facebook''s founding and rise.'),
(15, 'Crouching Tiger, Hidden Dragon', 'Ang Lee', 2000, 'crouching_tiger.jpg', 2, 1, 'crouching_tiger_trailer.mp4', 'A martial arts epic set in ancient China.'),
(16, 'The Godfather', 'Francis Ford Coppola', 1972, 'godfather.jpg', 1, 1, 'godfather_trailer.mp4', 'The aging patriarch of an organized crime dynasty transfers control to his reluctant son.'),
(17, 'Titanic', 'James Cameron', 1997, 'titanic.jpg', 1, 1, 'titanic_trailer.mp4', 'A romance blossoms aboard the ill-fated RMS Titanic.'),
(18, 'The Lion King', 'Roger Allers & Rob Minkoff', 1994, 'lion_king.jpg', 1, 1, 'lion_king_trailer.mp4', 'A young lion prince flees his kingdom only to learn the true meaning of responsibility and bravery.'),
(19, 'Pulp Fiction', 'Quentin Tarantino', 1994, 'pulp_fiction.jpg', 1, 1, 'pulp_fiction_trailer.mp4', 'The lives of two mob hitmen, a boxer, and others intertwine in four tales of violence and redemption.'),
(20, 'Avatar', 'James Cameron', 2009, 'avatar.jpg', 1, 1, 'avatar_trailer.mp4', 'A paraplegic Marine dispatched to the moon Pandora on a unique mission becomes torn between following orders and protecting an alien civilization.'),
(21, 'The Avengers', 'Joss Whedon', 2012, 'avengers.jpg', 1, 1, 'avengers_trailer.mp4', 'Earth''s mightiest heroes must come together to stop Loki and his alien army.'),
(22, 'Frozen', 'Chris Buck & Jennifer Lee', 2013, 'frozen.jpg', 1, 1, 'frozen_trailer.mp4', 'A princess sets off on a journey to find her sister, whose icy powers have trapped their kingdom in eternal winter.'),
(23, 'Inglourious Basterds', 'Quentin Tarantino', 2009, 'inglourious_basterds.jpg', 1, 1, 'inglourious_basterds_trailer.mp4', 'In Nazi-occupied France, a group of Jewish-American soldiers plan to assassinate Nazi leaders.'),
(24, 'The Departed', 'Martin Scorsese', 2006, 'departed.jpg', 1, 1, 'departed_trailer.mp4', 'An undercover cop and a mole in the police attempt to identify each other while infiltrating an Irish gang in Boston.'),
(25, 'Mad Max: Fury Road', 'George Miller', 2015, 'mad_max.jpg', 1, 1, 'mad_max_trailer.mp4', 'In a post-apocalyptic wasteland, Max teams up with Furiosa to escape a tyrannical warlord.'),
(26, 'Joker', 'Todd Phillips', 2019, 'joker.jpg', 1, 1, 'joker_trailer.mp4', 'A mentally troubled comedian embarks on a downward spiral that leads to the creation of an iconic villain.'),
(27, 'Blade Runner 2049', 'Denis Villeneuve', 2017, 'blade_runner_2049.jpg', 1, 1, 'blade_runner_2049_trailer.mp4', 'A young blade runner''s discovery of a long-buried secret leads him to track down former blade runner Rick Deckard.'),
(28, 'The Witcher', 'Alik Sakharov', 2019, 'witcher.jpg', 1, 8, 'witcher_trailer.mp4', 'Geralt of Rivia, a solitary monster hunter, struggles to find his place in a world where people often prove more wicked than beasts.'),
(29, 'Stranger Things', 'The Duffer Brothers', 2016, 'stranger_things.jpg', 1, 8, 'stranger_things_trailer.mp4', 'When a young boy vanishes, a small town uncovers a mystery involving secret experiments and supernatural forces.'),
(30, 'Breaking Bad', 'Vince Gilligan', 2008, 'breaking_bad.jpg', 1, 5, 'breaking_bad_trailer.mp4', 'A high school chemistry teacher turned methamphetamine producer navigates the dangers of the drug trade.');

INSERT INTO user (id, ten_dang_nhap, mat_khau, ho_ten, email, sdt, vai_tro_id, ngay_sinh) VALUES
(1, 'admin', 'admin123', 'Admin1', '1@gmail.com', '0123456789', 1, '1990-01-01'),
(2, 'user1', 'user123', 'User1', '2@gmail,com', '0987654321', 2, '1995-05-15'),
(3, 'editor1', 'editor123', 'Editor1', '3@gmail.com', '0112233445', 3, '1988-08-20'),
(4, 'vipuser', 'vip123', 'VIP User', '4@gmail.com', '0223344556', 4, '1992-12-12'),
(5, 'user2', 'user234', 'User Two', '5@gmail.com', '0334455667', 2, '1993-03-03'),
(6, 'editor2', 'editor234', 'Editor Two', '6@gmail.com', '0445566778', 3, '1985-07-07'),
(7, 'user3', 'user345', 'User Three', '7@gmail.com', '0556677889', 2, '1994-11-11'),
(8, 'vipuser2', 'vip234', 'VIP User Two', '8@gmail.com', '0667788990', 4, '1991-04-04'),
(9, 'admin2', 'admin234', 'Administrator Two', '@gmail.com', '0778899001', 1, '1989-09-09'),
(10, 'user4', 'user456', 'User Four', '@gmail.com', '0889900112', 2, '1996-06-06'),
(11, 'editor3', 'editor345', 'Editor Three', '@gmail.com', '0990011223', 3, '1987-10-10'),
(12, 'vipuser3', 'vip345', 'VIP User Three', '@gmail.com', '0101122334', 4, '1990-02-02'),
(13, 'user5', 'user567', 'User Five', '@gmail.com', '0112233445', 2, '1992-08-08'),
(14, 'editor4', 'editor456', 'Editor Four', '@gmail.com', '0223344556', 3, '1986-12-12'),
(15, 'vipuser4', 'vip456', 'VIP User Four', '@gmail.com', '0334455667', 4, '1993-05-05'),
(16, 'admin3', 'admin345', 'Administrator Three', '@gmail.com', '0445566778', 1, '1988-03-03'),
(17, 'user6', 'user678', 'User Six', '@gmail.com', '0556677889', 2, '1994-09-09'),
(18, 'editor5', 'editor567', 'Editor Five', '@gmail.com', '0667788990', 3, '1985-11-11'),
(19, 'vipuser5', 'vip567', 'VIP User Five', '@gmail.com', '0778899001', 4, '1991-01-01'),
(20, 'user7', 'user789', 'User Seven', '@gmail.com', '0889900112', 2, '1995-07-07'),
(21, 'editor6', 'editor678', 'Editor Six', '@gmail.com', '0990011223', 3, '1987-04-04'),
(22, 'vipuser6', 'vip678', 'VIP User Six', '@gmail.com', '0101122334', 4, '1992-10-10'),
(23, 'admin4', 'admin456', 'Administrator Four', '@gmail.com', '0112233445', 1, '1989-06-06'),
(24, 'user8', 'user890', 'User Eight', '@gmail.com', '0223344556', 2, '1993-02-02'),
(25, 'editor7', 'editor789', 'Editor Seven', '@gmail.com', '0334455667', 3, '1986-08-08'),
(26, 'vipuser7', 'vip789', 'VIP User Seven', '@gmail.com', '0445566778', 4, '1990-12-12'),
(27, 'user9', 'user901', 'User Nine', '@gmail.com', '0556677889', 2, '1994-05-05'),
(28, 'editor8', 'editor890', 'Editor Eight', '@gmail.com', '0667788990', 3, '1985-09-09'),
(29, 'vipuser8', 'vip890', 'VIP User Eight', '@gmail.com', '0778899001', 4, '1991-03-03'),
(30, 'admin5', 'admin567', 'Administrator Five', '@gmail.com', '0889900112', 1, '1988-07-07');

INSERT INTO phim_the_loai (id, the_loai_id) VALUES
(1, 1),
(1, 5),
(2, 2),
(2, 4),
(3, 1),
(3, 4),
(4, 6),
(4, 3),
(5, 3),
(5, 6),
(6, 5),
(6, 8),
(7, 4),
(7, 1),
(8, 5),
(8, 1),
(9, 10),
(9, 6),
(10, 7),
(10, 4),
(11, 6),
(11, 3),
(12, 2),
(12, 4),
(13, 4),
(13, 2),
(14, 2),
(14, 3),
(15, 1),
(15, 8),
(16, 4),
(16, 1),
(17, 6),
(17, 3),
(18, 10),
(18, 8),
(19, 4),
(19, 2),
(20, 5),
(20, 8),
(21, 1),
(21, 8),
(22, 10),
(22, 6),
(23, 4),
(23, 2),
(24, 4),
(24, 2),
(25, 1),
(25, 8),
(26, 7),
(26, 4),
(27, 5),
(27, 8),
(28, 8),
(28, 4),
(29, 4),
(29, 7),
(30, 2),
(30, 4);

INSERT INTO phim_dien_vien (id, phim_id, dien_vien_id) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 3, 3),
(4, 4, 4),
(5, 5, 5),
(6, 6, 6),
(7, 7, 7),
(8, 8, 8),
(9, 9, 9),
(10, 10, 10),
(11, 11, 11),
(12, 12, 12),
(13, 13, 13),
(14, 14, 14),
(15, 15, 15),
(16, 16, 16),
(17, 17, 17),
(18, 18, 18),
(19, 19, 19),
(20, 20, 20),
(21, 21, 21),
(22, 22, 22),
(23, 23, 23),
(24, 24, 24),
(25, 25, 25),
(26, 26, 26),
(27, 27, 27),
(28, 28, 28),
(29, 29, 29),
(30, 30, 30);

INSERT INTO tap_phim (id, so_tap, tieu_de, phim_id, thoi_luong, trailer) VALUES
(1, 1, 'Inception - Episode 1', 1, 148, 'inception_episode1_trailer.mp4'),
(2, 1, 'Parasite - Episode 1', 2, 132, 'parasite_episode1_trailer.mp4'),
(3, 1, 'The Dark Knight - Episode 1', 3, 152, 'dark_knight_episode1_trailer.mp4'),
(4, 1, 'Amélie - Episode 1', 4, 122, 'amelie_episode1_trailer.mp4'),
(5, 1, 'The Grand Budapest Hotel - Episode 1', 5, 99, 'grand_budapest_episode1_trailer.mp4'),
(6, 1, 'Interstellar - Episode 1', 6, 169, 'interstellar_episode1_trailer.mp4'),
(7, 1, 'Oldboy - Episode 1', 7, 120, 'oldboy_episode1_trailer.mp4'),
(8, 1, 'The Matrix - Episode 1', 8, 136, 'matrix_episode1_trailer.mp4'),
(9, 1, 'Spirited Away - Episode 1', 9, 125, 'spirited_away_episode1_trailer.mp4'),
(10, 1, 'Get Out - Episode 1', 10, 104, 'get_out_episode1_trailer.mp4'),
(11, 1, 'La La Land - Episode 1', 11, 128, 'la_la_land_episode1_trailer.mp4'),
(12, 1, 'The Shawshank Redemption - Episode 1', 12, 142, 'shawshank_episode1_trailer.mp4'),
(13, 1, 'City of God - Episode 1', 13, 130, 'city_of_god_episode1_trailer.mp4'),
(14, 1, 'The Social Network - Episode 1', 14, 120, 'social_network_episode1_trailer.mp4'),
(15, 1, 'Crouching Tiger, Hidden Dragon - Episode 1', 15, 120, 'crouching_tiger_episode1_trailer.mp4'),
(16, 1, 'The Godfather - Episode 1', 16, 175, 'godfather_episode1_trailer.mp4'),
(17, 1, 'Titanic - Episode 1', 17, 195, 'titanic_episode1_trailer.mp4'),
(18, 1, 'The Lion King - Episode 1', 18, 88, 'lion_king_episode1_trailer.mp4'),
(19, 1, 'Pulp Fiction - Episode 1', 19, 154, 'pulp_fiction_episode1_trailer.mp4'),
(20, 1, 'Avatar - Episode 1', 20, 162, 'avatar_episode1_trailer.mp4'),
(21, 1, 'The Avengers - Episode 1', 21, 143, 'avengers_episode1_trailer.mp4'),
(22, 1, 'Frozen - Episode 1', 22, 102, 'frozen_episode1_trailer.mp4'),
(23, 1, 'Inglourious Basterds - Episode 1', 23, 153, 'inglourious_basterds_episode1_trailer.mp4'),
(24, 1, 'The Departed - Episode 1', 24, 151, 'departed_episode1_trailer.mp4'),
(25, 1, 'Mad Max: Fury Road - Episode 1', 25, 120, 'mad_max_episode1_trailer.mp4'),
(26, 1, 'Joker - Episode 1', 26, 122, 'joker_episode1_trailer.mp4'),
(27, 1, 'Blade Runner 2049 - Episode 1', 27, 164, 'blade_runner_2049_episode1_trailer.mp4'),
(28, 1, 'The Witcher - Episode 1', 28, 60, 'witcher_episode1_trailer.mp4'),
(29, 1, 'Stranger Things - Episode 1', 29, 50, 'stranger_things_episode1_trailer.mp4'),
(30, 1, 'Breaking Bad - Episode 1', 30, 58, 'breaking_bad_episode1_trailer.mp4');

# DROP DATABASE quan_li_web_film;