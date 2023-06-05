
<?php
echo"<h2> naves espaciales con su respectiva masa</h2>";
$naves_espaciales =["Atlantis"=>37.8,"Corazón de Oro"=> 90.5,"Discovery"=> 37.86,"Enano Rojo"=> 252.96,"Enterprise"=> 106.54,
"Estrella de la Muerte"=> 90.52,"Galáctica"=> 113.8];

echo"La masa de Atlantis es: ",$naves_espaciales["Atlantis"], " metros cubicos <br>";
echo"La masa de Corazón de Oro  es: ",$naves_espaciales["Corazón de Oro"], " metros cubicos <br>";
echo"La masa de Discovery es: ",$naves_espaciales["Discovery"], " metros cubicos <br>";
echo"La masa de Enano Rojo es:  ",$naves_espaciales["Enano Rojo"], " metros cubicos <br>";
echo"La masa de Enterprise es: ",$naves_espaciales["Enterprise"], " metros cubicos <br>";
echo"La masa de Estrella de la Muerte es: ",$naves_espaciales["Estrella de la Muerte"], " metros cubicos <br>";
echo"La masa de Galáctica es: ",$naves_espaciales["Galáctica"], " metros cubicos <br> <br>";
echo "La suma de las masas de todas las naves es:";
print_r(array_sum($naves_espaciales)) ;
echo" metros cubicos";

?>
