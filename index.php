<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar Planeta</title>
</head>
<body>
   
    <h1>Buscador de planetas aleatorio para misiones espaciales</h1>
    <form method="POST">
    <input type="submit" value="buscar" name="buscar" >
    </form>
 <?php

$sistema_solar=["Mercurio", "Venus", "Tierra", "Marte", "Jupiter", "Saturno", "Urano", "Neptuno"];

$claves_aleatorias = array_rand($sistema_solar,2);

if (isset($_POST['buscar'])) { 
echo"<br>el planeta elegido para la misión espacial es: ", $sistema_solar[$claves_aleatorias[0]] . "\n";
}
?>



