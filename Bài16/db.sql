CREATE DATABASE IF NOT EXISTS quan_li_web_film;
USE quan_li_web_film;

# 1. Phim
CREATE TABLE film(
    id_film INT PRIMARY KEY,
	ten_phim VARCHAR(25),
	nam INT,
	ten_the_loai VARCHAR(25),
    dien_vien VARCHAR(25),
    quoc_gia_id INT,
    thoi_luong TIME,
    dao_dien_id VARCHAR(25),
    mo_ta TEXT,
    FOREIGN KEY (id_film) REFERENCES the_loai_phim (id_film)
);

CREATE TABLE film_dien_vien(
    id INT,
    id_film INT,
    dien_vien VARCHAR (25)
);

# 2. Thể loại phim
CREATE TABLE the_loai_phim(
    id_tl INT PRIMARY KEY,
    ten_the_loai VARCHAR(25),
    id_film INT
);

# 3. User
CREATE TABLE nguoi_dung(
    id_user INT PRIMARY KEY,
    ten_dang_nhap VARCHAR(50),
    emai VARCHAR(25),
    mat_khau VARCHAR(25),
    sdt VARCHAR (10),
    hovaten VARCHAR (25),
    quyen_id INT,
    ngay_sinh DATETIME
);

CREATE TABLE quyen (
    id INT PRIMARY KEY,
    ten_quyen VARCHAR(25)
);

# 4. Quốc gia
CREATE TABLE quoc_gia(
    id_quoc_gia INT PRIMARY KEY,
    quoc_gia VARCHAR(25)
);

# 5. Tập film
CREATE TABLE tap_phim(
    id_tap_phim INT PRIMARY KEY,
    ten_phim VARCHAR(25),
    so_luong_tap INT,
    id_film INT,
    trailer VARCHAR(25),
    tieu_de VARCHAR(25)
);

