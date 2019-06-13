<?php

function intervalo ($n1,$n2)
{
    $n = $n2 - $n1 - 1 ;

    if ($n2 > $n1) {

        $s = ( $n1 + $n2 ) * $n/2 ;
    }

    if( $n1 >= $n2) {

        $s = ( ($n1 + $n2 ) * $n/2 )*-1 ;

    }

    return $s;

}

print "Digite o primeiro número: ";
$n1 = (float) fgets (STDIN);


print "Digite o segundo número: ";
$n2 = (float) fgets (STDIN);

$s = intervalo($n1,$n2);

print "\n O valor da soma dos números inteiros presentes no intervalo entre $n1 e $n2 é $s \n ";
