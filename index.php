
<?php

$gravedadEnFuncion =["Mercurio"=>37.8,"Venus"=> 90.5,"Marte"=> 37.86,"Jupiter"=> 252.96,"Saturno"=> 106.54,"Urano"=> 90.52,"Neptuno"=> 113.8];

echo"gravedad de Mercurio es: ",$gravedadEnFuncion["Mercurio"], " veces a la de la tierra <br>";
echo"gravedad de Venus  es: ",$gravedadEnFuncion["Venus"], " veces a la de la tierra <br>";
echo"gravedad de Marte es: ",$gravedadEnFuncion["Marte"], " veces a la de la tierra <br>";
echo"gravedad de Jupiter es:  ",$gravedadEnFuncion["Jupiter"], " veces a la de la tierra <br>";
echo"gravedad de saturno es: ",$gravedadEnFuncion["Saturno"], " veces a la de la tierra <br>";
echo"gravedad de Urano es: ",$gravedadEnFuncion["Urano"], " veces a la de la tierra <br>";
echo"gravedad de Neptuno es: ",$gravedadEnFuncion["Neptuno"], " veces a la de la tierra <br> <br>";

function gravedadReal ($a){
    echo number_format($a*0.098, 2) ," gravedad real del planeta <br>";
}
array_walk($gravedadEnFuncion, 'gravedadReal');
?>
