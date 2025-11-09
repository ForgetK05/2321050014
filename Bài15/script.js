let danhSachPhim = [
    {
        id: 1,
        tenPhim: "Người đẹp và quái vật",
        namPhatHanh: 2025,
        tuoi: 16,
        thoiLuong: 2,
        quocGia: "Mỹ",
        poster: "img/phim/bnb.jpg",
        trailer: "https://youtu.be/ZdzBRbgNs-I?si=lCXRByq4Y4ax9SCd"
    },
    {
        id: 2,
        tenPhim: "Bỗng dưng trúng số",
        namPhatHanh: 2025,
        tuoi: 16,
        thoiLuong: 2,
        quocGia: "Mỹ",
        poster: "img/phim/bdts.jpeg",
        trailer: "https://youtu.be/D3KbO3QF-lg?si=rNNz30c7Dk1mfSh9"
    },
    {
        id: 3  ,
        tenPhim: "Cám",
        namPhatHanh: 2025,
        tuoi: 16,
        thoiLuong: 2,
        quocGia: "Mỹ",
        poster: "img/phim/cam1.jpg",
        trailer: "https://youtu.be/_8qUFEmPQbc?si=t-OWh2TcE5te51Ia"
    },
    {
        id: 4 ,
        tenPhim: "Cô giáo em là số 1",
        namPhatHanh: 2025,
        tuoi: 16,
        thoiLuong: 2,
        quocGia: "Mỹ",
        poster: "img/phim/cgels1.jpg",
        trailer: "https://youtu.be/XieLp58PaJg?si=aFbEX30uZHOpMJS6"
    },
    {
        id: 5  ,
        tenPhim: "Conan Movie 27",
        namPhatHanh: 2025,
        tuoi: 16,
        thoiLuong: 2,
        quocGia: "Mỹ",
        poster: "img/phim/conan27.jpg",
        trailer: "https://youtu.be/C4pG3GbhQZw?si=GNqmnoAQOZngLCj8"
    },
    {
        id: 6  ,
        tenPhim: "Đẹp trai thấy sai sai",
        namPhatHanh: 2025,
        tuoi: 16,
        thoiLuong: 2,
        quocGia: "Mỹ",
        poster: "img/phim/dep-trai-thay-sai-sai.jpg",
        trailer: "https://youtu.be/qoM5mbkOwMg?si=5RA8pRwELqw5cLcv"
    },
    {
        id: 7  ,
        tenPhim: "John Wick ",
        namPhatHanh: 2025,
        tuoi: 16,
        thoiLuong: 2,
        quocGia: "Mỹ",
        poster: "img/phim/jw4.jpg",
        trailer: "https://youtu.be/yjRHZEUamCc?si=gCjRpvpI9ZD49MtV"
    },
    {
        id: 8 ,
        tenPhim: "Kẻ ăn hồn",
        namPhatHanh: 2025,
        tuoi: 16,
        thoiLuong: 2,
        quocGia: "Mỹ",
        poster: "img/phim/kah.jpg",
        trailer: "https://youtu.be/xWh0g4rKGjI?si=E_GsfriVmHwcFoSC"
    },
    {
        id: 9,
        tenPhim: "Kung Fu Panda",
        namPhatHanh: 2025,
        tuoi: 16,
        thoiLuong: 2,
        quocGia: "Mỹ",
        poster: "img/phim/panda.jpg",
        trailer: "https://youtu.be/_inKs4eeHiI?si=DQ9hThWo-RRSbyNY"
    },
    {
        id: 10,
        tenPhim: "Mai",
        namPhatHanh: 2025,
        tuoi: 16,
        thoiLuong: 2,
        quocGia: "Mỹ",
        poster: "img/phim/mai2.jpg",
        trailer: "https://youtu.be/HXWRTGbhb4U?si=KSxXaME37ph_19jY"
    },
    {
        id: 11,
        tenPhim: "Mắt biếc",
        namPhatHanh: 2025,
        tuoi: 16,
        thoiLuong: 2,
        quocGia: "Mỹ",
        poster: "img/phim/mat-biec-phim-dien-anh.jpg",
        trailer: "https://youtu.be/ITlQ0oU7tDA?si=pzOcBgDdifHnSWaD"
    },
    {
        id: 12,
        tenPhim: "Minions",
        namPhatHanh: 2025,
        tuoi: 16,
        thoiLuong: 2,
        quocGia: "Mỹ",
        poster: "img/phim/minion1.jpeg",
        trailer: "https://youtu.be/6DxjJzmYsXo?si=E2VD9_v5rPR0FvGY"
    },

    
]

let phimHienTai = danhSachPhim[0];

let banner = document.getElementsByClassName('banner')[0];
let name = document.getElementById('Tên phim');
let namPhatHanh = document.getElementById('Năm');
let thoiLuong = document.getElementById('Thời lượng');
let quocGia = document.getElementById('Quốc gia');
let age = document.getElementById('Độ tuổi');
let trailer = document.getElementById('Trailer');
let bannerContent = document.querySelector('.banner-content');


function chonPhim(idPhim) {
for (let i = 0; i < danhSachPhim.length; i++) {
    if (danhSachPhim[i].id == idPhim) {
        banner.style.backgroundImage =danhSachPhim[i].poster;
        name.innerText = "Tên phim: " + danhSachPhim[i].tenPhim;
        namPhatHanh.innerText = "Năm phát hành: " + danhSachPhim[i].namPhatHanh;
        thoiLuong.innerText = "Thời lượng: " + danhSachPhim[i].thoiLuong + " giờ";
        quocGia.innerText = "Quốc gia: " + danhSachPhim[i].quocGia;
        age.innerText = "Độ tuổi: " + danhSachPhim[i].tuoi + "+";
        trailer.href = danhSachPhim[i].trailer;
        bannerContent.classList.add('show');
        break;
        }
    }
}
