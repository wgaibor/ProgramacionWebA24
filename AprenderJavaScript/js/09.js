//Objeto
let producto = {
    nombreProducto: "Monitor de 24 pulgadas",
    precio: 300,
    disponible: true
};


producto.imagen = "imagen.jpg";

console.log(producto);

//Eliminar propiedades
delete producto.disponible;
console.log(producto);