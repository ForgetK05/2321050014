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
    
]

let phimHienTai = danhSachPhim[0];
// document.write("<h2>" + phimHienTai.tenPhim + "</h2>");
// document.write("<p>Năm phát hành: " + phimHienTai.namPhatHanh + "</p>");
// document.write("<p>Độ tuổi: " + phimHienTai.tuoi + "+</p>");
// document.write("<p>Thời lượng: " + phimHienTai.thoiLuong + " giờ</p>");
// document.write("<p>Quốc gia: " + phimHienTai.poster + "</p>");
// document.write("<hr>");

let banner = document.getElementsByClassName('banner')[0];
// let id = document.getElementById('selectPhim').value;
// let name = document.getElementById('name').value;
// let namPhatHanh = document.getElementById('namPhatHanh').value;
// let age = document.getElementById('age').value;


function chonPhim(idPhim){
    for (let i = 0; i < danhSachPhim.length; i++){
        if(danhSachPhim[i].id == idPhim){
            banner.style.backgroundImage = "url('" + danhSachPhim[i].poster + "')";
        }
    }
}