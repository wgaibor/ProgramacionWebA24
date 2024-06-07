//Métodos de objetos
// "use strict"; //JavaScript modo estricto
const producto = {
    nombreProducto: "Monitor de 24 pulgadas",
    precio: 300,
    disponible: true
};

producto.imagen = "imagen.jpg";

// Object.freeze(producto); //No se puede modificar ni eliminar propiedades
// producto.disponible = false;
// producto.proveedor= "Lenovo";

Object.seal(producto); //No se pueden agregar ni eliminar propiedades, pero si se pueden modificar
producto.nombreProducto = "Lavadora Mabe";
producto.proveedor= "Lenovo";
console.log(producto);