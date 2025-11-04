let danhSachPhim = [
    {
        id: 1,
        tenPhim: "Người đẹp và quái vật",
        namPhatHanh: 2025,
        tuoi: 16,
        thoiLuong: 2,
        quocGia: "Mỹ",
        poster: "img/phim/beautyandthebeaets.jpg"
    },
    {
        id: 2,
        tenPhim: "Bỗng dưng trúng số",
        namPhatHanh: 2025,
        tuoi: 16,
        thoiLuong: 2,
        quocGia: "Mỹ",
        poster: "img/phim/bongdungtrungso.jpg"
    },
    {
        id: 3  ,
        tenPhim: "Cám",
        namPhatHanh: 2025,
        tuoi: 16,
        thoiLuong: 2,
        quocGia: "Mỹ",
        poster: "img/phim/cam.jpg"
    },
    {
        id: 4 ,
        tenPhim: "Cô giáo em là số 1",
        namPhatHanh: 2025,
        tuoi: 16,
        thoiLuong: 2,
        quocGia: "Mỹ",
        poster: "img/phim/cogiaoemlaso1.jpg"
    },
    {
        id: 5  ,
        tenPhim: "Conan",
        namPhatHanh: 2025,
        tuoi: 16,
        thoiLuong: 2,
        quocGia: "Mỹ",
        poster: "img/phim/conan.jpg"
    },
    {
        id: 6  ,
        tenPhim: "Đẹp trai thấy sai sai",
        namPhatHanh: 2025,
        tuoi: 16,
        thoiLuong: 2,
        quocGia: "Mỹ",
        poster: "img/phim/deptraithaysaisai.jpg"
    },
    {
        id: 7  ,
        tenPhim: "John Wick ",
        namPhatHanh: 2025,
        tuoi: 16,
        thoiLuong: 2,
        quocGia: "Mỹ",
        poster: "img/phim/johnwi.jpg"
    },
    {
        id: 8 ,
        tenPhim: "Kẻ ăn hồn",
        namPhatHanh: 2025,
        tuoi: 16,
        thoiLuong: 2,
        quocGia: "Mỹ",
        poster: "img/phim/kah.jpg"
    },
    {
        id: 9,
        tenPhim: "Kung Fu Panda",
        namPhatHanh: 2025,
        tuoi: 16,
        thoiLuong: 2,
        quocGia: "Mỹ",
        poster: "img/phim/kungfupanda.jpg"
    },
    {
        id: 10,
        tenPhim: "Mai",
        namPhatHanh: 2025,
        tuoi: 16,
        thoiLuong: 2,
        quocGia: "Mỹ",
        poster: "img/phim/mai.jpg"
    },
    {
        id: 11,
        tenPhim: "Mắt biếc",
        namPhatHanh: 2025,
        tuoi: 16,
        thoiLuong: 2,
        quocGia: "Mỹ",
        poster: "img/phim/mat-biec-phim-dien-anh.jpg"
    },
    {
        id: 12,
        tenPhim: "Minions",
        namPhatHanh: 2025,
        tuoi: 16,
        thoiLuong: 2,
        quocGia: "Mỹ",
        poster: "img/phim/minion.jpg"
    },

    
]

let phimHienTai = danhSachPhim[0];
// document.write("<h2>" + phimHienTai.tenPhim + "</h2>");
// document.write("<p>Năm phát hành: " + phimHienTai.namPhatHanh + "</p>");
// document.write("<p>Độ tuổi: " + phimHienTai.tuoi + "+</p>");
// document.write("<p>Thời lượng: " + phimHienTai.thoiLuong + " giờ</p>");
// document.write("<p>Quốc gia: " + phimHienTai.poster + "</p>");
// document.write("<hr>");

let banner = document.getElementsByClassName('banner')[0];
let name = document.getElementById('Tên phim');
let namPhatHanh = document.getElementById('Năm');
let thoiLuong = document.getElementById('Thời lượng');
let quocGia = document.getElementById('Quốc gia');
let age = document.getElementById('Độ tuổi');



function chonPhim(idPhim) {
for (let i = 0; i < danhSachPhim.length; i++) {
    if (danhSachPhim[i].id == idPhim) {
        banner.style.backgroundImage = "url('" + danhSachPhim[i].poster + "')";
        name.innerText = "Tên phim: " + danhSachPhim[i].tenPhim;
        namPhatHanh.innerText = "Năm phát hành: " + danhSachPhim[i].namPhatHanh;
        thoiLuong.innerText = "Thời lượng: " + danhSachPhim[i].thoiLuong + " giờ";
        quocGia.innerText = "Quốc gia: " + danhSachPhim[i].quocGia;
        age.innerText = "Độ tuổi: " + danhSachPhim[i].tuoi + "+";
        break; 
        }
    }
}
