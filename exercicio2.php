<?php
print "Digite o 1º cateto:";
$catetoa = (float) fgets (STDIN);

print "Digite o 2º cateto:";
$catetob = (float) fgets (STDIN);

$hipotenusa = hipotenusa($catetoa, $catetob);
print "$hipotenusa";


function hipotenusa ($catetoa, $catetob) {
    
    $hipotenusa = sqrt ($catetoa * $catetoa + $catetob * $catetob);
    return $hipotenusa;
}