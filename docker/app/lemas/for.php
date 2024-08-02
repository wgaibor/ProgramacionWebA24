<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 
for($intValor=0; $intValor < 10; $intValor++) {
  if($intValor%2 == 1 ) {
    echo "<br>";
    echo $intValor;
  }
}
echo "<br>-----------------<br>";

$array = array(1,
               2, 
               3, 
               4);
foreach($array as $valorAGastar){
  echo "<br>";
  echo $valorAGastar * 3;
}

echo "<br>-----------------<br>";
echo "FIN";
?>

</body>
</html>
