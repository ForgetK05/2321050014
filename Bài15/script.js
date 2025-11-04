let danhSachPhim = [
    {
        id: 1,
        tenPhim: "Mưa đỏ ",
        namPhatHanh: 2025,
        tuoi: 16,
        thoiLuong: 2,
        quocGia: "Việt Nam",
        poster: "url('./img/mua-do2-1122.jpeg')"
    },

    {
        id: 2,
        tenPhim: "Conan",
        namPhatHanh: 2024,
        tuoi: 13,
        thoiLuong: 1.5,
        quocGia: "Nhật Bản",
        poster: "url('./img/poster/conan_27.jpg')"

    }
]

let phimHienTai = danhSachPhim[0];

let banner = document.getElementsByClassName('banner')[0];
let id = document.getElementById('selectPhim').value;
let name = document.getElementById('name').value;
let namPhatHanh = document.getElementById('namPhatHanh').value;
let age = document.getElementById('age').value;

function chonPhim(idPhim){
    for (let i = 0; i < danhSachPhim.length; i++){
        if(danhSachPhim[i].id == idPhim){
            banner.style.backgroundImage = danhSachPhim[i].poster;

        }
    }
}