let numeri = document.getElementById("numeri");
let arr = [1,2,3,4,1,452,5];
numeri.append(arr.filter(x => x >10));