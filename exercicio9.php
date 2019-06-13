<?php

function divisivel ($n1, $n2)
{

    if (($n1 % $n2) == 0) {
        return 1;
    }

    else {
        return 0;
    }
}

print "Digite a primeiro número: ";
$n1 = (int) fgets (STDIN);

print "Digite a segundo número: ";
$n2 = (int) fgets (STDIN);

$div = divisivel ($n1, $n2);

if ($div == 1) 
{
    print "$n1 é divisível por $n2";
}
else {
    print "$n1 não é divisível por $n2";
}
