<?php
print "Digite a temperatura em Fahrenheit: ";
$tempf = (float) fgets (STDIN);
calcularTemperatura ($tempf );


function calcularTemperatura ($tempf) {

    $tempc = ($tempf - 32) * 5/9;
    print $tempc;
}

