// 1.-Crea un array.
document.write('<center>1.-Crea un array:</center>');

let frutas = ["Manzana", 'Banana'];
document.write(frutas.length, '<br><br>');




// 2.-Accedea un elemento de array mediantesi indice.
document.write(
    '<center>2.-Accedea un elemento de array mediantesi indice:</center>',
);

let primero = frutas[0]; //Manzana
let ultimo = frutas[frutas.length - 1]; //Banana

document.write(primero, "<br>")
document.write(ultimo, "<br><br>")




// 3.-Recorrer un array.
document.write('<center>3.-Recorrer un array:</center>');

frutas.forEach(function(elemento, indice, array) {
    document.write(elemento, indice);
});
document.write("<br><br>")



// 4.-Añadir un elementoal final de un array.
document.write(
    '<center>4.-Añadir un elementoal final de un array:</center>',
);

let nuevaLongitud = frutas.push('Naranja');
document.write(frutas[frutas.length - 1])
document.write("<br><br>")



// 5.-Eliminar el ultimo elemento de un array.
document.write(
    '<center>5.-Eliminar el ultimo elemento de un array:</center>',
);

let ultim = frutas.pop();
document.write(frutas[frutas.length - 1]);
document.write('<br><br>');




// 6.-Añadir un elemento al principio de un array.
document.write(
    '<center>6.-Añadir un elemento al principio de un array:</center>',
);

let nuevaLongit = frutas.unshift('Fresa');
document.write(frutas[0])
document.write("<br><br>")



// 7.-Eliminar el primer elemento de un array.
document.write(
    '<center>7.-Eliminar el primer elemento de un array:</center>',
);

let primer = frutas.shift();
document.write(frutas[0]);
document.write('<br><br>');




// 8.-Encontrarel indice de un elemento del array.
document.write(
    '<center>8.-Encontrarel indice de un elemento del array:</center>',
);

frutas.push('Fresa');

let pos = frutas.indexOf('Banana');
document.write(frutas[1], " = ", pos)