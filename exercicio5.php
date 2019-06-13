<?php

function poligano ($lados,$medida)
{
    $peri = $lados * $medida;

if ($lados==3)

   print "\n Triângulo área = $peri \n" ;

if ($lados==4)

   print "\n Quadrado área = $peri \n" ;
    
if ($lados==5)

   print "\n Pentágono área = $peri \n" ;


   return $tipo; 

}


print "Digite a quantidade de lados do seu poligano (3,4 ou 5): ";
$lados = (int) fgets (STDIN);

print "Digite a medida do lado: ";
$medida = (float) fgets (STDIN);

$tipo = poligano ($lados, $medida);
