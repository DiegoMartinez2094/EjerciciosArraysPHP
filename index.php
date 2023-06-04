<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>planetas habitables</title>
</head>

<body>

    <h3>seleccionador de planetas habitables </h3>
    <h5>Ingrese los planetas y su caracteristica habitable o no habitable</h5>

    <form method="POST">
        <input type="text" name="planeta" placeholder="nombre planeta">

        <select class="form-select" aria-label="Default select example" name="habitable">
            <option selected>es habitable?</option>
            <option value="habitable">habitable</option>
            <option value="no habitable">no habitable</option>
        </select>
        <input type="submit" value="enviar">
        <input type="submit" name="mostrar_habitables" value="mostrar habitables">

        </ </form>

</body>

</ </html>

<?php

session_start(); //permite almacenar variables de una session en el servidor

if (isset($_POST['planeta']) && isset($_POST['habitable'])) { // verifica si las variablesplanetay habitablese envía
    $planeta = $_POST['planeta']; //almacenamos en variables
    $habitable = $_POST['habitable']; //los datos enviados mediante post

    $_SESSION['sistema'][$habitable][] = $planeta;

    //agrega el valor de $planeta al array `$_SESSION['sistema']$_SESSION['sistema']
    //utilizando $habitablecomo clave. Esto significa que se está registrando el planeta en una categoría específica según su habitabilidad.
}

if (isset($_POST['mostrar_habitables'])) { 
    // verifica si la variable mostrar_habitables se envió a través de una solicitud POST.
    // Esto indica que el usuario desea mostrar los planetas habitables registrados.
    if (isset($_SESSION['sistema']['habitable'])) { //verifica si hay registro de algun planeta habitable
        echo " <br> <br>Planetas habitables: <br> ".implode(", ", $_SESSION['sistema']['habitable']); //implode se utiliza para convertir array a texto
    } else {
        echo "No hay planetas habitables registrados.";
    }
}
?>