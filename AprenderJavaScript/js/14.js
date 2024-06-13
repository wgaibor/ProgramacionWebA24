//Array Methods

const meses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo'];
const carrito = [
    {nombre: 'Monitor 27 Pulgadas', precio: 500},
    {nombre: 'Television', precio: 100},
    {nombre: 'Tablet', precio: 200},
    {nombre: 'Audifonos', precio: 300},
    {nombre: 'Teclado', precio: 400},
    {nombre: 'Celular', precio: 700},
    {nombre: 'Lavadora', precio: 800},
    {nombre: 'Plancha', precio: 900},
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
// console.log(resultado);

let busqueda = carrito.includes('Celular'); //Devuelve un booleano
// console.log(busqueda);

//Some idel para arreglos de objetos
let resultado2 = carrito.some(function(producto){
    return producto.nombre === 'Plancha';
});
// console.log('Busqueda   '+resultado2);

//Reduce
let walthergaibor = carrito.reduce(function(total, producto){
    return total + producto.precio;
}, 0);
// console.log(walthergaibor);

//Filter
let resultado3 = carrito.filter(function(producto){
    return producto.precio != 400;
});

console.table(resultado3);
