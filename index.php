<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Buscador de planeta por numero</h3>
    <h5>Ingrese el numero del planeta que quiera buscar iniciando 1.Sol, 2.Mercurio...
    </h5>
    <form  method="POST">
    
    <select class="form-select" aria-label="Default select example" name="numeroPlaneta">
    <option selected>numero del planeta</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
    </select>

    <input type="submit" value="enviar" >
    </form>
    <h3>Respuesta:</h3>
</body>
</html>

<?php
$planetas=["Sol"=>1, "mercurio"=>2, "venus"=>"3", "tierra"=>4,"marte"=>"5", "jupiter"=>"6", "saturno"=>"7", "urano"=>"8", "neptuno"=>"9"];
$planetasFliped=array_flip($planetas);

if(isset($_POST)){ /**Capturar el envio  */
    $numeroPlaneta=$_POST["numeroPlaneta"];
    echo $planetasFliped[$numeroPlaneta];
}

?>


