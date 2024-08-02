<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 
$intNumero    = 9;
$stringNombre = "Walther";
$booleanValor = true;

$arrayParametros = array(
                          "nombre"   => "Walther",
                          "cargo"    => "Docente",
                          "telefono" => "0994845616"
                        );
echo "El cargo es  ".$arrayParametros["cargo"];
echo "<br><br>";
echo "El nombre es   ".$arrayParametros["nombre"];

?>

</body>
</html>
