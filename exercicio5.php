<?php

function poligono ($lados,$medida)
{
    $area = ($medida * $medida);
    $peri = ($medida * $lados);

    if ($lados==3)

        print "\n Perímetro do Triângulo: $peri \n" ;

    if ($lados==4)

        print "\n Área do Quadrado: $area \n" ;

    if ($lados==5)

        print "\n Pentágono  \n" ;


    return $tipop;

}


print "Digite a quantidade de lados do seu polígono (3, 4 ou 5): ";
$lados = (int) fgets (STDIN);

print "Digite a medida do lado: ";
$medida = (float) fgets (STDIN);

$tipop = poligono ($lados, $medida);
