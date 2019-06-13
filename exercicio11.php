<?php

function polegada ($p)
{
    $c = $p*2.54;

return $c;  

}

print " Digite a Medida em  Polegadas: ";
$p = (int) fgets (STDIN);

$c = polegada ($p);

print "\n $p polegadas é igual a $c centímetros \n ";
