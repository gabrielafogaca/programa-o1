<?php

function maior ($n1, $n2)
{

    if ($n1>$n2) 
    {
        print " \n $n1 é o maior número \n ";   
    }
    else {
        print " \n $n2 é o maior número \n ";
    }
    
    
}

print "Digite a primeiro número: ";
$n1 = (int) fgets (STDIN);

print "Digite a segundo número: ";
$n2 = (int) fgets (STDIN);

$m = maior ($n1, $n2);

