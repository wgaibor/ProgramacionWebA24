//Array Methods

const meses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo'];
const carrito = [
    {nombre: 'Monitor 27 Pulgadas', precio: 500},
    {nombre: 'Television', precio: 100},
    {nombre: 'Tablet', precio: 200},
    {nombre: 'Audifonos', precio: 300},
    {nombre: 'Teclado', precio: 400},
    {nombre: 'Celular', precio: 700}
];
//ForEach
// meses.forEach(function(mes){
//     if(mes == 'Febrero'){
//         console.log('Febrero si existe');
//     }
// });


// meses.forEach(function(mes){
//     console.log('Mes: '+mes);
// });

//Includes
let resultado = meses.includes('Enero'); //Devuelve un booleano
console.log(resultado);

let busqueda = carrito.includes('Celular'); //Devuelve un booleano
console.log(busqueda);

//Some idel para arreglos de objetos
let resultado2 = carrito.some(function(producto){
    return producto.nombre === 'Celular';
});
console.log(resultado2);