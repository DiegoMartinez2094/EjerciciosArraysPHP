
 <?php

$lunasJupiters=["europa", "ganimedes", "ío", "calisto", "amaltea","adrastea"];
echo " <h2>Algunas lunas de Jupiter:</h2>";
foreach ($lunasJupiters as $lunasJupiter) {;
    echo '<p>'. $lunasJupiter. '</p>';
}

array_push($lunasJupiters, "tebe", "carmé", "autónoe");
echo " <h2>lista más grande de las lunas de Jupiter:</h2>";
foreach ($lunasJupiters as $lunasJupiter) {;
    echo '<p>'. $lunasJupiter. '</p>';
}


?>



