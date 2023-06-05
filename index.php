
 <?php

$sistemas=["mercurio", "tierra", "venus", "Marte", "urano","TrES-2b"];
echo " <h2>planetas del sistema 1</h2>";
foreach ($sistemas as $sistema) {;
    echo '<p>'. $sistema. '</p>';
}

$planetas=["tierra", "venus", "Marte", "kepler", "J1407b","TrES-2b"];
echo " <h2>planetas del sistema 2</h2>";
foreach ($planetas as $planeta) {;
    echo '<p>'. $planeta. '</p>';
}

echo " <h2>planetas en comun de los dos sistemas:</h2>";
$results = array_intersect($sistemas, $planetas);
foreach ($results as $result) {;
    echo '<p>'. $result. '</p>';
}

?>



