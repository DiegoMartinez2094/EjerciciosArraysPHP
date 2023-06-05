<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar Planeta</title>
</head>
<body>
   
    <h1>Buscador de Plnetas </h1>
    <h3>Ingrese el planeta a buscar seguido de oprimir el boton Buscar</h3>
    <h3>Recuerde poner la primera letra del planeta en mayuscula y las demás en minuscula</h3>

    <form method="POST">
        <input type="text" name="planeta" placeholder="nombre planeta">
        <input type="submit" value="buscar">
     </form>
</body>
</html>


<?php

$sistema_solar=["Mercurio", "Venus", "Tierra", "Marte", "Jupiter", "Saturno", "Urano", "Neptuno"];

session_start(); 

if (isset($_POST['planeta'])) { 
   
    $planeta = $_POST['planeta']; 

if(in_array($planeta,$sistema_solar)){
    echo "<br>", $planeta, " Sí existe en el sistema solar";
}
    else{
        echo "<br>", $planeta," No existe en el sistema solar";
    }
}

?>



