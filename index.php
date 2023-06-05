
 <?php
$planetas =[" Mercurio ", " Venus ", " Tierra ", " Marte ", " Júpiter ", " Saturno ", " Urano ", " Neptuno "];
echo " <h2>Planetas en orden ascendente:</h2>";
foreach ($planetas as $planeta) {;
    echo '<p>'. $planeta. '</p>';
}
echo " <h2>Planetas en orden descendente:</h2>";
$sistemas=array_reverse($planetas);
foreach ($sistemas as $sistema) {;
    echo '<p>'. $sistema. '</p>';
}
?>



