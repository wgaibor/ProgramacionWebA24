//Objeto
let producto = {
    nombreProducto: "Monitor de 24 pulgadas",
    precio: 300,
    disponible: true
};

producto.imagen = "imagen.jpg";
// let precioProducto = producto.precio;
// let nombreProducto = producto.nombreProducto;

// console.log(precioProducto);
// console.log(nombreProducto);

// Destructurar un objeto
//Destructuring
let {precio, nombreProducto, imagen} = producto;
console.log(precio);
console.log(nombreProducto);
console.log(imagen);