<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="GET">
<input type="number" name="segundos"> </input>
<button type="submit">ENVIAR</button>
</form>
<?php 

$y =  $_GET['segundos'];
$segundos =  $y ;
$minutos;
$horas;
if ($segundos <60) {
$resultado = print('El resultado son '. $segundos . ' segundos') ;
}
else if  ($segundos >60 and $segundos<3600){ 
  $minutos = $segundos/60 - intdiv($segundos*60, $segundos) ; 
  $segundos = intdiv($minutos, $segundos) ;
  $resultado = print('El resultado son'. $minutos . 'y'. $segundos . 'segundos') ;
} else {
    $horas = $segundos/3600 - intdiv($horas, $segundos);
    $minutos = $horas*60 ;
    $segundos = $minutos*60 ;
    $resultado= print('El resultado son'. $horas . 'horas '. $minutos. 'minutos'. $segundos. 'segundos');
}





?>
</body>
</html>
