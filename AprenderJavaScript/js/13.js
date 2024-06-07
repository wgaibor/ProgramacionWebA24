//Array
const numeros = [10, 20, 30, 40, 50];
const nombres = ['Juan', 'Pedro', 'Luis', 'Carlos', 'Ana'];
const meses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo'];

// let nombre = "Juan";
// let nombre2 = "Pedro";
// let nombre3 = "Luis";
// let nombre4 = "Carlos";
// let nombre5 = "Ana";
// let nombre6 = "Maria";

//Acceder a los valores de un array
// console.log(numeros[0]);
// console.log(numeros[1]);
// console.log(numeros[2]);

// Conocer la extensión de un array
// console.log(numeros.length);

// Iterar un array
// for(let i = 0; i < numeros.length; i++){
//     console.log(numeros[i]);
// }

// numeros.forEach(function(numero){
//     console.log(numero);
// });

// numeros[5] = 60;
// numeros[6] = 70;
// numeros[7] = 80;
// numeros[10] = 90;

numeros.push(60, 70, 80, 90, 100); //Agrega al final
numeros.unshift(-30, -20, -10, 0); //Agrega al principio

console.table(numeros);

console.log(numeros[7]);

//Eliminar elementos de un array
// numeros.pop(); //Elimina el último elemento
// numeros.shift(); //Elimina el primer elemento


//Quitar un rango
numeros.splice(2, 9); //Elimina desde la posición 2, 3 elementos
console.table(numeros);

//Rest Operator o Spread Operator
const nuevoArreglo = [...numeros, ...nombres, "Nuevo Elemento", ...meses, "Walther Gaibor", 896];

console.table(nuevoArreglo);