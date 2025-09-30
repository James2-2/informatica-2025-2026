var bottone = document.getElementById("buttonId");
var bottone2 = document.getElementById("add");
var divs = document.getElementsByTagName("div");

function myFunction (){
    for(let item of divs){
        item.style.backgroundColor = "green";
    }
};

element.addEventListener("click", myFunction);

function myFunction2 (){
    document.body.appendChild(document.createElement('p'));
}

bottone2.addEventListener("click", myFunction2);