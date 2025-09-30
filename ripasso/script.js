let s = "ciao";
console.log(s.concat(" oggi è una bella giornata").replace("ciao", "buongiorno").toUpperCase); //Chaining: concateno i metodi

const colori = ["rosso","blu","nero","grigio","giallo"];

/*
function miaFunzione(e, i){
    console.log("Colore" + e.toUpperCase() + "indice" + i);
}

colori.forEach(miaFunzione); //Funzione di call back, perchè richiamo una funzione fatta in precedenza
*/

colori.forEach(element, i => {
    console.log(element.toUpperCase);
    console.log(i);
});

const numeri = [2,1,3,567,3,2,6,8,7,102];

console.log(numeri.filter(n => n > 20));
console.log(numeri);

const numeriFiltrati = numeri.filter(n => n > 20);
console.log(numeriFiltrati);

const numeri2 = [1,2,3,4];
console.log(numeri2.map((n => n*n)));

const numeri3 = [2,4,1,5,7];
console.log(numeri3.reduce(acc, num => acc + num, -5)); //Parte da -5. Parametri: accumulatore, elemento.  Funzione di call back in linea con l'espressione lambda, non viene chiamata una funzione esterna

