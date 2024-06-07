//Operador Spread
const producto = {
    nombreProducto : "Monitor 20 Pulgadas",
    precio: 300,
    disponible: true
}

const medidas = {
    peso: '1kg',
    medida: '1m'
}

const proveedor = {
    nombreProveedor: 'Lenovo',
    pais: 'China',
    telefono: '123456789',
    email: 'correo@correo.com'
}

//Unir dos objetos
const resultado = Object.assign(producto, medidas, proveedor);
console.log(resultado);

const nuevoProducto = {...producto, ...medidas, ...proveedor};
console.log(nuevoProducto);