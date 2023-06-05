<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar Planeta</title>
</head>
<body>
   
    <h1>Buscador de Naves</h1>
    <h3>Ingrese la nave a buscar seguido de oprimir el boton Buscar</h3>
   
    <form method="POST">
  
        <select class="form-select" aria-label="Default select example" name="tipo_nave">
            <option selected>TIPO DE NAVE</option>
            <option value="nave tipo A">Nave tipo A</option>
            <option value="nave tipo B">Nave tipo B</option>
            <option value="nave tipo C">Nave tipo C</option>
            <option value="nave tipo D">Nave tipo D</option>
            <option value="nave tipo E">Nave tipo E</option> 
            <option value="nave tipo F">Nave tipo F</option> 
            <option value="nave tipo G">Nave tipo G</option> 
            <option value="nave tipo H">Nave tipo H</option> 
            <option value="nave tipo I">Nave tipo I</option> 
        </select>
        <input type="submit" value="buscar">
     </form>
</body>
</html>


<?php

$tipos_de_naves=["nave tipo A", "nave tipo C", "nave tipo E", "nave tipo F", "nave tipo H"];

session_start(); 

if (isset($_POST['tipo_nave'])) { 
   
    $nave = $_POST['tipo_nave']; 

if(in_array($nave,$tipos_de_naves)){
    echo "<br>", $nave, " Sí existe en la flota";
}
    else{
        echo "<br>", $nave," No existe en la flota";
    }
}

?>



