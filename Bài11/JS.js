let str = '123';

let n = Number(str);

document.writeln(n);


let a = [1,2,3,4,5,5];
document.writeln(a);

let input = prompt('Nhập hộ tao');
let b = new Array(input);

if (input < 0){
    document.writeln('Nhập lại');
} else{
    for (let i = 0; i < input; i++ ){
    b[i] = prompt('Nhập'); 
}

    
document.writeln('<br> mảng sau khi nhập là '+ '['+b+']');
}








