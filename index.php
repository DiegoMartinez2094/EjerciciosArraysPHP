<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar Planeta</title>
</head>
<body>
   
    <h1>Eliminar especies duplicadas de alienigenas</h1>

 <?php

$alienigenas=["Marciano", "Nordico", "Joviano", "Marciano", "Selenita", "Nordico", "Joviano", "Neptuniano"];
echo " <h2>Alienigenas encontrados en la ultima misión:</h2>";
foreach ($alienigenas as $alienigena) {;
    echo '<p>'. $alienigena. '</p>';
}
echo"<h2> Resumen de razas encontradas:</h2>";
$filtro= array_unique($alienigenas);

foreach ($filtro as $filtro) {;
    echo '<p>'. $filtro. '</p>';
}

?>



