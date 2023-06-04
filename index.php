<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
<h3>Creador de sistemas solares</h3>
<h5>Ingrese el numero del planetas que quiere en el sistema solar</h5>


<form method="POST">
<input type=" text" name="cantidad" >
<input type="submit" value="enviar" >
</form>

</body>
</html>


<?php
$numeroPlaneta='deshabilitado';
if(isset($_POST)){ /**Capturar el envio  */
   $numeroPlaneta=$_POST["cantidad"];
   $sistema = array_fill(0, $numeroPlaneta, 'planeta');
   //var_dump($sistema);
   function imprimir($planeta)
{
    echo "$planeta...\n";
}
echo"<br>";
array_walk($sistema,'imprimir');
}
?>
