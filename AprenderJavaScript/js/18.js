let total = 0;
function agregarCarrito(precio){
    return total += precio;
}

function calcularIva(precio){
    return precio * 0.15;
}

total = agregarCarrito(300);
total = agregarCarrito(500);
total = agregarCarrito(800);

subtotal = calcularIva(total);

console.log(total);
console.log('Valor del iva  '+subtotal);

totalFinal = total + subtotal;
console.log('Total a pagar: '+totalFinal);