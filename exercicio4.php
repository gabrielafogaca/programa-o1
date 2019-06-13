<?php

function pesoideal ($altura, $sexo)
{

    if ($sexo == 1){

        $peso_id = (62.1 * $altura) - 44.7 ;

        print "\n Seu peso ideal é $peso_id \n ";
    }

    else {
        $peso_id= (72.7 * $altura) - 58;

        print "\n Seu peso ideal é $peso_id \n ";
    }

    return $peso_id;

}

print "Digite o seu sexo \n -> feminino (1) \n e Masculino (2): \n ";
$sexo = (int) fgets (STDIN);

print "Digite sua altura: ";
$altura = (float) fgets (STDIN);

$peso_id=pesoideal ($altura,$sexo);
